<?php

namespace App\Http\Controllers;

use App\Http\Models\Invite;
use App\Http\Models\SsConfig;
use App\Http\Models\User;
use App\Http\Models\UserLabel;
use App\Http\Models\Verify;
use Illuminate\Http\Request;
use App\Mail\activeUser;
use Captcha;
use Response;
use Redirect;
use Cache;
use Mail;
use DB;
use Log;

/**
 * 注册控制器
 * Class LoginController
 *
 * @package App\Http\Controllers
 */
class RegisterController extends Controller
{

    // 注册页
    public function index(Request $request)
    {
        $cacheKey = 'register_times_' . md5($request->getClientIp()); // 注册限制缓存key

        if ($request->method() == 'POST') {
            $username = trim($request->get('username'));
            $password = trim($request->get('password'));
            $repassword = trim($request->get('repassword'));
            $captcha = trim($request->get('captcha'));
            $code = trim($request->get('code'));
            $register_token = $request->get('register_token');
            $aff = intval($request->get('aff', 0));

            //取出之前存贮的推广人链接，但优先级较低
            $his_aff_id = $request->cookie('aff_id', 0);
            $aff = $aff ? $aff : $his_aff_id;

            // 防止重复提交
            $session_register_token = $request->session()->get('register_token');
            if (empty($register_token) || $register_token != $session_register_token) {
                $request->session()->flash('errorMsg', '请勿重复请求，刷新一下页面再试试');

                return Redirect::back()->withInput();
            } else {
                $request->session()->forget('register_token');
            }

            if (empty($username)) {
                $request->session()->flash('errorMsg', '请输入用户名');

                return Redirect::back()->withInput();
            } else if (empty($password)) {
                $request->session()->flash('errorMsg', '请输入密码');

                return Redirect::back()->withInput();
            } else if (empty($repassword)) {
                $request->session()->flash('errorMsg', '请重新输入密码');

                return Redirect::back()->withInput();
            } else if (md5($password) != md5($repassword)) {
                $request->session()->flash('errorMsg', '两次输入密码不一致，请重新输入');

                return Redirect::back()->withInput($request->except(['password', 'repassword']));
            } else {
                $result = Verify::filter_email($username);
                if ($result['status'] == 'fail'){
                    $request->session()->flash('errorMsg', $result['msg']);
                    return Redirect::back()->withInput();
                }
            }

            // 是否校验验证码
            if ($this->config['is_captcha']) {
                if (!Captcha::check($captcha)) {
                    $request->session()->flash('errorMsg', '验证码错误，请重新输入');

                    return Redirect::back()->withInput($request->except(['password', 'repassword']));
                }
            }

            // 是否开启注册
            if (!$this->config['is_register']) {
                $request->session()->flash('errorMsg', '系统维护暂停注册');

                return Redirect::back();
            }

            // 如果需要邀请注册
            if ($this->config['is_invite_register']) {
                if (empty($code)) {
                    $request->session()->flash('errorMsg', '请输入邀请码');

                    return Redirect::back()->withInput();
                }

                // 校验邀请码合法性
                $code = Invite::query()->where('code', $code)->where('status', 0)->first();
                if (empty($code)) {
                    $request->session()->flash('errorMsg', '邀请码不可用，请更换邀请码后重试');

                    return Redirect::back()->withInput($request->except(['code']));
                }

                // 如果不是免费邀请码
                if (!$code->is_free) {
                    $aff = $code->uid;
                }
            }

            // 24小时内同IP注册限制
            if ($this->config['register_ip_limit']) {
                if (Cache::has($cacheKey)) {
                    $registerTimes = Cache::get($cacheKey);
                    if ($registerTimes >= $this->config['register_ip_limit']) {
                        $request->session()->flash('errorMsg', '系统已开启防刷机制，请勿频繁注册');

                        return Redirect::back()->withInput($request->except(['code']));
                    }
                }
            }

            // 校验用户名是否已存在
            $exists = User::query()->where('username', $username)->first();
            if ($exists) {
                $request->session()->flash('errorMsg', '用户名已存在，请更换用户名');

                return Redirect::back()->withInput();
            }

            // 校验aff对应账号是否存在
            if ($aff) {
                $affUser = User::query()->where('id', $aff)->first();
                $referral_uid = $affUser ? $aff : 0;
            } else {
                $referral_uid = 0;
            }

            // 最后一个可用端口
            $last_user = User::query()->orderBy('id', 'desc')->first();
            $port = $this->config['is_rand_port'] ? $this->getRandPort() : $last_user->port + 1;

            // 默认加密方式、协议、混淆
            $method = SsConfig::query()->where('type', 1)->where('is_default', 1)->first();
            $protocol = SsConfig::query()->where('type', 2)->where('is_default', 1)->first();
            $obfs = SsConfig::query()->where('type', 3)->where('is_default', 1)->first();

            // 创建新用户
            $transfer_enable = $referral_uid ? ($this->config['default_traffic'] + $this->config['referral_traffic']) * 1048576 : $this->config['default_traffic'] * 1048576;
            $user = new User();
            $user->username = $username;
            $user->password = md5($password);
            $user->port = $port;
            $user->passwd = makeRandStr();
            $user->transfer_enable = $transfer_enable;
            $user->method = $method ? $method->name : 'aes-192-ctr';
            $user->protocol = $protocol ? $protocol->name : 'auth_chain_a';
            $user->obfs = $obfs ? $obfs->name : 'tls1.2_ticket_auth';
            $user->enable_time = date('Y-m-d H:i:s');
            $user->expire_time = date('Y-m-d H:i:s', strtotime("+" . $this->config['default_days'] . " days"));
            $user->reg_ip = $request->getClientIp();
            $user->referral_uid = $referral_uid;
            $user->status = 1;
            $user->save();

            if ($user->id) {
                // 注册次数+1
                if (Cache::has($cacheKey)) {
                    Cache::increment($cacheKey);
                } else {
                    Cache::put($cacheKey, 1, 1440); // 24小时
                }

                // 初始化默认标签
                if (strlen($this->config['initial_labels_for_user'])) {
                    $labels = explode(',', $this->config['initial_labels_for_user']);
                    foreach ($labels as $label) {
                        $userLabel = new UserLabel();
                        $userLabel->user_id = $user->id;
                        $userLabel->label_id = $label;
                        $userLabel->save();
                    }
                }

                // 更新邀请码
                if ($this->config['is_invite_register']) {
                    Invite::query()->where('id', $code->id)->update(['fuid' => $user->id, 'status' => 1]);
                }
            }

            // 不需要激活的话，才会直接赠送商品
            if (!$this->config['is_active_register']){
                //推荐的用户获取赠送商品
                if($referral_uid != 0){
                    DB::beginTransaction();
                    try {
                        $affUser = User::query()->where('id', $referral_uid)->first();
                        $goods_ids = $this->config['referral_good_ids'];
                        $goods_ids = explode(';', $goods_ids);
                        foreach ($goods_ids as $goods_id) {
                            $result = User::addOrder($affUser->id, $goods_id, $coupon_sn = -1, $status = 1, $pay_way = 0);
                            if($result['status'] == 'fail'){
                                throw  new Exception($result['message']);
                            }
                        }
                        DB::commit();
                        Log::info($affUser->username.'推荐用户,获取赠送商品成功');
                    } catch (\Exception $e) {
                        DB::rollBack();
                        Log::error('推荐的用户获取赠送商品失败：'.$e->getMessage());
                    }
                }

                //用户注册赠送商品
                DB::beginTransaction();
                try {
                    $user_id = $user->id;
                    $goods_ids = $this->config['initial_good_ids'];
                    $goods_ids = explode(';', $goods_ids);
                    foreach ($goods_ids as $goods_id) {
                        $result = User::addOrder($user_id, $goods_id, $coupon_sn = -1, $status = 2, $pay_way = 0);
                        if($result['status'] == 'fail'){
                            throw  new Exception($result['message']);
                        }
                    }
                    DB::commit();
                    Log::info($user->username.'用户注册赠送商品成功');
                } catch (\Exception $e) {
                    DB::rollBack();
                    Log::info($user->username.'用户注册赠送商品成功');
                }
            }

            // 发送邮件
            if ($this->config['is_active_register']) {
                User::query()->where('id', $user->id)->update(['status'=>0]);
                // 生成激活账号的地址
                $token = md5($this->config['website_name'] . $username . microtime());
                $verify = new Verify();
                $verify->user_id = $user->id;
                $verify->username = $username;
                $verify->token = $token;
                $verify->status = 0;
                $verify->save();

                $activeUserUrl = $this->config['website_url'] . '/active/' . $token;
                $title = '注册激活';
                $content = '请求地址：' . $activeUserUrl;

                try {
                    Mail::to($username)->send(new activeUser($this->config['website_name'], $activeUserUrl));
                    $this->sendEmailLog($user->id, $title, $content);
                } catch (\Exception $e) {

                    $this->sendEmailLog($user->id, $title, $content, 0, $e->getMessage());
                }

                $request->session()->flash('regSuccessMsg', '注册成功：激活邮件已发送，请查看邮箱');
            } else {
                // 如果不需要激活，则直接给推荐人加流量
                if ($referral_uid) {
                    $transfer_enable = $this->config['referral_traffic'] * 1048576;

                    User::query()->where('id', $referral_uid)->increment('transfer_enable', $transfer_enable);
                    User::query()->where('id', $referral_uid)->update(['enable' => 1]);
                }

                $request->session()->flash('regSuccessMsg', '注册成功');
            }

            return Redirect::to('login');
        } else {
            $request->session()->put('register_token', makeRandStr(16));

            // 如果第一次打开带返aff，则存储aff，防止再次打开无返利aff
            if (intval($request->get('aff'))) {
                if (!$request->session()->get('register_aff')) {
                    $request->session()->put('register_aff', intval($request->get('aff')));
                }
            }

            $view['is_captcha'] = $this->config['is_captcha'];
            $view['is_register'] = $this->config['is_register'];
            $view['is_invite_register'] = $this->config['is_invite_register'];

            return $this->view('register', $view);
        }
    }


}

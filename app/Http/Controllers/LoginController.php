<?php

namespace App\Http\Controllers;

use App\Http\Models\User;
use App\Http\Models\UserScoreLog;
use Illuminate\Http\Request;
use Response;
use Redirect;
use Captcha;
use Cache;

/**
 * 登录控制器
 * Class LoginController
 *
 * @package App\Http\Controllers
 */
class LoginController extends Controller
{
    // 登录页
    public function index(Request $request)
    {
        if ($request->method() == 'POST') {
            $username = trim($request->get('username'));
            $password = trim($request->get('password'));
            $captcha = trim($request->get('captcha'));

            if (empty($username) || empty($password)) {
                $request->session()->flash('errorMsg', '请输入用户名和密码');

                return Redirect::back();
            }

            // 是否校验验证码
            if ($this->config['is_captcha']) {
                $request->session()->put('captcha.sensitive', false);
                if (!Captcha::check($captcha)) {
                    $request->session()->flash('errorMsg', '验证码错误，请重新输入');

                    return Redirect::back()->withInput();
                }
            }

            $user = User::query()->where('username', $username)->where('password', md5($password))->first();
            if (!$user) {
                $request->session()->flash('errorMsg', '用户名或密码错误');

                return Redirect::back()->withInput();
            } else if ($user->is_admin != 1 && $user->status < 0) {
                $request->session()->flash('errorMsg', '账号已禁用');

                return Redirect::back();
            } else if ($user->is_admin != 1 && $user->status == 0 && $this->config['is_active_register']) {
                $request->session()->flash('errorMsg', '账号未激活，请先<a href="/activeUser?username=' . $user->username . '" target="_blank"><span style="color:#000">【激活账号】</span></a>');

                return Redirect::back()->withInput();
            }

            // 更新登录信息
            $remember_token = "";
            User::query()->where('id', $user->id)->update(['last_login' => time()]);
            if ($request->get('remember')) {
                $remember_token = makeRandStr(20);

                User::query()->where('id', $user->id)->update(['last_login' => time(), "remember_token" => $remember_token]);
            } else {
                User::query()->where('id', $user->id)->update(['last_login' => time()]);
            }


            // 登录送积分
            if ($this->config['login_add_score']) {
                if (!Cache::has('loginAddScore_' . md5($username))) {
                    $score = mt_rand($this->config['min_rand_score'], $this->config['max_rand_score']);
                    $ret = User::query()->where('id', $user->id)->increment('score', $score);
                    if ($ret) {
                        $obj = new UserScoreLog();
                        $obj->user_id = $user->id;
                        $obj->before = $user->score;
                        $obj->after = $user->score + $score;
                        $obj->score = $score;
                        $obj->desc = '登录送积分';
                        $obj->created_at = date('Y-m-d H:i:s');
                        $obj->save();

                        // 登录多久后再登录可以获取积分
                        $ttl = $this->config['login_add_score_range'] ? $this->config['login_add_score_range'] : 1440;
                        Cache::put('loginAddScore_' . md5($username), '1', $ttl);

                        $request->session()->flash('successMsg', '欢迎回来，系统自动赠送您 ' . $score . ' 积分，您可以用它兑换流量包');
                    }
                }
            }

            // 重新取出用户信息
            $userInfo = User::query()->where('id', $user->id)->first();

            $request->session()->put('user', $userInfo->toArray());

            // 根据权限跳转
//            if ($user->is_admin) {
//                return Redirect::to('admin')->cookie('remember', $remember_token, 36000);
//            }

            return Redirect::to('/')->cookie('remember', $remember_token, 36000);
        } else {
            if ($request->cookie("remember")) {
                $u = User::query()->where("remember_token", $request->cookie("remember"))->first();
                if ($u) {
                    $request->session()->put('user', $u->toArray());

                    if ($u->is_admin) {
                        return Redirect::to('/');
                    }

                    return Redirect::to('user/index');
                }
            }

            $view['is_captcha'] = $this->config['is_captcha'];
            $view['is_register'] = $this->config['is_register'];

            return $this->view('login', $view);
        }
    }

    // 退出
    public function logout(Request $request)
    {
        $request->session()->flush();

        return Redirect::to('/')->cookie('remember', "", 36000);
    }

}

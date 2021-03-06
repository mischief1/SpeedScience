@extends('home.layouts')
@section('main_content')

    <div class="page-banner page-banner-subpage p-b-0 text-center">
        @include('home.subpage.tos_full_sub')
    </div>
    <!-- /.page-banner -->

    <div class="page-section">
        <div class="container">

            <p>最后更新：2018年4月12日</p>

            <div class="section-row row">
                <div class="col-sm-8">

                    <p>
                        该服务条款是约束由{{$app_config['website_name']}}提供的所有产品和服务，以下是条款和条件：
                    </p>
                    <br/>
                    <p>
                        <b>当事双方及术语介绍- </b>本协议所提及的当事人的定义如下：
                    </p>
                    <ol class="standard-ol">
                        <li>
                            {{$app_config['website_name']}}<a href="{{url('/home/index')}}"> {{url('/')}}</a>（下称“{{$app_config['website_name']}}”或“本站”）的拥有者及服务提供商。{{$app_config['website_name']}}提供的是网络加速服务。
                            就本协议的目的，以下提及的产品或服务，均称作“产品”或“服务”。
                            <br/>
                            <br/> 当第一人称代词（{{$app_config['website_name']}}，我们，我们的等）在本协议中使用，均指{{$app_config['website_name']}} Group
                            China。此外，当使用术语“网站”或“本网站站点”，指的是由{{$app_config['website_name']}}提供的任意网站，除非某个网站是这一政策明确免除的。
                        </li>
                        <li>
                            <b>您，{{$app_config['website_name']}}客户 -</b> 作为我们的客户或网站服务的使用者， 本协议可能使用任意第二人称代替。
                        </li>
                    </ol>
                    <p>
                        请阅读下面的托管服务条款和条件。通过订阅的<span class="text_upper">{{$app_config['website_name']}}</span>服务，即表示您同意遵守本协议的所有条款和条件（协议）。如果使用此协议的同意条款和条件，按一下我接受（或类似的场景）或选中相应的框体，即表示你意图接受这些条款和条件。您应该打印或以其他方式保存该协议，作为未来可引用的副本。如果您并非适用于所有本协议的条款和条件的认同，如果您不同意此服务和条款，请勿购买{{$app_config['website_name']}}的产品和服务，并点击浏览器“返回”按钮，或关闭本网站。{{$app_config['website_name']}}仅在您同意此服务条款后，为您提供服务。此协议是在全球和国内的商业法允许下签署。任何使用{{$app_config['website_name']}}提供的服务的行为，都认为您知晓并同意一下服务条款。
                    </p>
                    <p>
                        <u><b>共同条款</b></u>.
                    </p>
                    <p>
                        尽管此协议代表主要的使用条款，其他准则和规则在此通过引用并入本文。这些文件可以在我们网站上找到，其中包含：
                    </p>
                    <p>
                        我们的可接受使用策略 (<a href="{{url('/home/use_policy')}}">{{url('/home/use_policy')}}</a>)
                    </p>
                </div>
                <div class="col-sm-4">
                    <p class="h6 m-t-0">更简单的说：</p>
                    <p class="legal-simple">
                        为了给您提供更好的服务，我们需要您同意以下条款。
                    </p>
                </div>
            </div>

            <div class="section-row row">
                <div class="col-sm-8">
                    <h2>1. 服务</h2>
                    <p>
                        <b>1.1</b>&nbsp;&nbsp;&nbsp;在您选购{{$app_config['website_name']}}服务之前，您可以看到一系列罗列出的套餐。您可以从罗列的服务中选择所需套餐。所有您选择的服务，均适用此条款。
                        在您订购服务后，我们认为您接受此使用条款，{{$app_config['website_name']}}将发送服务订购确认邮件。{{$app_config['website_name']}}保留以任何原因拒绝为您提供任何服务的权利。尽管我们的正常运行时间保证在本协议第17条中列出，{{$app_config['website_name']}}也有权在紧急状况中断接入服务进行定期维护需要。您可以随时订购额外的服务。所有的额外服务在下文被视为“服务”。所提供的所有服务都视情况而定，并适用于本协议的所有条款和条件。
                    </p>
                </div>
                <div class="col-sm-4">
                    <p class="h6 m-t-h2">更简单地说：</p>
                    <p class="legal-simple">
                        我们会在您订购的服务生效时即时通知您<br/>
                        <br/> 不幸的是，我们也会在特殊情况下中断服务或拒绝为您服务。
                    </p>
                </div>
            </div>

            <div class="section-row row">
                <div class="col-sm-8">
                    <h2>2. 用户协议修订</h2>
                    <p>
                        本协议包含完整的条款和条件适用于您使用{{$app_config['website_name']}}服务（定义如下）。{{$app_config['website_name']}}可以在任何时间修改本协议的条款，包括费用（定义见下文）。
                    </p>
                    <p>
                        <b>2.1</b>&nbsp;&nbsp;&nbsp;我们可能随时修改本协议。您同意我们保留这样做的权利。您同意我们有单方面这样做的权利。更新的版本将在发布后立即取代任何以前的版本，之前的版本是不再具备法律效力，除非修订版和之前版本一致。本协议的任何第三方修改版本均被视为无效。
                    </p>
                    <p>
                        <b>2.2</b>&nbsp;&nbsp;&nbsp;我们同意，如果我们协议有任何改变，我们将在本协议的顶部更改“最后修改日期”。您同意定期重新访问该网页。您同意注意最后修订本协议的日期。如果“上次修改”日期仍从你最后一次查看本协议不变，那么你可以假定该协定已自上次你查看时它已经改变了。如果“上次修改”日期已经改变，那么你可以肯定协议中有关条款已被更改。
                    </p>
                    <p>
                        <b>2.3</b>&nbsp;&nbsp;&nbsp;如果由于我们所做的任何修改，您需要终止本协议，必须于上述的“最后修改”日起三十（30）日内通过书面申请形式取消。在任何此类通知的生效日期后继续使用服务，即表示您接受这些修改。
                    </p>
                    <p>
                        <b>2.4</b>&nbsp;&nbsp;&nbsp;弃权 &ndash; 如果您没有定期查看此协议,
                        您自行承担忽略此协定更改的责任。您拥有随时查看此修订版本的权利。由于您自己忽略查看的原因，{{$app_config['website_name']}}不负任何责任。
                    </p>
                </div>
                <div class="col-sm-4">
                    <p class="h6 m-t-h2">更简单的说：</p>
                    <p class="legal-simple">
                        我们会不定期更新此协议。 在本页面顶部查看最后修改日期。<br/>
                        <br/> 继续使用我们的服务，表示您接受此条款的修订。
                    </p>
                </div>
            </div>
            <div class="section-row row">
                <div class="col-sm-8">
                    <h2>3. 协议和取消政策期限</h2>
                    <p>
                        <b>3.1</b>&nbsp;&nbsp;&nbsp;初始期限开始于确认你的订单或服务，并收到合法的资金的时间。这个期限的长度是由您选择的，并且在您订购我们的服务时应注明。本协议不得终止您的初始期间，除了{{$app_config['website_name']}}发生违约。、
                    </p>
                    <p>
                        <b>3.2</b>&nbsp;&nbsp;&nbsp;{{$app_config['website_name']}}也可以在任何时间以任何理由或无理由终止本协议
                        （“无故终止”）。在这种情况下，{{$app_config['website_name']}}会为您提供书面通知。
                    </p>
                    <p>
                        <b>3.3</b>&nbsp;&nbsp;&nbsp;如果{{$app_config['website_name']}}根据本协议任何条款概述取消本协议，没有根据3.2款终止的原因外，{{$app_config['website_name']}}不会退款给您。若您需要终止服务，您有义务在预付费服务生效前取消订阅。在由{{$app_config['website_name']}}发起的终止情况，所有预付托管费将被没收，概不退还。本协议的终止并不解除支付任何费用。
                    </p>
                    <p>
                        <b>3.4</b>&nbsp;&nbsp;&nbsp;除此之外，{{$app_config['website_name']}}拥有终止此协议中任意部分的权利。当以下情况发生，{{$app_config['website_name']}}可以终止你的服务：（a）违反了可接受使用政策（“AUP”）在第12条所描述的内容，（b）侵犯或违反任何第三方的知识产权或隐私权或版权，（C）不遵守任何适用的法律、法规或条例，或（d）已经上传，发布或传播任何{{$app_config['website_name']}}认为违法或高风险的图像、文本、图形、编码或视频，在其自由裁量权。本协议中的任何内容的目的是，{{$app_config['website_name']}}不负有任何责任或义务来监视或审查您的内容，或在任何时候你的用户上传或发布的内容。你仍然对你的内容负责，以及对由此产生的任何责任负责。
                    </p>
                    <p>
                        <b>3.5</b>&nbsp;&nbsp;&nbsp;本协议的终止将终止你访问你的服务和您的许可的托管材料（本协议5.2节所定义）。{{$app_config['website_name']}}不需要您或任何第三方的允许即可终止你的服务。本协议终止时，{{$app_config['website_name']}}有权维护备份您的数据文件和记录的副本，但不承担任何义务为您备份。{{$app_config['website_name']}}保留在所有服务结算周期的最后一天之前实行提前终止的权利。
                    </p>
                    <p>
                        <b>3.6</b>&nbsp;&nbsp;&nbsp;如果任何一方以任何原因取消或终止本协议，您将全权负责所有必需的安排，以确保更换主机和移动所有的电子数据，图形，图像，视频或文本到新的服务供应商。
                    </p>
                </div>
                <div class="col-sm-4">
                    <p class="h6 m-t-h2">更简单地说：</p>
                    <p class="legal-simple">
                        我们要求你保持使用你的服务，直到在其周期结束。{{$app_config['website_name']}}保留在任何时间取消您的服务的权利，但我们真的不想！<br/>
                        <br/> 由你的内容产生的责任是你的责任。如果不同意我们这项协议，您应该选择是否迁移数据至另一个供应商。
                </div>
            </div>
            <div class="section-row row">
                <div class="col-sm-8">
                    <h2>4. 账户设置</h2>
                    <p>
                        <b>4.1</b>&nbsp;&nbsp;&nbsp;注册账户时，您将被要求填写登录账户（电子邮件）和密码。您可以并只可以通过这样的用户标识和密码使用该服务或修改您的数据和内容。您完全负责维护您的用户名和密码的保密性和使用这些凭据的所有活动的机密性。您同意立即通知我们当任何未经授权的访问使用您的帐户或任何其他违反安全的情况。
                    </p>
                    <p>
                        <b>4.2</b>&nbsp;&nbsp;&nbsp;您必须为我们提供一个主要的电子邮件地址，定期检查。所有通知和我们之间的通信将被发送到您提供的电子邮件地址，因此，您需要保持这个地址畅通，如果您的地址更改，请通知我们。如果您的联系和/或帐单信息发生变化，您应该通知我们，以便我们可以更新您的帐户。它确保我们的域名<a
                                href="{{url('/')}}"> {{url('/')}} </a>不包括在由你或你的邮件提供商使用任何垃圾邮件阻止列表之内。
                    <p>
                        <b>4.3</b>&nbsp;&nbsp;&nbsp;提供任何种类的错误或不准确的联系信息，依据本协议3中相关条款，可能会导致你的帐户被终止。
                    </p>
                    <p>
                        <b>4.4</b>&nbsp;&nbsp;&nbsp;你负责您的帐户所有活动及变更。因此，我们强烈建议您妥善保管设置最严格的保密措施来保管文件，目录和脚本权限。你认为你拥有运营一个网站的技术能力。你负责任何你账户发生更改行为，包括但不限于，造成你的网站的损害，{{$app_config['website_name']}}网站和/或设备的损害，和任何其他网站的损害。
                    </p>
                </div>
                <div class="col-sm-4">
                    <p class="h6 m-t-h2">更简单的说：</p>
                    <p class="legal-simple">
                        保存好你的登录信息！<br/>
                        <br/> 请确保您即时更新Email信息。我们的绝大多数回复及沟通均通过Email进行。
                        <br/>
                        <br/> 同时，小心您的账户信息泄露。您账户发生的任何操作，均由您自己负责。
                    </p>
                </div>
            </div>
            <div class="section-row row">
                <div class="col-sm-8">
                    <h2>5. 知识产权</h2>
                    <p>
                        通过{{$app_config['website_name']}}提供的所有服务仅可用于合法目的。
                    </p>
                    <p>
                        <b>5.1</b>&nbsp;&nbsp;&nbsp;在你和{{$app_config['website_name']}}之间，{{$app_config['website_name']}}承声明它不拥有你提供的使用在你的网站的所有权或内容（包括但不限于文字、软件、音乐、声音、视听作品、电影、图片、动画、视频和图形）（你的内容”）。您特此授予{{$app_config['website_name']}}使用你的内容，通过互联网广播传输非独家的、世界范围的、免版税许可、复制、制作衍生作品、展示、表演。
                    </p>
                    <p>
                        <b>5.2</b>&nbsp;&nbsp;&nbsp;{{$app_config['website_name']}}可以（但不是必须）为你提供一定的材料，包括但不限于计算机软件（目标代码或源代码形式）、数据文件或信息开发、{{$app_config['website_name']}}或其供应商提供本协议项下的域名、电子邮件地址、分配给你的其他网络地址和其他专有技术、方法、设备和工艺，采用{{$app_config['website_name']}}为您提供服务（“主材料”）。根据本协议的条款和条件，{{$app_config['website_name']}}授予您与服务连接单独使用的主体材料有限的、可撤销、不可转让的、非排他性的许可。本协议终止时，该许可证终止。您承认并同意，{{$app_config['website_name']}}拥有一切权利，所有权和利益，或以其他方式取得的主体材料的所有适用的许可证、所有的著作权、商业秘密、专利、商标和其他知识产权的权利。任何在本协议终止后的主机材料未经许可，严禁使用。您同意没有获得书面许可不会上传、传输、复制、分发或以任何方式利用任何主机材料。
                    </p>
                    <p>
                        <b>5.3</b>&nbsp;&nbsp;&nbsp;本协议不构成许可使用{{$app_config['website_name']}}服务标志或任何其他贸易徽章。没有{{$app_config['website_name']}}事先书面同意的使用任意{{$app_config['website_name']}}服务标志或任何其他贸易标志是严格禁止的。
                    </p>

                    <p>
                        <b>5.4</b>&nbsp;&nbsp;&nbsp;你知道，即使是名义的损害，也可能需要大量的法律费用，旅行费用，成本和其他金额。你同意你将支付所有这些费用和费用。
                    </p>
                </div>
                <div class="col-sm-4">
                    <p class="h6 m-t-h2">更简单的说：</p>
                    <p class="legal-simple">
                        你所有的内容属于你，不是{{$app_config['website_name']}}！你只是给予{{$app_config['website_name']}}允许链接你的内容至互联网。<br/>
                        <br/> 如果我们结束为您提供任何软件，此项协议适用于此。
                        <br/>
                        <br/> 我们希望你喜欢{{$app_config['website_name']}}服务，当它涉及到使用我们的名字和商标时，也有一些法律的界限。在做之前与我们联系。
                        <br/>
                        <br/> 滥用我们的服务对我们来说是很昂贵的。如果滥用的目的在损害，您可能必须偿还我们的法律费用。
                    </p>
                </div>
            </div>


            <div class="section-row row">
                <div class="col-sm-8">
                    <h2>6. 内容及可接受使用政策</h2>
                    <p>
                        <b>6.1</b>&nbsp;&nbsp;&nbsp;您同意遵守{{$app_config['website_name']}}的可接受使用策略，它可以通过访问{{$app_config['website_name']}}的网站<a
                                href="{{url('/home/use_policy')}}"> 使用政策 </a>中被找到。其中部分并入本文作为参考并作为本文不可或缺的一部分。{{$app_config['website_name']}}在网站上张贴修改后的政策，并保留在任何时间修改可接受使用策略的权力。您同意定期访问{{$app_config['website_name']}}网站并查看最新的可接受使用策略，在任何可接受使用策略更改日志后继续使用{{$app_config['website_name']}}服务，则代表您接受新的可接受使用策略并受到它的约束。如果最终用户的行为违反服务条款或者可接受使用策略，{{$app_config['website_name']}}将有权在任何时间中止您对服务的访问。
                    </p>
                    <p>
                        <b>6.2</b>&nbsp;&nbsp;&nbsp;{{$app_config['website_name']}}不会主动侦测最终用户在{{$app_config['website_name']}}服务上所使用的内容，虽然{{$app_config['website_name']}}可以自行决定，以技术手段监测客户在{{$app_config['website_name']}}网络上所使用的服务，并在法律、法规或政府组织要求的情况下透露您账户的任何必要信息。{{$app_config['website_name']}}将调查侵犯第三方权利或违反可接受使用策略的投诉。{{$app_config['website_name']}}将试图减少对{{$app_config['website_name']}}服务的滥用。{{$app_config['website_name']}}将有权与执法机关合作，并保留通知该机关的权力，如果执法机关怀疑您和您的最终用户进行违反的您和服务器所在地区法律、法规和相关政策的活动。本节包含的所有条款，是为了授予第三方权利，但没有第三方有权强制执行本协议的任何条款。
                    </p>
                    <p>
                        <b>6.3</b>&nbsp;&nbsp;&nbsp;您必须同意{{$app_config['website_name']}}将不承担您和您的最终用户任何违反可接受使用策略和您和服务器所在地区法律、法规和相关政策的行为，这包括数字千年版权法。
                    </p>
                    <p>
                        <b>6.4</b>&nbsp;&nbsp;&nbsp;{{$app_config['website_name']}}可自行决定终止您对服务的访问，并终止本协议。这是因为您或您的最终用户、下游客户违反了服务条款和可接受使用策略。
                    </p>
                    <p>
                        <b>6.5</b>&nbsp;&nbsp;&nbsp;{{$app_config['website_name']}}对于儿童色情问题非常重视，未成年人使用我们的服务存在潜在的危害，这应当是完全禁止的，然而，其监护人可以授权未成年人有限制地使用{{$app_config['website_name']}}的服务。任何可能被认为是儿童色情的内容都将被删除并禁止访问，这适用于{{$app_config['website_name']}}的云主机和云加速服务。任何通过{{$app_config['website_name']}}托管、访问儿童色情的客户都将被立即删除服务并通知当地执法机关。您同意和{{$app_config['website_name']}}合作阻止儿童色情内容的的访问，任何儿童色情内容，或招揽、引诱或诱使未成年人的性活动或者猥亵行为也是严格禁止的，并将被视为同儿童色情相同问题。{{$app_config['website_name']}}有权对在{{$app_config['website_name']}}网站上托管、访问儿童色情内容的客户提起诉讼。
                    </p>
                    <p>
                        <b>6.6</b>&nbsp;&nbsp;&nbsp;如果您怀疑{{$app_config['website_name']}}网络被托管了儿童色情内容，我们鼓励您立即向{{$app_config['website_name']}}的滥用投诉邮箱
                        <a href="mailto:{{$app_config['crash_warning_email']}}"> {{$app_config['crash_warning_email']}} </a>或者通过客户中心的工单系统向滥用投诉部门投诉，并包括客户的文件名或URL（或其他位置点）、受害者（如果知道的话）、出生日期、生产日期以及有关可疑图像（多个）和其他任何信息。或者，您可以使用CyberTipline报告可疑的儿童色情制品，涉及不由{{$app_config['website_name']}}托管的儿童色情内容应该直接向执法部门或者该网站投诉：
                        <a href="https://www.asacp.org/index.php?content=report">https://www.asacp.org/index.php?content=report</a>.
                    </p>
                    <p>
                        <b>6.7</b>&nbsp;&nbsp;&nbsp;我们尊重各方的知识产权，并已通过了关于基于数字千年版权法案重复版权侵权者终止政策。我们的重复侵权终止政策的副本可应要求提供给我们的客户。
                    </p>
                    <p>
                        <b>6.8</b>&nbsp;&nbsp;&nbsp;您同意您有责任防止您照顾的未成年人从您购买的{{$app_config['website_name']}}服务直接或间接访问任何有害或不当的内容。您同意不允许未成年人访问任何服务，并采取相关的限制措施，以防止他们这样做。许多商业在线安全过滤器可这可以帮助用户限制未成年人有害的或不适当的访问请注意，本网站不作任何陈述或有关的任何产品或在这些网站上引用的服务的保证，推荐用户购买或安装任何在线过滤器前进行适当的尽职调查。您同意采取特别措施，防止未成年人浏览本网站如果您的计算机可以由未成年人进行访问。最后，您同意，如果你是父母或未成年子女的监护人，您有责任阻止未成年人通过{{$app_config['website_name']}}服务访问任何不当内容，这是你的责任，不是我们的。
                    </p>
                </div>
                <div class="col-sm-4">
                    <p class="h6 m-t-h2">更简单地说：</p>
                    <p class="legal-simple">
                        您同意仔细阅读本节并遵守{{$app_config['website_name']}}的可接受使用条款，因为我们正在建立一个更好、更安全的{{$app_config['website_name']}}服务。<br/>
                        <br/> 非法内容，特别是儿童色情是严格禁止的，我们有义务和当局合作阻止此类内容，以防止他们侵害未成年人。
                        <br/>
                        <br/> 我们也需要您照顾好您抚养的未成年人，以防止他们通过{{$app_config['website_name']}}网络浏览到不当内容。
                        <br/>
                        <br/> 您允许我们禁止您的侵权文件在公共网络上的访问。
                    </p>
                </div>
            </div>
            <div class="section-row row">
                <div class="col-sm-8">
                    <h2>7. 零容忍垃圾邮件政策</h2>
                    <p>
                        <b>7.1</b>&nbsp;&nbsp;&nbsp;对于任何垃圾邮件在{{$app_config['website_name']}}网络上的使用是严格禁止的，如果您和您的最终用户在{{$app_config['website_name']}}网络上使用SPAM，我们有权随时终止您的服务。
                    </p>
                    <p>
                        <b>7.2</b>&nbsp;&nbsp;&nbsp;{{$app_config['website_name']}}在网站上张贴修改后的政策，并保留在任何时间修改反垃圾邮件政策的权力。您同意定期访问{{$app_config['website_name']}}网站并查看最新的反垃圾邮件政策，在任何反垃圾邮件政策更改日志后继续使用{{$app_config['website_name']}}服务，则代表您接受新的反垃圾邮件政策并受到它的约束。如果最终用户的行为违反服务条款或者反垃圾邮件政策，{{$app_config['website_name']}}将有权在任何时间中止您对服务的访问。
                    </p>
                </div>
                <div class="col-sm-4">
                    <p class="h6 m-t-h2">更简单地说：</p>
                    <p class="legal-simple">
                        没有人喜欢垃圾邮件！您必须遵守{{$app_config['website_name']}}的反垃圾邮件政策。
                    </p>
                </div>
            </div>
            <div class="section-row row">
                <div class="col-sm-8">
                    <h2>8. 支付</h2>
                    <p>
                        <b>8.1</b>&nbsp;&nbsp;&nbsp;支付服务涵盖了{{$app_config['website_name']}}的整个服务周期，并遵守本协议，除非您的服务终止，{{$app_config['website_name']}}将会在您的付款周期超时后删除您的服务，这是一个自动过程并且不可逆转。
                    </p>
                    <p>
                        <b>8.2</b>&nbsp;&nbsp;&nbsp;除非您和我们特别协商，并经过书面协定，否则您选择的服务的安装费用和循环付款费用，应在在线订购时作为初始费用一并支付，所有设置/安装费用和特殊设置费用不予退还。服务费用需要提前支付，没有及时支持服务费用时，您的服务可能会暂时或者删除。
                    </p>
                    <p>
                        <b>8.3</b>&nbsp;&nbsp;&nbsp;在注册时，您必须选择一个付款方式，{{$app_config['website_name']}}保留与第三方签订协议来处理所有付款请求的权力。这样的第三方可能施加额外的条款和条件来管理支付处理。如果你到期为及时支付所应支付的服务费用，{{$app_config['website_name']}}将保留权力在法律允许的范围内收取一定滞纳金的权力。
                    </p>
                    <p>
                        <b>8.4</b>&nbsp;&nbsp;&nbsp;您同意支付任何由于使用本服务而造成的税款，包括个人所得税、增值税或销售税。{{$app_config['website_name']}}不负责由于您使用本服务并使用银行支票、信用卡、资金不足以及任何您与您的金融机构产生的任何费用。{{$app_config['website_name']}}应该得到全额付款，如果由于税收、汇率差异、银行收费、转账收费等产生额外费用，您需要自行支付。
                    </p>
                    <p>
                        <b>8.5</b>&nbsp;&nbsp;&nbsp;您也同意支付从{{$app_config['website_name']}}产生的任何律师费用、代收手续费和其他费用。同时，{{$app_config['website_name']}}不会退还任何安装费用、特殊设定费用、剩余的预付费费用。
                    </p>
                    <p>
                        <b>8.6</b>&nbsp;&nbsp;&nbsp;<u>优惠卷和优惠码</u> &ndash;
                        时不时地，{{$app_config['website_name']}}会提供优惠卷和优惠码，除特别声明外，这些优惠卷和优惠码只适用于首次购买的客户，您已经订购了{{$app_config['website_name']}}服务后，这些优惠可能将不会生效。这些优惠卷和优惠码可能不会应用到您升级您的产品时。任何账户试图滥用优惠卷和优惠码的将会被暂停或删除。
                    </p>
                </div>
                <div class="col-sm-4">
                    <p class="h6 m-t-h2">更简单地说：</p>
                    <p class="legal-simple">
                        提前付费，这将有助于您的服务保持运行。<br/>
                        <br/> 如果您决定停止付款，我们将会停止您的服务。
                        <br/>
                        <br/> 根据您所在的位置和要求，我们将可能对服务收税，税收不包含在产品原有的价格中。
                        <br/>
                        <br/> 首次购买的客户将可以通过优惠卷和优惠码省钱！
                    </p>
                </div>
            </div>
            <div class="section-row row">
                <div class="col-sm-8">
                    <h2>9. 备份措施 &amp; 数据丢失</h2>
                    <p>
                        <b>9.1</b>&nbsp;&nbsp;&nbsp;您同意您所使用的服务数据安全由您维护。{{$app_config['website_name']}}会通过必要措施，包括使用备用电源系统和数据备份，来保护您数据的安全。然而，这仍然需要您做好您数据的安全措施。我们不能保证在发生数据丢失时我们能够完整恢复您的服务。因此，我们强烈建议您建立自己的日常备份程序，以确保您数据的安全。
                    </p>
                    <p>
                        <b>9.2</b>&nbsp;&nbsp;&nbsp;如果您希望{{$app_config['website_name']}}提供日常的备份服务，这是本协议所不提供的服务，请与我们联系，我们提供多种常规服务之外的备份服务，您可以选择其中一种作为解决方案，我们将通过一个单独的书面协议提供所有服务。
                    </p>
                </div>
                <div class="col-sm-4">
                    <p class="h6 m-t-h2">更简单地说：</p>
                    <p class="legal-simple">
                        我们将竭尽所能地保护您的数据<br/>
                        <br/> 由于现实世界的情况，例如火山喷发和小行星撞击，总有发生数据丢失的可能性，但是几率很小。
                        <br/>
                        <br/> 我们建议您设立一个良好的备份计划。
                    </p>
                </div>
            </div>
            <div class="section-row row">
                <div class="col-sm-8">
                    <h2>10. 资源使用 &amp; 安全</h2>
                    <p>
                        <b>10.1</b>&nbsp;&nbsp;&nbsp;{{$app_config['website_name']}}没有对每个帐户的系统资源及硬件设限。我们不主动地停用用户帐户，除非它们大大超过可接受的使用水平。有可能导致这样的问题众多的活动包括：CGI脚本，FTP，PHP，HTTP等。
                    </p>
                    <p>
                        <b>10.2</b>&nbsp;&nbsp;&nbsp;除非法律明确允许，不得翻译，反向工程，反编译，反汇编本网站和/或材料的衍生作品。您同意不使用任何自动设备或手动过程监控或复制本网站或材料，不会使用任何设备，软件，计算机代码或病毒干扰或企图干扰或破坏我们的服务和网站。
                    </p>
                    <p>
                        <b>10.3</b>&nbsp;&nbsp;&nbsp;<u>安全</u>
                        任何违反网站的安全/或服务都是被禁止的，并可能导致刑事和民事责任。您同意不以此类活动违反或企图改变或操纵硬件和软件，危及服务器，或任何其他未经授权的使用。您被禁止从事：
                    </p>
                    <ol>
                        <li>
                            任何形式的未经授权的访问或使用数据，系统或网络，包括网站和/或服务。
                        </li>
                        <li>
                            与任何用户的服务，主机或网络进行未经授权的干扰。
                        </li>
                        <li>
                            恶意程序引入网络或服务器（例如病毒和蠕虫），包括网站和/或服务。
                        </li>
                        <li>
                            规避任何主机，网络或账户的用户和安全认证。
                        </li>
                        <li>
                            利用我们的服务为危及安全或其它网站。
                        </li>
                    </ol>
                    <p>
                        在您参与任何违反系统安全的情况下，我们有权为其他网站的系统管理员发布关于您的信息，以协助解决安全事件，我们也将与任何执法机构调查犯罪及违反系统或网络的安全性。此外，这些安全规定的违反可能会，根据本协议第3节，终止您的帐户。
                    </p>
                    <p>
                        <b>10.4</b>&nbsp;&nbsp;&nbsp;<u>流量使用</u>
                        您每月的流量是由您购买特定的服务来确定。如果您的使用过你的每月限额，你的账户将暂停，在下个月恢复。未使用的流量不结转到下个月的流量。
                    </p>
                    <p>
                        <b>10.5</b>&nbsp;&nbsp;&nbsp;<u>公平使用政策</u>
                        我们提供特定的服务给我们的客户和我们的虚拟专用服务器的使用。是整个任何给定的计费周期或流量包来定义正常，公平，合理的使用。我们期望用户按照描述来使用每一项服务。我们在我们的判断某一个用户不合理使用服务，我们可能会采取行动，以减轻负面影响。不公平的使用包括但不限于以下内容：
                    </p>
                    <ol>
                        <li>
                            转借、泄露、二次销售{{$app_config['website_name']}}账户或服务。
                        </li>
                        <li>
                            不间断使用各类型p2p、BT、PT下载服务。
                        </li>
                        <li>
                            超过服务规定的套餐使用人数。
                        </li>
                    </ol>
                </div>
                <div class="col-sm-4">
                    <p class="h6 m-t-h2">更简单地说：</p>
                    <p class="legal-simple">
                        系统健康是重要的。如果你有太多疯狂进程，我们可能要阻止或对这些服务限制速率。<br/>
                        <br/> 我们不希望你入侵，破坏我们的系统。
                        <br/>
                        <br/> 你必须遵守公平使用原则。
                    </p>
                </div>
            </div>
            <div class="section-row row">
                <div class="col-sm-8">
                    <h2>11. 正常运行时间保证</h2>
                    <p>
                        <b>11.1</b>&nbsp;&nbsp;&nbsp;{{$app_config['website_name']}}会为您提供服务等级协议，以保证我们的服务一定的可用性。当您需要额外的SLA时，请与我们联系，这将作为本协议额一部分引入并作为不可或缺的一部分。
                    </p>
                    <p>
                        为了能够获取SLA中断补偿，您必须按照一定的流程通知我们，您理解并同意，当您未能遵循一定的程序在SLA中断事件触发的三（3）天内，您将自动放弃获取SLA中断补偿的权力。
                    </p>
                </div>
                <div class="col-sm-4">
                    <p class="h6 m-t-h2">更简单地说：</p>
                    <p class="legal-simple">
                        {{$app_config['website_name']}}的正常运行时间保证在SLA中定义，您可以在SLA中断后的3天内向{{$app_config['website_name']}}提出索赔。
                    </p>
                </div>
            </div>
            <div class="section-row row">
                <div class="col-sm-8">
                    <h2>12. 价格变化</h2>
                    <p>
                        您支付的服务在一定时间内不会改变价格。我们保留在任何时候更改{{$app_config['website_name']}}服务价格的权利，恕不另行通知，并保留修改提供给用户的资源数量的权利。此外，如果我们终止，而无需根据该协议第3.2段因本协议，您明白，如果我们同意提供服务给您的未来，你在任何先验项或时间段支付的金额是不是决定性的金额你工资应该我们向您再次提供服务。这是你的责任，检查我们的计划或价格变动的网站如果你想采取哪些可能发生的计划或价格变化的优势。
                        {{$app_config['website_name']}}不会自动更新你的计划。所有的升级或降级将根据您的要求进行，可能包括修改费或要求与我们重新发起服务。
                    </p>
                </div>
                <div class="col-sm-4">
                    <p class="h6 m-t-h2">更简单地说：</p>
                    <p class="legal-simple">
                        你已经订购的服务在一定时间不会变化。<br/>
                        <br/> {{$app_config['website_name']}}服务的价格会动态调整。
                    </p>
                </div>
            </div>
            <div class="section-row row">
                <div class="col-sm-8">
                    <h2>13. 保障</h2>
                    <p>
                        您同意维护，保障，并维护{{$app_config['website_name']}}及其关联公司，免受任何及所有债权债务，包括合理的律师和专家费用，涉及到：（a）违反您在本协议项下约定而产生的; （b）您使用服务;
                        （c）所有的行为，并根据您的用户名和密码发生的活动; （d）任何物品或服务的出售或与您的内容或您的信息和数据的连接广告; （e）包含您的内容或你的信息和数据中的任何诽谤，中伤或非法的材料;
                        （f）任何索赔或论点，即您的内容或你的信息和数据侵犯任何第三方的专利，版权或其他知识产权或违反隐私或公开任何第三方的权利; （g）任何第三方的访问或使用您的内容或您的信息和数据;
                        （h）违反任何适用的可接受使用政策;（i）您保证并声明：1）您的内容与标题符合中国法律规定
                        2）在您的内容中描述所有客户在18岁以上；3）您的内容不包含构成儿童色情，淫秽，兽交，暴力的真实描述，或在中国不合法的任何图像;。

                    </p>
                </div>
                <div class="col-sm-4">
                    <p class="h6 m-t-h2">更简单地说：</p>
                    <p class="legal-simple">
                        如果你违反规定，与{{$app_config['website_name']}}无关。
                    </p>
                </div>
            </div>
            <div class="section-row row">
                <div class="col-sm-8">
                    <h2>14. 无额外保障</h2>
                    <p>
                        您明确同意，您对服务的使用是您自行承担的风险。{{$app_config['website_name']}}明确拒绝任何形式明示或默示的保修，包括所有的担保，包括但不限于适销性的隐含担保特定用途，所有权和非侵权。{{$app_config['website_name']}}不保证该项服务会满足您的需求，或者说，这些服务将不中断，安全或无错误。有关宣传材料及发表任何言论都应被视为广告引用，并且不保证。您理解并同意，任何使用您的任何服务和/或数据下载或通过服务所获得的使用由您自行决定，风险自负，而你将是单方承担损害您的计算机系统或损失数据的结果和风险。
                    </p>
                    <p>
                        <span class="text_upper">{{$app_config['website_name']}}</span>
                        可能会提供不属于服务（“第三方服务或软件”）的一部分，第三方产品，服务和/或软件提供给您。{{$app_config['website_name']}}无法控制第三方服务或软件的内容。任何第三方服务或软件的使用，您将个人独自承担风险并受您与第三方达成的单独协议的条款和条件的限制。
                    </p>
                    <p>
                        <span class="text_upper">{{$app_config['website_name']}}</span> 不提供有关任何产品和服务的保修。
                    </p>
                    <p>
                        您从{{$app_config['website_name']}}获得的任何建议或信息，无论是口头的还是书面的，均不构成任何保证。无论是通过暗示，默许或其他方式，包括但不限于任何在{{$app_config['website_name']}}网站市场营销或促销材料描述的服务的详情。
                    </p>
                    <p>
                        除非另有约定以书面，{{$app_config['website_name']}}不会使对你的网站服务备份。因此，我们鼓励你让你的网站定期备份。
                </div>
                <div class="col-sm-4">
                    <p class="h6 m-t-h2">更简单地说：</p>
                    <p class="legal-simple">
                        我们将努力为您提供最好的服务，但我们不包含服务保修。<br/>
                        <br/> 既然我们不能备份你的数据，我们建议你有一个良好的备份计划。
                    </p>
                </div>
            </div>
            <div class="section-row row">
                <div class="col-sm-8">
                    <h2>15. 责任限制</h2>
                    <p>
                        您自行负责为您的网站正常运行。在任何情况下{{$app_config['website_name']}}不对您引起的任何损失或涉及到你的操作影响你的网站造成故障负责。
                    </p>


                </div>
                <div class="col-sm-4">
                    <p class="h6 m-t-h2">更简单地说</p>
                    <p class="legal-simple">
                        您同意不因您的企业或网站的运作问题向{{$app_config['website_name']}}申请承担赔偿责任。
                    </p>
                </div>
            </div>


        </div>
    </div>
@endsection
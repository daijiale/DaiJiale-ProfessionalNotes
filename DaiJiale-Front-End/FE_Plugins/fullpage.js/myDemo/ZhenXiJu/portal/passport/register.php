<!DOCTYPE html>
<!-- saved from url=(0044)http://www.easywed.cn/users/account/register
-->
<html>
    
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta charset="UTF-8">
        <title>
            新人注册 - 真喜聚
        </title>
        
        <link type="text/css" rel="stylesheet" href="chrome-extension://kfgmnlgjmofpiicpgohgfpeabgpmhjdp/style.css">
        <link rel="stylesheet" type="text/css" href="./public/register_files/global.css">
        <link rel="stylesheet" type="text/css" href="./public/register_files/login.css">
        <style type="text/css">
        </style>
    </head>
    
    <body gtools_scp_screen_capture_injected="true" background="./public/register_files/777_small.jpg">
        <iframe src="javascript:false;" style="display: none;">
        </iframe>
        <div class="w">
            <h1 class="login-logo-box">
                <a href="../../index.php"><img src="./public/register_files/zxjlogo.png" ></a>         
            </h1>
            <div class="register clx">
                <div class="reg-tab clx">
                    <a class="fl on" href="register.php">
                        新人注册
                    </a>
                    <a class="fl" href="register_wedding.php">
                        婚礼人注册
                    </a>
                    <span class="fr">
                        已有真喜聚账号，您可以直接
                        <a href="login.php">
                            登录
                        </a>
                    </span>
                </div>
                <div class="register-l">
                    <form action="" id="validform">
                        <input name="type" type="hidden" value="1">
                        <div class="register-item clx">
                            <div class="register-item-l">
                                手机
                            </div>
                            <div class="register-item-c">
                                <input type="text" class="input-text" placeholder="请输入您的手机号" value=""
                                id="j-reg-email" ajaxurl="/api/users/check-phone" datatype="m" nullmsg="请输入手机号！"
                                errormsg="您的手机格式错误!">
                                <span class="Validform_checktip">
                                </span>
                            </div>
                        </div>
                        <div class="register-item clx">
                            <div class="register-item-l">
                                密码
                            </div>
                            <div class="register-item-c">
                                <div>
                                    <input type="password" class="input-text" name="password" placeholder="密码长度为6-16个字符，区分大小写，空格无效"
                                    value="" id="j-reg-pass" datatype="validpass" nullmsg="请输入您的密码！" errormsg="密码至少6个字符,最多16个字符！">
                                    <span class="Validform_checktip">
                                    </span>
                                </div>
                                <p class="pass-level-0" id="j-reg-passs-trength">
                                    <span class="pass-level-span1">
                                        弱
                                    </span>
                                    <span class="pass-level-span2">
                                        中
                                    </span>
                                    <span class="pass-level-span3">
                                        强
                                    </span>
                                </p>
                            </div>
                        </div>
                        <div class="register-item clx">
                            <div class="register-item-l">
                                昵称
                            </div>
                            <div class="register-item-c">
                                <input type="text" class="input-text" placeholder="长度为1-15个汉字、字母、数字" value=""
                                id="j-reg-name" datatype="nickname1-15" nullmsg="请输入昵称！" errormsg="昵称为：1-15个汉字、字母、数字!">
                                <span class="Validform_checktip">
                                </span>
                            </div>
                        </div>
                        <div class="register-item clx">
                            <div class="register-item-l">
                                验证码
                            </div>
                            <div class="register-item-c">
                                <input id="getcode" class="get-code" type="button" value="免费获取短信验证码">
                                <input type="text" name="code" class="input-text input-code" placeholder=""
                                value="" id="" datatype="*" nullmsg="请输入验证码" errormsg="验证码有误">
                                <span class="Validform_checktip">
                                </span>
                            </div>
                        </div>
                        <div class="register-item clx">
                            <div class="register-item-l">
                                &nbsp;
                            </div>
                            <div class="register-item-c">
                                <input type="submit" class="login-btn-submit" id="j-btn-register" value="立即注册">
                                <br>
                                <label for="agree">
                                    <input type="checkbox" datatype="*" name="checkbox" id="agree" checked="checked">
                                    我已阅读并同意
                                    <span class="Validform_checktip">
                                    </span>
                                </label>
                                <a href="" target="_blank">
                                    《
                                    <span>
                                        真喜聚服务协议
                                    </span>
                                    》
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="register-r">
              <!--       <div class="login-other clx">
                        <h3>
                            使用社交网站账户快速登录真喜聚：
                        </h3>
                        <a href=""
                        class="login-other-sina">
                            
                        </a>
                  
                        <a href=""
                        class="login-other-qq">
                          
                        </a>
                        <a href="" class="login-other-weixin"></a>
                    </div> -->
                    <div class="pt15">
                        
                    </div>
                </div>
            </div>
        </div>
        <!-- 加载全站js -->
        <script src="./public/register_files/adv.js">
        </script>
        <script type="text/javascript" id="seajsnode" src="./public/register_files/global.js">
        </script>
        <script type="text/javascript">
            seajs.use("home/register-new");
        </script>
        <div style="height:1px; visibility:hidden; overflow:hidden;">
            <script>
                var _hmt = _hmt || []; (function() {
                    var hm = document.createElement("script");
                    hm.src = "//hm.baidu.com/hm.js?3932165b12cedab9582059c60a441c78";
                    var s = document.getElementsByTagName("script")[0];
                    s.parentNode.insertBefore(hm, s);
                })();
            </script>
    <script type="text/javascript" charset="utf-8" src="chrome-extension://kfgmnlgjmofpiicpgohgfpeabgpmhjdp/page_context.js">
        </script>
        <script src="./public/register_files/hm.js">
        </script>
        <script async="" src="./public/register_files/analytics.js">
        </script>
        <script>
            (function(i, s, o, g, r, a, m) {
                i['GoogleAnalyticsObject'] = r;
                i[r] = i[r] ||
                function() { (i[r].q = i[r].q || []).push(arguments)
                },
                i[r].l = 1 * new Date();
                a = s.createElement(o),
                m = s.getElementsByTagName(o)[0];
                a.async = 1;
                a.src = g;
                m.parentNode.insertBefore(a, m)
            })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');
            ga('create', 'UA-58313985-1', 'auto');
            ga('send', 'pageview');
        </script>
            <script type="text/javascript">
                var _py = _py || [];
                _py.push(['a', '4u..O8yiaOndv6GzBquZj-mRu0']);
                _py.push(['domain', 'stats.ipinyou.com']);
                _py.push(['e', '']); -
                function(d) {
                    var s = d.createElement('script'),
                    e = d.body.getElementsByTagName('script')[0];
                    e.parentNode.insertBefore(s, e),
                    f = 'https:' == location.protocol;
                    s.src = (f ? 'https': 'http') + '://' + (f ? 'fm.ipinyou.com': 'fm.p0y.cn') + '/j/adv.js';
                } (document);
            </script>
            <noscript>
                &lt;img src="//stats.ipinyou.com/adv.gif?a=4u..O8yiaOndv6GzBquZj-mRu0&amp;e="
                style="display:none;"/&gt;
            </noscript>
        </div>
        <script src="./public/register_files/wb.js" type="text/javascript" charset="utf-8">
        </script>
    </body>

</html>
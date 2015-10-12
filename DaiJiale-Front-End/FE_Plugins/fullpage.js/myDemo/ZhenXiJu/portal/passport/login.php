<!DOCTYPE html>
<!-- saved from url=(0041)http://www.easywed.cn/users/account/login -->
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="UTF-8">
    <title>
        登录 - 真喜聚
    </title>
    <!--         <link rel="shortcut icon" href="http://www.daijiale.cn/favicon.ico" type="image/x-icon"> -->
    <link rel="stylesheet" type="text/css" href="./public/login_files/global.css">
    <link rel="stylesheet" type="text/css" href="./public/login_files/login.css">
    
    <style type="text/css">
    </style>
    <link type="text/css" rel="stylesheet" href="chrome-extension://kfgmnlgjmofpiicpgohgfpeabgpmhjdp/style.css">

</head>

<body gtools_scp_screen_capture_injected="true">
    <iframe src="javascript:false;" style="display: none;">
    </iframe>

    <div class="w">
            <h1 class="login-logo-box">
                <a href="../../index.php"><img src="./public/register_files/zxjlogo.png" ></a>         
            </h1>
        <div class="login clx">
            <div class="login-r">
                <div class="login-box">
                    <!--错误提示开始-->
                    <div class="login-error" id="j-login-error">
                        <i class="icons icon-error">
                        </i>
                        <p>
                        </p>
                    </div>
                    <!--错误提示结束-->
                    <!--登录功能开始-->
                    <h2>
                        登录真喜聚
                    </h2>
                    <form action="../admin/admin_portal/portal/index.php" id="validform">
                        <div class="login-item">
                            <span class="login-input-name-icon" >
                                <img src="./public/login_files/account.png" style="margin-left:20%" >
                            </span>
                            <input type="text" class="login-input-name" id="j-login-name" placeholder="手机号或邮箱"
                            value="" datatype="e|m" nullmsg="请输入账号！" errormsg="您输入的账号格式不正确!">
                        </div>
                        <div class="login-item">
                            <span class="login-input-pass-icon">
                                <img src="./public/login_files/password.png" style="margin-left:20%">
                            </span>
                            <input type="password" class="login-input-pass" id="j-login-pass" placeholder="密码"
                            value="" datatype="*" nullmsg="请输入密码！" errormsg="请输入密码！">
                        </div>
                        <div class="login-item clx">
                            <label>
                                <input type="checkbox" id="j-login-auto">
                                下次自动登陆
                            </label>
                            <a href="FindYourPassword.php">
                                忘记密码？
                            </a>
                        </div>
                        <div class="login-item">
                            <input type="submit" class="login-btn-submit" value="登  录">
                        </div>
                    </form>
                    <h3>
                        还没有真喜聚账号？
                        <a href="register.php">
                            立即注册
                        </a>
                    </h3>
                    
                    <!-- <div class="login-other clx">
                        <p>
                            使用社交网站账户快速登录：
                        </p>
                    <a href="" class="login-other-sina"></a>
                    <a href="" class="login-other-weixin"></a>
                    <a href="" class="login-other-qq"></a>

            </div> -->
            <!--登录功能结束-->
        </div>
    </div>

</div>
</div>
</div>

<!-- 加载全站js -->
<script type="text/javascript" charset="utf-8" src="chrome-extension://kfgmnlgjmofpiicpgohgfpeabgpmhjdp/page_context.js">
</script>
<script src="./public/login_files/hm.js">
</script>
<script async="" src="./public/login_files/analytics.js">
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
<script src="./public/login_files/adv.js">
</script>
<script type="text/javascript" id="seajsnode" src="./public/login_files/global.js">
</script>
<script type="text/javascript">
    seajs.use("home/login");
</script>

<script src="./public/login_files/wb.js" type="text/javascript" charset="utf-8">
</script>
</body>

</html>
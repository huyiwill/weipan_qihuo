<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html class="login-bg">
<head>
	<title>期货管理系统</title>
    
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	
    <!-- bootstrap -->
    <link href="/Public/Admin/css/bootstrap/bootstrap.css" rel="stylesheet" />
    <link href="/Public/Admin/css/bootstrap/bootstrap-responsive.css" rel="stylesheet" />
    <link href="/Public/Admin/css/bootstrap/bootstrap-overrides.css" type="text/css" rel="stylesheet" />

    <!-- global styles -->
    <link rel="stylesheet" type="text/css" href="/Public/Admin/css/layout.css" />
    <link rel="stylesheet" type="text/css" href="/Public/Admin/css/elements.css" />
    <link rel="stylesheet" type="text/css" href="/Public/Admin/css/icons.css" />

    <!-- libraries -->
    <link rel="stylesheet" type="text/css" href="/Public/Admin/css/lib/font-awesome.css" />
    
    <!-- this page specific styles -->
    <link rel="stylesheet" href="/Public/Admin/css/compiled/signin.css" type="text/css" media="screen" />

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head>
<body>


    <div class="row-fluid login-wrapper">
        <a href="index.html">
           
        </a>
		
		<form method="post" action="<?php echo U('User/signin');?>" style="width: 400px;margin: 0 auto;">
	        <div class="span4 box">
	            <div class="content-wrap">
	                <h6>管理员登陆</h6>
	                <input class="span12" type="text" placeholder="管理员账号" name="username" value="<?php echo ($uname); ?>"/>
	                <input class="span12" type="password" placeholder="管理员密码" name="password"/>
	                <!-- <a href="#" class="forgot">忘记密码？</a> -->
	                <div class="remember">
	                    <input id="remember-me" type="checkbox" name="ckrename" />
	                    <label for="remember-me">记住账号</label> 
	                </div>
	                <input type="submit" value="登陆" class="btn-glow primary login" style="margin-left: 220px;"/>	                
	            </div>
	        </div>
		</form>
    </div>

	<!-- scripts -->
    <script src="/Public/Admin/js/jquery-latest.js"></script>
    <script src="/Public/Admin/js/bootstrap.min.js"></script>
    <script src="/Public/Admin/js/theme.js"></script>

    <!-- pre load bg imgs -->
    <script type="text/javascript">
        $(function () {
            // bg switcher
            var $btns = $(".bg-switch .bg");
            $btns.click(function (e) {
                e.preventDefault();
                $btns.removeClass("active");
                $(this).addClass("active");
                var bg = $(this).data("img");

                $("html").css("background-image", "url('/Public/Admin/img/bgs/" + bg + "')");
            });

        });
    </script>

</body>
</html>
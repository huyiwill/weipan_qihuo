<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<meta name="format-detection" content="telephone=no">
<meta name="format-detection" content="email=no">
<title>期货交易系统</title>
<meta name="keywords" content="期货交易系统" />
<meta name="description" content="期货交易系统">

<link rel="stylesheet" type="text/css" href="/Public/Home/css/cd.css" />
<script language="javascript" type="text/javascript" src="/Public/Home/js/jquery.min.js"></script>
<script language="javascript" type="text/javascript" src="/Public/Home/js/cd.js"></script>
</head>
<body>
<!--顶部开始-->
<div class="top_div">
      <div class="cdan_div"><img src="/Public/Home/images/cdan.png" width="35" height="32"/></div>
      <div class="jypt_div">
    <h1>期货交易系统</h1>
  </div>
 <!--   <div style="float:right;"><h1>返回</h1></div> -->
    </div>
<div class="dbjjDiv"></div>
<div class="ycdcdDiv">
      <div class="gbtb"><img src="/Public/Home/images/gbtb.png"/></div>
      <ul>
  <li><a href="/index.php/Home/Index/"><span><img src="/Public/Home/images/jygz.png"/></span><span>首页</span></a></li>
    <li><a href="<?php echo U('User/recharge');?>"><span><img src="/Public/Home/images/cz.png"/></span><span>充值</span></a></li>
    <li><a href="<?php echo U('User/cash');?>"><span><img src="/Public/Home/images/tx.png"/></span><span>提现</span></a></li>
    <li><a href="<?php echo U('Detailed/dtrading');?>"><span><img src="/Public/Home/images/jyls.png"/></span><span>交易历史</span></a></li>
    <li><a href="<?php echo U('Detailed/drevenue');?>"><span><img src="/Public/Home/images/szmx.png"/></span><span>收支明细</span></a></li>
    <li><a href="<?php echo U('User/memberinfo');?>"><span><img src="/Public/Home/images/grxx.png"/></span><span>个人中心</span></a></li>
    <li><a href="<?php echo U('User/img');?>"><span><img src="/Public/Home/images/fxhy.png"/></span><span>分享好友</span></a></li>
    <li><a href="<?php echo U('User/ranking');?>"><span><img src="/Public/Home/images/phb.png"/></span><span>排行榜</span></a></li>
    <li><a href="<?php echo U('User/logout');?>"><span><img src="/Public/Home/images/cs.png"/></span><span>退出</span></a></li>
    
  </ul>
    </div>
<!--顶部结束-->
<div class="main"> 	
       
    <link rel="stylesheet" href="/Public/Home/css/global.css">
    <link rel="stylesheet" href="/Public/Home/css/index.css">
    <link rel="stylesheet" href="/Public/Home/css/pwd.css">
    <div class="wrap">
        <div class="index" style="min-height: 891px;">
            <header class="list-head">
                <nav class="list-nav clearfix"> <a href="javascript:history.go(-1)" class="list-back"></a>
                    <h3 class="list-title">注册</h3>
                </nav>
            </header>
            <?php if($openid == ''): ?><form id="reviseForm" class="i-form" method="post" action="<?php echo U('User/register');?>" >
                    <input type="hidden" name="puid" value="<?php echo $_GET['uid']; ?>">
                    <input type="hidden" name="oid" value="<?php echo ($oid); ?>">
                    <ul class="form-box">
                        <li class="f-line clearfix">
                            <label class="f-label">会员单位</label>
                            <input id="c-name" class="f-input text" type="text" maxlength="16" placeholder="请输入用户名" name="username">
                        </li>
                        <li class="f-line clearfix">
                            <label class="f-label">手机号</label>
                            <input id="c-pwd" class="f-input text" type="text" maxlength="11" placeholder="请输入手机号码" name="utel">
                        </li>
                        <li class="f-line clearfix">
                            <label class="f-label">密码</label>
                            <input id="n-pwd" class="f-input text" type="password" maxlength="15" placeholder="请输入六位新密码" name="upwd">
                        </li>
                        <li class="f-line clearfix">
                            <label class="f-label">确认密码</label>
                            <input id="r-pwd" class="f-input text" type="password" maxlength="15" placeholder="再次输入六位新密码" name="repassword">
                        </li>
                        <!--<li class="f-line clearfix">
                            <label class="f-label">短信验证码</label>
                            <input id="n-pwd" class="f-input2 text" type="text " maxlength="6" placeholder="请输短息验证码" name="code">
                            <input type="button" value="获取验证码" id="mes" class="f-sub2">
                        </li>-->
                    </ul>
                    <div id='btnAgree'>
                        <div><input name="agree" type="checkbox" value="1" class="text"  id="check" checked/>&nbsp;<span>我已阅读和同意<span id='btnBook'>《服务协议及隐私条款》</span></span></div>
                        <div style="height:100px;overflow:scroll;border: 1px solid #d0d0d0;display: none" id="panel">
                            内容内容内容内容内容内容内容<br>
                            内容内容内容内容内容内容内容<br>
                            内容内容内容内容内容内容内容<br>
                            内容内容内容内容内容内容内容<br>
                            内容内容内容内容内容内容内容<br>
                            内容内容内容内容内容内容内容<br>
                            内容内容内容内容内容内容内容<br>
                            内容内容内容内容内容内容内容<br>
                            内容内容内容内容内容内容内容<br>
                            内容内容内容内容内容内容内容<br>
                            内容内容内容内容内容内容内容<br>
                            内容内容内容内容内容内容内容<br>
                            内容内容内容内容内容内容内容<br>
                            内容内容内容内容内容内容内容<br>
                            内容内容内容内容内容内容内容<br>
                        </div>
                    </div>
                    <input type="submit" value="完成注册" class="f-sub">
                    <div class="forgot"><span class="fl"><a href="<?php echo U('User/login');?>">已有账号，立即登录</a></span></div>
                </form>
                <?php else: ?>

                <form  class="i-form" method="post" action="<?php echo U('User/myreg');?>" >
                    <input type="hidden" name="oid" value="<?php echo ($oid); ?>">
                    <input type="hidden" name="openid" value="<?php echo ($openid); ?>">
                    <ul class="form-box">
                        <li class="f-line clearfix">
                            <label class="f-label">初始密码</label>
                            <input id="c-name" class="f-input text" type="text" maxlength="16" placeholder="请输入初始密码" name="upwd">
                        </li>
                    </ul>
                    <input type="submit" value="注册" class="f-sub" id='send'>
                </form><?php endif; ?>
        </div>
    </div>
    <script src="/Public/Home/js/jquery-2.1.1.min.js"></script>
    <script src="/Public/Home/js/script.js"></script>
    <script type="text/javascript" charset="utf-8" src="/Public/Home/js/sea.js" async></script>

    <script type="text/javascript">
        $(document).ready(function(){
            $("#mes").click(function(){
                alert('短信已经发送，请注意查收');
                $.ajax({
                    type: 'POST',
                    url: "<?php echo U('User/smsverify');?>",
                    data: {
                        tel:$("[name='utel']").val(),
                    },
                    dataType: "json"
                });
            });
        });
    </script>
    <style type="text/css">
        .formtips{
            text-align:center;
            width: 100%;
        }
    </style>
    <script type="text/javascript">

        $(function(){
            //如果是必填的，则加红星标识.
            //文本框失去焦点后
            $('form :input').blur(function(){
                var $parent = $(this).parent();
                $parent.find(".formtips").remove();
                //验证用户名
                if( $(this).is('input[name="username"]') ){
                    if( this.value=="" || this.value.length < 6 ){
                        var errorMsg = '请输入至少6位的用户名.';
                        $parent.append('<input  class="f-input formtips onError" type="text" value="'+errorMsg+'" > ');
                    }else{
                        $parent.append('<input class="f-input formtips onSuccess" style="display:none" type="text"  > ');
                    }
                }
                //手机号码验证
                if( $(this).is('input[name="utel"]') ){
                    if( this.value=="" || ( this.value!="" && !/^1[3|4|5|8][0-9]\d{4,8}$/.test(this.value) ) ){
                        var errorMsg = '请输入正确的手机号码.';
                        $parent.append('<input  class="f-input formtips onError" type="text" value="'+errorMsg+'" > ');
                    }else{
                        $parent.append('<input class="f-input formtips onSuccess" style="display:none" type="text"  > ');
                    }
                }

                //密码验证
                if( $(this).is('input[name="upwd"]') ){
                    if( this.value=="" ){
                        var errorMsg = '请输入正确的密码.';
                        $parent.append('<input  class="f-input formtips onError" type="text" value="'+errorMsg+'" > ');
                    }else{
                        $parent.append('<input class="f-input formtips onSuccess" style="display:none" type="text"  > ');
                    }
                }
                //确认密码验证
                if( $(this).is('input[name="repassword"]') ){
                    if( this.value!=$('#n-pwd').val()){
                        var errorMsg = '两次密码不一样.';
                        $parent.append('<input  class="f-input formtips onError" type="text" value="'+errorMsg+'" > ');
                    }else{
                        $parent.append('<input class="f-input formtips onSuccess" style="display:none" type="text"  > ');
                    }
                }

            }).keyup(function(){
                $(this).triggerHandler("blur");
            }).focus(function(){
                $(this).triggerHandler("blur");
            });//end blur
            //提交，最终验证。
            $('#send').click(function(){
                $("form :input.text").trigger('blur');
                var numError = $('form .onError').length;
                if(numError){
                    return false;
                }
                alert("注册成功");
            });
            //服务条款效果
            $("#btnBook").click(function(){
                $("#panel").slideToggle("slow");
            });


        })

    </script>


 </div>     
</body>
</html>
<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<title>期货系统管理中心</title>
    
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	
    <!-- bootstrap -->
    <link href="/Public/Admin/css/bootstrap/bootstrap.css" rel="stylesheet" />
    <link href="/Public/Admin/css/bootstrap/bootstrap-responsive.css" rel="stylesheet" />
    <link href="/Public/Admin/css/bootstrap/bootstrap-overrides.css" type="text/css" rel="stylesheet" />

    <!-- libraries -->
    <link href="/Public/Admin/css/lib/jquery-ui-1.10.2.custom.css" rel="stylesheet" type="text/css" />
    <link href="/Public/Admin/css/lib/font-awesome.css" type="text/css" rel="stylesheet" />

    <!-- global styles -->
    <link rel="stylesheet" type="text/css" href="/Public/Admin/css/layout.css" />
    <link rel="stylesheet" type="text/css" href="/Public/Admin/css/elements.css" />
    <link rel="stylesheet" type="text/css" href="/Public/Admin/css/icons.css" />
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head>
<body>

    <!-- navbar -->
    <div class="navbar navbar-inverse">
        <div class="navbar-inner">
            <button type="button" class="btn btn-navbar visible-phone" id="menu-toggler">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            
          

            <ul class="nav pull-right">                
                <!-- <li class="hidden-phone">
                    <input class="search" type="text" />
                </li>
                <li class="notification-dropdown hidden-phone">
                    <a href="#" class="trigger">
                        <i class="icon-warning-sign"></i>
                        <span class="count">8</span>
                    </a>
                    <div class="pop-dialog">
                        <div class="pointer right">
                            <div class="arrow"></div>
                            <div class="arrow_border"></div>
                        </div>
                        <div class="body">
                            <a href="#" class="close-icon"><i class="icon-remove-sign"></i></a>
                            <div class="notifications">
                                <h3>你有6封邮件需要查收</h3>
                                <a href="#" class="item">
                                    <i class="icon-signin"></i> 新注册用户 刘易斯
                                    <span class="time"><i class="icon-time"></i> 13 分钟前.</span>
                                </a>
                                <a href="#" class="item">
                                    <i class="icon-signin"></i> 新注册用户 张二娃
                                    <span class="time"><i class="icon-time"></i> 18 分钟前.</span>
                                </a>
                                <a href="#" class="item">
                                    <i class="icon-envelope-alt"></i> 来自用户 好啊好 的邮件，请查收
                                    <span class="time"><i class="icon-time"></i> 28 分钟前.</span>
                                </a>
                                <a href="#" class="item">
                                    <i class="icon-signin"></i> 新注册用户 无法了解
                                    <span class="time"><i class="icon-time"></i> 49 分钟前.</span>
                                </a>
                                <a href="#" class="item">
                                    <i class="icon-download-alt"></i> 我的天空 的新订单
                                    <span class="time"><i class="icon-time"></i> 1 天前.</span>
                                </a>
                                <div class="footer">
                                    <a href="#" class="logout">查看全部邮件</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="notification-dropdown hidden-phone">
                    <a href="#" class="trigger">
                        <i class="icon-envelope-alt"></i>
                    </a>
                    <div class="pop-dialog">
                        <div class="pointer right">
                            <div class="arrow"></div>
                            <div class="arrow_border"></div>
                        </div>
                        <div class="body">
                            <a href="#" class="close-icon"><i class="icon-remove-sign"></i></a>
                            <div class="messages">
                                <a href="#" class="item">
                                    <img src="/Public/Admin/img/contact-img.png" class="display" />
                                    <div class="name">张二娃</div>
                                    <div class="msg">
                                        	我的钱太少了，能给我分一点前用用吗？
                                    </div>
                                    <span class="time"><i class="icon-time"></i> 13 分钟前.</span>
                                </a>
                                <a href="#" class="item">
                                    <img src="/Public/Admin/img/contact-img2.png" class="display" />
                                    <div class="name">安吉丽娜朱莉</div>
                                    <div class="msg">
                                        请问管理员，为什么周末我无法购买产品。
                                    </div>
                                    <span class="time"><i class="icon-time"></i> 26 分钟前.</span>
                                </a>
                                <a href="#" class="item last">
                                    <img src="/Public/Admin/img/contact-img.png" class="display" />
                                    <div class="name">路易斯</div>
                                    <div class="msg">
                                        提现太慢了，麻烦快一点。
                                    </div>
                                    <span class="time"><i class="icon-time"></i> 48 分钟.</span>
                                </a>
                                <div class="footer">
                                    <a href="#" class="logout">查看全部信息</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </li> -->
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle hidden-phone" data-toggle="dropdown">
                        <?php echo ($_SESSION['username']); ?>
                        <b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu">
                       <!--  <li><a href="<?php echo U('User/personalinfo');?>">个人信息</a></li>
                        <li><a href="<?php echo U('User/personalinfo');?>">账户设置</a></li> -->
                        <li><a href="<?php echo U('Order/olist');?>">查看订单</a></li>
                        <li><a href="<?php echo U('User/ulist');?>">查看客户</a></li>
                        <li><a href="<?php echo U('Goods/glist');?>">查看产品</a></li>
                    </ul>
                </li>
             <!--    <li class="settings hidden-phone">
                    <a href="<?php echo U('User/personalinfo');?>" role="button">
                        <i class="icon-cog"></i>
                    </a>
                </li> -->
                <li class="settings hidden-phone">
                    <a href="<?php echo U('Admin/User/signinout');?>" role="button">
                        <i class="icon-share-alt"></i>
                    </a>
                </li>
            </ul>            
        </div>
    </div>
    <!-- end navbar -->

    <!-- sidebar -->
    <div id="sidebar-nav">
        <ul id="dashboard-menu">
            <li>
                <div class="pointer">
                    <div class="arrow"></div>
                    <div class="arrow_border"></div>
                </div>
                <a href="<?php echo U('Admin/Index/index');?>">
                    <i class="icon-home"></i>
                    <span>系统首页</span>
                </a>
            </li>            
            <li>
                <a class="dropdown-toggle" href="#">
                    <i class="icon-edit"></i>
                    <span>内容管理</span>
					<i class="icon-chevron-down"></i>
                </a>
				<ul class="submenu">
                    <li><a href="<?php echo U('Admin/News/typelist');?>">栏目管理</a></li>
                    <li><a href="<?php echo U('Admin/News/newslist');?>">文章管理</a></li>
                    <!--<li><a href="user-profile.html">我发布的文档</a></li>-->
					<!--<li><a href="user-profile.html">内容回收站</a></li>-->					
                </ul>
            </li>
			<li>
                <a class="dropdown-toggle" href="#">
                    <i class="icon-calendar-empty"></i>
                    <span>产品管理</span>
					<i class="icon-chevron-down"></i>
                </a>
				<ul class="submenu">
                    <!--<li><a href="<?php echo U('Admin/Goods/gadd');?>">添加产品</a></li>-->
                    <li><a href="<?php echo U('Admin/Goods/glist');?>">产品列表</a></li>
                    <!--<li><a href="<?php echo U('Admin/Goods/gtypeadd');?>">添加商品分类</a></li>-->
                    <li><a href="<?php echo U('Admin/Goods/gtype');?>">分类列表</a></li>
                    <!--<li><a href="user-profile.html">回收站</a></li>-->				
                </ul>
            </li>
			<li>
                <a class="dropdown-toggle" href="#">
                    <i class="icon-th-large"></i>
                    <span>订单管理</span>
					<i class="icon-chevron-down"></i>
                </a>
				<ul class="submenu">
                    <li><a href="<?php echo U('Admin/Order/olist');?>">订单列表</a></li>
                    <li><a href="<?php echo U('Admin/Order/tlist');?>">交易流水</a></li>
                    <li><a href="<?php echo U('Admin/Order/zxlist');?>">最新订单</a></li>
                    <!--<li><a href="new-user.html">移除的订单</a></li>-->
                </ul>
            </li>
            <li>
                <a class="dropdown-toggle" href="#">
                    <i class="icon-group"></i>
                    <span>客户管理</span>
                    <i class="icon-chevron-down"></i>
                </a>
                <ul class="submenu">
                    <li><a href="<?php echo U('User/ulist');?>">客户列表</a></li>
                    <!--<li><a href="<?php echo U('Admin/User/ugroup');?>">用户组设置</a></li>-->
                    <li><a href="<?php echo U('User/recharge');?>">充值和提现申请</a></li>
                    <li><a href="<?php echo U('User/agentlist');?>">代理商申请列表</a></li>
                </ul>
            </li>
            <li>
                <a class="dropdown-toggle" href="#">
                    <i class="icon-group"></i>
                    <span>会员管理</span>
                    <i class="icon-chevron-down"></i>
                </a>
                <ul class="submenu">
                    <li><a href="<?php echo U('Menber/madd');?>">添加会员</a></li>
                    <li><a href="<?php echo U('Menber/mlist');?>">会员列表</a></li>
                </ul>
            </li>
            <li>
                <a class="dropdown-toggle" href="#">
                    <i class="icon-picture"></i>
                    <span>优惠卷管理</span>
                    <i class="icon-chevron-down"></i>
                </a>
                <ul class="submenu">
                    <li><a href="<?php echo U('Coupons/cpadd');?>">添加优惠卷</a></li>
                    <li><a href="<?php echo U('Coupons/cplist',array('style'=>'list'));?>">优惠券列表</a></li>
					<!-- <li><a href="<?php echo U('Coupons/cplist',array('style'=>'oldlist'));?>">历史优惠卷</a></li>-->
                    <li><a href="<?php echo U('Coupons/cpsend');?>">发放优惠券</a></li>
                </ul>
            </li>
            <li>
                <a class="dropdown-toggle" href="personal-info.html">
                    <i class="icon-code-fork"></i>
                    <span>系统管理员</span>
					<i class="icon-chevron-down"></i>
					<ul class="submenu">						
                        <li><a href="<?php echo U('Super/sadd');?>">添加管理员</a></li>
						<li><a href="<?php echo U('Super/slist');?>">管理员列表</a></li>
						<!--<li><a href="grids.html">管理员组</a></li>-->
					</ul>
                </a>
            </li>
            <li>
                <a class="dropdown-toggle" href="#">
                    <i class="icon-cog"></i>
                    <span>系统设置</span>
                    <i class="icon-chevron-down"></i>
                </a>
                <ul class="submenu">
                	<li><a href="<?php echo U('Super/esystem');?>">基本设置</a></li>
                    <!--<li><a href="grids.html">清理缓存</a></li>-->
                    <li><a href="<?php echo U('Super/backupdb');?>">数据备份</a></li>
				<!-- 	<li><a href="signin.html">数据还原</a></li> -->
                    <li><a href="<?php echo U('User/signinout');?>">退出系统</a></li>
                </ul>
            </li>
             <li>
                <a class="dropdown-toggle" href="#">
                    <i class="icon-group"></i>
                    <span>微信管理</span>
                    <i class="icon-chevron-down"></i>
                </a>
                <ul class="submenu">
                    <li><a href="<?php echo U('Menber/wxinfo');?>">微信基本信息</a></li>
                    <li><a href="<?php echo U('Menber/wxlist');?>">微信用户列表</a></li>
                    <li><a href="<?php echo U('Menber/instruser');?>">更新微信用户</a></li>
                </ul>
            </li>
        </ul>
    </div>
    <!-- end sidebar -->


	<!-- main container -->
    <div class="content">

        <!-- settings changer -->
        <div class="skins-nav">
            <a href="#" class="skin first_nav selected">
                <span class="icon"></span><span class="text">默认颜色</span>
            </a>
            <a href="#" class="skin second_nav" data-file="/Public/Admin/css/skins/dark.css">
                <span class="icon"></span><span class="text">黑色背景</span>
            </a>
        </div>
    	
        <!-- this page specific styles -->
		<link rel="stylesheet" href="/Public/Admin/css/compiled/article-add.css" type="text/css" media="screen" />
		<link rel="stylesheet" href="/Public/Admin/css/compiled/ui-elements.css" type="text/css" media="screen" />
		<link href="/Public/Admin/css/lib/bootstrap.datepicker.css" type="text/css" rel="stylesheet" />
        <div class="container-fluid">
            <div id="pad-wrapper" class="form-page">
                <div class="row-fluid form-wrapper">
                    <!-- left column -->
                    <div class="span8 column esystem">
                    	<div class="field-box" style="height: 40px">
                            <label>平台设置:</label>
                            <div class="slider-frame">
                            	<span data-on-text="关闭平台"  data-off-text="开启平台" class="slider-button on" data-isopen="<?php echo ($conf["isopen"]); ?>"><?php if($conf['isopen'] == '1'): ?>关闭平台<?php else: ?>开启平台<?php endif; ?></span>
                        	</div>
                            <input id="iso" value="<?php echo ($conf["isopen"]); ?>" type="hidden">
                        	<div class="setopen" data-on-text="平台已经关闭，请尽快开启，以免流失客户" data-off-text="平台已开启，需要关闭平台请谨慎操作">
                            <?php if($conf['isopen'] == '1'): ?>平台已经关闭，请尽快开启，以免流失客户<?php else: ?>
                            平台已开启，需要关闭平台请谨慎操作<?php endif; ?></div>
                        </div>
                        <div class="field-box">                        	
                            <label>网站名称：</label>
                            <input class="span6" type="text" data-toggle="tooltip" data-trigger="focus" title="网站名称" data-placement="right" value="<?php echo ($conf["webname"]); ?>" name="webname"/>
                            <span class="sysset">
                            	<a class="btn-glow primary webname">提交</a>
                           	</span>
                        </div>
                        <div class="field-box">
                            <label>一级分销比例：</label>
                            <input class="span6" type="text" data-toggle="tooltip" data-trigger="focus" title="一级分销比例（请填写0.001-1之间的值）" data-placement="right" value="<?php echo ($conf["onelevel"]); ?>" name="onelevel"/>
                            <span class="sysset">
                            	<a class="btn-glow primary onelevel">提交</a>
                           	</span>
                            <p><font color="red">注意：一级佣金=一级分销比例*总手续费*（1-平台比例）</font></p>
                        </div>
                        <div class="field-box">
                            <label>二级分销比例：</label>
                            <input class="span6" type="text" data-toggle="tooltip" data-trigger="focus" title="二级分销比例（请填写0.001-1之间的值）" data-placement="right" value="<?php echo ($conf["twolevel"]); ?>" name="twolevel"/>
                            <span class="sysset">
                            	<a class="btn-glow primary twolevel">提交</a>
                           	</span>
                            <p><font color="red">注意：二级佣金=二级分销比例*总手续费*（1-平台比例）</font></p>
                        </div>
                        <div class="field-box">
                            <label>平台比例：</label>
                            <input class="span6" type="text" data-toggle="tooltip" data-trigger="focus" title="平台分销比例（请填写0.001-1之间的值）" data-placement="right" value="<?php echo ($conf["Pscale"]); ?>" name="Pscale"/>
                            <span class="sysset">
                            	<a class="btn-glow primary Pscale">提交</a>
                           	</span>
                        </div>


                        <!--<div class="field-box" style="margin-top: 0;height: 80px;">
                            <label>平仓设置:</label>
                            <div class="span8">
                                <div class="radio">
                                	<label>
                                		<input type="radio" name="settime" id="settime" value="option1" checked="" />自动休市时间设置
                                	</label>
                                </div>
                                <div class="radio">
	                                <label>
	                                    <input type="radio" name="settime" id="setclose"  value="option2" />手动休市
	                                </label>
                                </div>
                                <div class="stime">
                                	开始时间：<input type="text" value="03/29/2014" class="input-large datepicker"><br/>
                                	结束时间：<input type="text" value="03/29/2014" class="input-large datepicker">
                                </div>
                            </div>
                            <span class="sysset"><a class="btn-glow primary">提交</a></span>
                        </div>                           -->
                                                  
                        <div class="field-box" style="margin-bottom: 0;">
                            <label>网站公告:</label>
                            <textarea class="span8" rows="4" id="notice"><?php echo ($conf["notice"]); ?></textarea>
                            <span class="sysset"><a class="btn-glow primary notice">提交</a></span>
                            <span class="sysset" style="top:50px;"><a class="">开启</a>/<a class="">关闭</a></span>
                        </div>


                    </div>
                </div>
            </div>
        </div>

	<!-- scripts for this page -->	
	<script src="/Public/Admin/js/wysihtml5-0.3.0.js"></script>
    <script src="/Public/Admin/js/jquery-latest.js"></script>
    <script src="/Public/Admin/js/bootstrap.min.js"></script>
    <script src="/Public/Admin/js/bootstrap-wysihtml5-0.0.2.js"></script>
    <script src="/Public/Admin/js/bootstrap.datepicker.js"></script>
    <script src="/Public/Admin/js/jquery.uniform.min.js"></script>
	<script src="/Public/Admin/js/select2.min.js"></script>
	<script src="/Public/Admin/js/theme.js"></script>
    <!-- call this page plugins -->
    <script>
    	$(".notice").click(function(){
    		var notice = $("#notice").val();
    		$.ajax({
        		type:"post",
        		url:"<?php echo U('Super/esystem');?>",
        		data:{"notice":notice},
        		success:function(data){
        			alert(data);
        		},
        		error:function(data){
        			alert(data);
        		}
        	});
    	})

    	$(".webname").click(function(){
    		var webname = $("input[name=webname]").val();
    		$.ajax({
        		type:"post",
        		url:"<?php echo U('Super/esystem');?>",
        		data:{"webname":webname},
        		success:function(data){
        			alert(data);
        		},
        		error:function(data){
        			alert(data);
        		}
        	});
    	})
        $(".onelevel").click(function(){
            var onelevel = $("input[name=onelevel]").val();
            $.ajax({
                type:"post",
                url:"<?php echo U('Super/esystem');?>",
                data:{"onelevel":onelevel},
                success:function(data){
                    alert(data);
                },
                error:function(data){
                    alert(data);
                }
            });
        })
        $(".twolevel").click(function(){
            var twolevel = $("input[name=twolevel]").val();
            $.ajax({
                type:"post",
                url:"<?php echo U('Super/esystem');?>",
                data:{"twolevel":twolevel},
                success:function(data){
                    alert(data);
                },
                error:function(data){
                    alert(data);
                }
            });
        })
        $(".Pscale").click(function(){
            var Pscale = $("input[name=Pscale]").val();
            $.ajax({
                type:"post",
                url:"<?php echo U('Super/esystem');?>",
                data:{"Pscale":Pscale},
                success:function(data){
                    alert(data);
                },
                error:function(data){
                    alert(data);
                }
            });
        })

    	$('.slider-button').click(function() {
            	var isopen = $(this).attr('data-isopen');
            	if(isopen==0){
    				$(this).attr('data-isopen','1');
    			}else{
    				$(this).attr('data-isopen','0');
    			}
            	$.ajax({
            		type:"post",
            		url:"<?php echo U('Super/esystem');?>",
            		data:{"isopen":isopen},
            		success:function(data){
            			alert(data);
            		},
            		error:function(data){
            			alert(data);
            		}
            	});
                if ($(this).hasClass("on")) {
                    $(this).removeClass('on').html($(this).data("off-text"));
                    $('.slider-frame').css('background-color','#d5dde4');
                    $('.slider-frame span	').css('color','#f00');
                } else {
                    $(this).addClass('on').html($(this).data("on-text"));
                    $('.slider-frame').css('background-color','#468847');
                    $('.slider-frame span').css('color','#7e91aa');
                }
                if ($('.setopen').hasClass("on")) {
                    $('.setopen').removeClass('on').html($('.setopen').data("off-text"));
                } else {
                    $('.setopen').addClass('on').html($('.setopen').data("on-text"));
                }
        	});
    </script>
    <script type="text/javascript">
        $(function () {
                

            // select2 plugin for select elements
            $(".select2").select2({
                placeholder: "Select a State"
            });

            // datepicker plugin
            $('.datepicker').datepicker().on('changeDate', function (ev) {
                $(this).datepicker('hide');
            });
            // wysihtml5 plugin on textarea
            $(".wysihtml5").wysihtml5({
                "font-styles": false
            });
        });
    </script>
    <!-- call this page plugins -->
    <script type="text/javascript">
	    $(document).ready(function(){
			var eqli = $("#dashboard-menu").children().eq(8);
			eqli.attr('class','active');
			$("#dashboard-menu .active .submenu").css("display","block");
			
			/** 
			 * 时间对象的格式化; 
			 */  
			Date.prototype.format = function(format) {  
			    /* 
			     * eg:format="yyyy-MM-dd hh:mm:ss"; 
			     */  
			    var o = {  
			        "M+" : this.getMonth() + 1, // month  
			        "d+" : this.getDate(), // day  
			        "h+" : this.getHours(), // hour  
			        "m+" : this.getMinutes(), // minute  
			        "s+" : this.getSeconds(), // second  
			        "q+" : Math.floor((this.getMonth() + 3) / 3), // quarter  
			        "S" : this.getMilliseconds()  
			        // millisecond  
			    }  
			  
			    if (/(y+)/.test(format)) {  
			        format = format.replace(RegExp.$1, (this.getFullYear() + "").substr(4  
			                        - RegExp.$1.length));  
			    }  
			  
			    for (var k in o) {  
			        if (new RegExp("(" + k + ")").test(format)) {  
			            format = format.replace(RegExp.$1, RegExp.$1.length == 1  
			                            ? o[k]  
			                            : ("00" + o[k]).substr(("" + o[k]).length));  
			        }  
			    }  
			    return format;  
			}
			
			var now = new Date().format("MM/dd/yyyy");
			$(".input-large").attr("value",now);
		});
        $(function () {
            // Switch slide buttons
            
        });
        
        $("#settime").click(function(){
        	$('.stime').animate({left:'390px',opacity: 'toggle'},600);
        })
        $("#setclose").click(function(){
        	$('.stime').css('display','none');
        })
    </script>

    </div>
    <script type="text/javascript">
    	var wid = $(window).height();
    	document.writeln('<div id="popupLayer" style="position:absolute;z-index:2;width:100%;height:'+wid+'px;left:0;top:0;opacity:0.3;filter:Alpha(opacity=30);background:#000;display: none;"></div>');
    </script>
</body>
</html>
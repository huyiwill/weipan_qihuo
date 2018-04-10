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
<link rel="stylesheet" href="/Public/Admin/css/compiled/user-list.css" type="text/css" media="screen">
<div class="container-fluid">
            <div id="pad-wrapper" class="users-list">
                <div class="row-fluid header">
                    <h3>客户列表</h3>
                    <div class="span10 pull-right">
                        <input type="text" class="span5 search" placeholder="请输入客户名称查找..." id="top_search" style="float: left;" urlkey="search"/>
                        
                        <!-- custom popup filter -->
                        <!-- styles are located in css/elements.css -->
                        <!-- script that enables this dropdown is located in js/theme.js -->
                        <div class="ui-dropdown">
                            <div class="head" data-toggle="tooltip" title="点我">
                                过滤器
                                <i class="arrow-down"></i>
                            </div>  
                            <div class="dialog">
                                <div class="pointer">
                                    <div class="arrow"></div>
                                    <div class="arrow_border"></div>
                                </div>
                                <div class="body">
                                    <p class="title">
                                        选择过滤条件:
                                    </p>
                                    <div class="form">
                                    <select name="key" id="sxkey">
                                        <option value="uid"/>编号
                                        <option value="username"/>用户名
                                        <option value="utel"/>手机号码
                                        <option value="otype"/>类型
                                        <option value="utime"/>注册时间
                                        <option value="balance"/>账户余额
                                    </select>
                                    <select name="formula" id="formula">
										<option value="eq"/>等于
                                        <option value="neq"/>不等于
                                        <option value="gt"/>大于
                                        <option value="lt"/>小于
                                        <option value="bh"/>包含
										<option value="bbh"/>不包含
                                    </select>
                                    <input type="text" value="" name="sxvalue" id="sxvalue" placeholder="亲！请按格式输入"/>
                                    <a class="btn-flat small" urlkey="sxsearch" id="sxsearch">开始过滤</a>
                                </div>
                                </div>
                            </div>
                        </div>

                        <a href="<?php echo U('User/adduser');?>" class="btn-flat success pull-right">
                            <span>&#43;</span>
                            添加客户
                        </a>
                    </div>
                </div>
                <!-- Users table -->
                <div class="row-fluid table">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th class="span1 sortable">
                                    编号
                                </th>
                                <th class="span2 sortable">
                                    <span class="line"></span>客户名
                                </th>
                                <th class="span2 sortable">
                                    <span class="line"></span>手机号码
                                </th>
                                <th class="span1 sortable">
                                    <span class="line"></span>地区
                                </th>
                                <th class="span1 sortable">
                                    <span class="line"></span>微信头像
                                </th>
                                <th class="span2 sortable">
                                    <span class="line"></span>创建日期
                                </th>
                                <th class="span2 sortable">
                                    <span class="line"></span>上级
                                </th>
                                <th class="span2 sortable">
                                    <span class="line"></span>最近登录时间
                                </th>	
                                <th class="span1 sortable">
                                    <span class="line"></span>订单数量
                                </th>
                                <th class="span2 sortable">
                                    <span class="line"></span>账户余额
                                </th>
                                <th class="span1 sortable">
                                    <span class="line"></span>会员类别
                                </th>
                                <th class="span1 sortable">
                                    <span class="line"></span>操作
                                </th>
                            </tr>
                        </thead>
                        <tbody id="ajaxback">
                        <?php if(is_array($ulist)): $i = 0; $__LIST__ = $ulist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ult): $mod = ($i % 2 );++$i;?><!-- row -->
                        <tr class="first">
                            <td>
                                <?php echo ($ult['uid']); ?>
                            </td>
                            <td>
                            	<?php if($ult["otype"] == 2): ?><a href="<?php echo U('Menber/mupdate',array('uid'=>$ult['uid']));?>"><?php echo ($ult['username']); ?></a>
                                	<?php else: ?>
                                	<a href="<?php echo U('User/updateuser',array('uid'=>$ult['uid']));?>"><?php echo ($ult['username']); ?></a><?php endif; ?>
                                
                                
                            </td>
                            <td>
                                <?php echo ($ult['utel']); ?>
                            </td>
                            <td>
                                <?php echo ($ult['address']); ?>
                            </td>
                            <td>
                            	<img src="/Public/Admin/img/contact-img.png" class="img-circle avatar hidden-phone" />
                            </td>
                            <td>
                                <?php echo (date('Y-m-d',$ult['utime'])); ?>
                            </td>
                            <td>
                                <a href="<?php echo U('User/updateuser',array('uid'=>$ult['oid']));?>"><?php echo ($ult["managername"]); ?></a>
                            </td>
                            <td>
                            	<?php echo (date('Y-m-d H:m',$ult['utime'])); ?>
                            </td>
                            <td>
                            	<?php if($ult['ocount'] == 0): ?>0
                            	<?php else: ?>
                            		<a href=""><?php echo ($ult['ocount']); ?></a><?php endif; ?>
                            </td>
                            <td>
                            	<font color="#f00" size="4">￥<?php echo ($ult['balance']); ?><font>
                            </td>
                            <td>
                                <?php if($ult["otype"] == 0): ?>客户<?php endif; ?>
                                <?php if($ult["otype"] == 1): ?>代理商<?php endif; ?>
                                <?php if($ult["otype"] == 2): ?>会员单位<?php endif; ?>
                                <?php if($ult["otype"] == 3): ?>超级管理员<?php endif; ?>
                            </td>
                            <td>
                            	<ul class="actions">
                                    <li><a href="<?php echo U('User/updateuser',array('uid'=>$ult['uid']));?>"><i class="table-edit"></i></a></li>
                                    <li class="last"><a href="<?php echo U('User/userdel',array('uid'=>$ult['uid']));?>" onclick="if(confirm('确定要删除吗?客户账户请谨慎操作！')){return true;}else{return false;}"><i class="table-delete"></i></a></li>
                                </ul>
                            </td>
                        </tr><?php endforeach; endif; else: echo "" ;endif; ?>                        
                        </tbody>
                    </table>
                 <div class="pagination pull-right">
                    <ul>
                        <?php echo ($page); ?>
                    </ul>
                </div>
                   <div class="qjcz">
					截止<script type="text/javascript">var myDate = new Date();document.writeln(myDate.getFullYear()+'年'+(myDate.getMonth()+1)+'月'+myDate.getDate()+'日');</script>，共有<font color="#f00" size="4"><?php echo ($ucount); ?></font>个会员完成注册，交易数量已达<font color="#f00" size="4"><?php echo ($onumber); ?></font>手，所有账户余额累计<font color="#f00" size="5"><?php echo ($anumber); ?></font>元
				</div>
                </div>
                <!-- end users table -->
            </div>
        </div>
<!-- scripts -->
<script src="/Public/Admin/js/jquery-latest.js"></script>
<script src="/Public/Admin/js/bootstrap.min.js"></script>
<script src="/Public/Admin/js/theme.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
		var eqli = $("#dashboard-menu").children().eq(4);
		eqli.attr('class','active');
		$("#dashboard-menu .active .submenu").css("display","block");
	});
	
	$('#top_search').keyup(top_serch);
	$('#sxsearch').click(top_serch);
	//搜索结果，ajax返回搜索框搜索结果
	function top_serch(){
		//获取点击参数
		var urlkey = $(this).attr("urlkey");
		//获取文本框值
		var keywords = $("#top_search").val(),
		    sxkey = $("#sxkey  option:selected").val(),
			formula = $("#formula  option:selected").val(),
			sxvalue = $("#sxvalue").val();
		//重新定义提交url
		var newurl = "";
		if(urlkey == "search"){
			newurl = "<?php echo U('User/ulist?step=search');?>"
		}
		if(urlkey == "sxsearch"){
			newurl = "<?php echo U('User/ulist?step=sxsearch');?>"
		}
		$.ajax({  
		    type: "post",  
		    url: newurl,    
        	data:{"keywords":keywords,"sxkey":sxkey,"formula":formula,"sxvalue":sxvalue},
		    success: function(data) {
		    	//console.log(data);
		    	if(data=="null"){
	            	//$("#loading").hide();
	            	$("#ajaxback").html('<tr class="first"><td colspan="13">没有找到结果，请重新输入！</tr></td>');
	            }else{
			    	$ulist = "";
		            $.each(data,function(no,items){
		            	$ulist += '<tr class="first">';
		            	$ulist += '<td>'+items.uid+'</td>';
		            	$ulist += '<td><a href="<?php echo U('User/updateuser');?>?uid='+items.uid+'" class="name">'+items.username+'</a></td>';
		            	$ulist += '<td>'+items.utel+'</td>';
		            	$ulist += '<td>'+items.utime+'</td>';
		            	if(items.ocount=='0'){
		            		$ulist += '<td>0</td>';
		            	}else{
		            		$ulist += '<td><a href="">'+items.ocount+'</a></td>';	
		            	}
		            	$ulist += '<td><font color="#f00" size="4">￥'+items.balance+'<font></td>';
		            	$ulist += '<td>';
		            	if(items.otype == '0'){
		            		$ulist += '会员';
		            	}
		            	if(items.otype == '1'){
		            		$ulist += '正在申请经纪人';
		            	}
		            	if(items.otype == '2'){
		            		$ulist += '经纪人';
		            	}
		            	$ulist += '<ul class="actions">';
		            	$ulist += '<li><a href="<?php echo U('User/updateuser');?>?uid='+items.uid+'"><i class="table-edit"></i></a></li>';
						$ulist += '<li><i class="table-settings"></i></li>';
						$ulist += '<li class="last"><a href="<?php echo U('User/userdel');?>?uid='+items.uid+'" onclick="if(confirm(\'确定要删除吗?\')){return true;}else{return false;}"><i class="table-delete"></i></a></li>';
		            	$ulist += '</ul></td></tr>';
		            })
		            $("#ajaxback").html($ulist);
	            }
		    },
		    error: function(data) {  
	            console.log(data);
	        }
		  })
	}
	
	$("#sxkey").bind("change",function(){
		var sxkey = $(this).val();
		switch(sxkey){
			case "uid":
				$("#sxvalue").attr("placeholder","格式：不允许汉字");
				break;
			case "username":
				$("#sxvalue").attr("placeholder","格式：雁过留痕");
				break;
			case "utel":
				$("#sxvalue").attr("placeholder","格式：15022220000");
				break;
			case "otype":
				$("#sxvalue").attr("placeholder","格式：会员/经纪人");
				break;
			case "utime":
				$("#sxvalue").attr("placeholder","格式：1970-10-01");
				break;
			case "balance":
				$("#sxvalue").attr("placeholder","格式：不允许汉字");
				break;
			default:
				$("#sxvalue").text("输入内容");
		}
		
	})
</script>

    </div>
    <script type="text/javascript">
    	var wid = $(window).height();
    	document.writeln('<div id="popupLayer" style="position:absolute;z-index:2;width:100%;height:'+wid+'px;left:0;top:0;opacity:0.3;filter:Alpha(opacity=30);background:#000;display: none;"></div>');
    </script>
</body>
</html>
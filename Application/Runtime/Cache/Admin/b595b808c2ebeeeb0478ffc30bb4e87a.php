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
<link rel="stylesheet" href="/Public/Admin/css/compiled/index.css" type="text/css" media="screen" />  
<div class="container-fluid">

    <!-- upper main stats -->
    <div id="main-stats">
        <div class="row-fluid stats-row">
            <div class="span3 stat">
                <div class="data">
                    <span class="number">2457</span>
                    访问量
                </div>
                <span class="date">今日</span>
            </div>
            <div class="span3 stat">
                <div class="data">
                    <span class="number"><?php echo ($userCount); ?></span>
                    用户
                </div>
                <span class="date">截止2015年12月</span>
            </div>
            <div class="span3 stat">
                <div class="data">
                    <span class="number"><?php echo ($orderCount); ?></span>
                    订单
                </div>
                <span class="date">最近7天</span>
            </div>
            <div class="span3 stat last">
                <div class="data">
                    <span class="number">￥<?php echo ($total); ?></span>
                    交易总额
                </div>
                <span class="date">最近30天</span>
            </div>
        </div>
    </div>
    <!-- end upper main stats -->

    <div id="pad-wrapper">

        <!-- statistics chart built with jQuery Flot -->
        <!--<div class="row-fluid chart">
            <h4>
                统计<small>Statistics</small>
                 <div class="btn-group pull-right">
                    <button class="glow left">今天</button>
                    <button class="glow middle active">本月</button>
                    <button class="glow right">今年</button>
                </div>
            </h4>
            <div class="span12">
                <div id="statsChart"></div>
            </div>
        </div>-->
        <!-- end statistics chart -->
        <!-- table sample -->
        <!-- the script for the toggle all checkboxes from header is located in js/theme.js -->
        <div class="table-products" style="padding-top: 0;">
            <div class="row-fluid head">
                <div class="span12">
                    <h4>最新交易记录 <small>Orders</small></h4>
                </div>
            </div>
            <div class="row-fluid">
                <table class="table table-hover">
                    <thead>
                        <tr>
                                <th class="span3 sortable">
                                    订单编号
                                </th>
								<th class="span3 sortable">
                                    <span class="line"></span>用户
                                </th>
                                <th class="span3 sortable">
                                    <span class="line"></span>订单时间
                                </th>
                                <th class="span4 sortable">
                                    <span class="line"></span>产品信息
                                </th>
								<th class="span2 sortable">
                                    <span class="line"></span>数量
                                </th>
								<th class="span2 sortable">
                                    <span class="line"></span>类型
                                </th>
								<th class="span2 sortable">
                                    <span class="line"></span>订单状态
                                </th>
								<th class="span3 sortable">
                                    <span class="line"></span>手续费
                                </th>
								<!-- <th class="span3 sortable">
                                    <span class="line"></span>获取佣金
                                </th> -->
								<th class="span3 sortable">
                                    <span class="line"></span>订单总金额
                                </th>
                            </tr>
                    </thead>
                    <tbody>
                    <!-- row -->
                    <?php if(is_array($orders)): $i = 0; $__LIST__ = $orders;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr class="first">
							<td>
                                <?php echo ($vo["orderno"]); ?>
                            </td>
                            <td>
                                <a href="<?php echo U('User/updateuser',array('uid'=>$vo['uid']));?>" class="name"><?php echo ($vo["username"]); ?></a>
                            </td>
                            <td>
                                <?php echo (date('Y-m-d',$vo["buytime"])); ?>
                            </td>
                            <td>
								<a href="<?php echo U('Goods/gedit',array('pid'=>$vo['pid']));?>"><?php echo ($vo["ptitle"]); ?></a>
                            </td>
							<td>
                                <?php echo ($vo["onumber"]); ?>手
                            </td>
							<td>
								<?php if($vo["ostyle"] == 1): ?><span class="label label-success">买跌</span></span>
                            	<?php else: ?>
								<span class="label label-cc">买涨</span></span><?php endif; ?>
                            </td>
                            <td>
                            	<?php if($vo["ostaus"] == 1): ?><span class="label label-info">平仓</span></span>
                            	<?php else: ?>
								<span class="label">建仓</span></span><?php endif; ?>
                            </td>
							<td>
                                <font color="#f00" size="3">￥<?php echo ($vo['fee']); ?><font>
                            </td>
							<!-- <td>
                                <font color="#f00" size="3">￥10.13<font>
                            </td> -->
							<td>
                                <font color="#f00" size="4">￥<?php echo ($vo['uprice']*$vo['onumber']); ?><font>
                            </td>
                        </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                    </tbody>
                </table>
            </div>
            <!--<div class="pagination">
              <ul>
                <li><a href="#">&#8249;</a></li>
                <li><a class="active" href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">&#8250;</a></li>
              </ul>
            </div>-->
            <div>今日已有<font color="#f00" size="4"><?php echo ($orderDay); ?></font>个<a href="<?php echo U('Order/olist');?>">订单</a>达成交易

            <a href="../../../Extend/weipay1/index.php">充值</a>
            </div>
        </div>
        <!-- end table sample -->

        <!-- table sample -->
        <!-- the script for the toggle all checkboxes from header is located in js/theme.js -->
        <div class="table-products section" style="margin-top: 20px;">
            <div class="row-fluid head">
                <div class="span12">
                    <h4>产品<small>Products</small></h4>
                </div>
            </div>

            <div class="row-fluid filter-block">
                <div class="pull-right">
                    <input type="text" class="search" />
                    <!--<a href="<?php echo U('Goods/gadd');?>" class="btn-flat new-product">+ 添加产品</a>-->
                </div>
            </div>

            <div class="row-fluid">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th class="span7">
                                <input type="checkbox" />
                                产品名称
                            </th>
                            <th class="span6">
                                <span class="line"></span>单价
                            </th>
                            <th class="span3">
                                <span class="line"></span>手续费
                            </th>
                            <th class="span4">
                                <span class="line"></span>
                            </th>
                            <!--<th class="span3">
                                <span class="line"></span>所属分类
                            </th>-->
                        </tr>
                    </thead>
                    <tbody>
                    	<?php if(is_array($plist)): $i = 0; $__LIST__ = $plist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$pl): $mod = ($i % 2 );++$i;?><!-- row -->
                        <tr class="first">
                            <td>
                                <input type="checkbox" />
                                <!--<div class="img">
                                    
                                </div>-->
                                <a href="<?php echo U('Goods/gedit',array('pid'=>$pl['pid']));?>"><?php echo ($pl['ptitle']); ?> </a>
                            </td>
                            <td class="description">
                                <span><font color="#f00">￥<?php echo ($pl['uprice']); ?></font></span>
                            </td>
                            <td>
                                <?php echo ($pl['feeprice']); ?>
                            </td>
                            <td>
                                <!--<span class="label label-success">3665 手</span>-->
                                <ul class="actions">
                                    <li><a href="<?php echo U('Goods/gedit',array('pid'=>$pl['pid']));?>"><i class="table-edit"></i></a></li>
                                    <li><i class="table-settings"></i></li>
                                    <li class="last"><a href="<?php echo U('Goods/gdel',array('pid'=>$pl['pid']));?>" onclick="if(confirm('确定要删除吗?')){return true;}else{return false;}"><i class="table-delete"></i></a></li>
                                </ul>
                            </td>
                        </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                    </tbody>
                </table>
            </div>
            <div class="pagination">
              <!--<ul>
                <li><a href="#">&#8249;</a></li>
                <li><a class="active" href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">&#8250;</a></li>
              </ul>-->
            </div>
            <div></div>
        </div>
        <!-- end table sample -->
    </div>
</div>
<!-- scripts -->
    <script src="/Public/Admin/js/jquery-latest.js"></script>
    <script src="/Public/Admin/js/bootstrap.min.js"></script>
    <script src="/Public/Admin/js/theme.js"></script>
    <script type="text/javascript">
		$(document).ready(function(){
			var eqli = $("#dashboard-menu").children().eq(0);
			eqli.attr('class','active');
			$("#dashboard-menu .active .submenu").css("display","block");
		});
	</script>

    </div>
    <script type="text/javascript">
    	var wid = $(window).height();
    	document.writeln('<div id="popupLayer" style="position:absolute;z-index:2;width:100%;height:'+wid+'px;left:0;top:0;opacity:0.3;filter:Alpha(opacity=30);background:#000;display: none;"></div>');
    </script>
</body>
</html>
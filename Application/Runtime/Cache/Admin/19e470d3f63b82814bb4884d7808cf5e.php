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
    <link rel="stylesheet" href="/Public/Admin/css/compiled/order-list.css" type="text/css" media="screen" />
    <link href="/Public/Admin/css/lib/bootstrap.datepicker.css" type="text/css" rel="stylesheet" />
    <div class="container-fluid">
        <div id="pad-wrapper" class="users-list">
            <div class="row-fluid header">
                <h3>订单列表</h3>
                <div class="span10 pull-right">
                    <div class="tpsearch">
                    	订单编号：<input type="text" class="span6 search" placeholder="请输入订单编号查找..." name="orderno" id="orderno"/>
                    </div>
                    <div class="tpsearch">
                    	用户名称：<input type="text" class="span6 search" placeholder="请输入用户名称查找..." name="username" id="username"/>
                    </div>
                    <div class="tpsearch">
                    	交易时间：<input type="text" value="03/29/2014" class="input-large datepicker" style="margin-bottom: 0;" name="buytime" id="buytime">
                    </div>
                </div>
                <div class="span10 pull-right" style="margin-top: 20px;">
                    <div class="tpsearch">
                    	订单类型：<select id="ostyle" class="span6" name="ostyle">
                    				<option value="">默认不选</option>
	                                <option value="0">买涨</option>
	                                <option value="1">买跌</option>
                    			</select>
                    </div>
                    <div class="tpsearch">
                    	订单盈亏：<select id="ploss" class="span6" name="ploss">
                    				<option value="">默认不选</option>
	                                <option value="0">盈利</option>
	                                <option value="1">亏损</option>
                    			</select>
                    </div>
                    <div class="tpsearch">
                    	订单状态：<select id="ostaus" class="span7">
                    				<option value="">默认不选</option>
	                                <option value="0">建仓</option>
	                                <option value="1">平仓</option>
                    			</select>
                    </div>
                </div>
                <div class="span10 pull-right" style="margin-top: 20px;">
                	<a href="javascript:void(0)" class="btn-flat info" id="search_begin">开始查找</a>
                </div>
            </div>
            <!-- Users table -->
            <div class="row-fluid table">
                <!--//这个地方动态加载-->
                <table class="table table-hover">
                	<thead>
                        <tr>
                            <th class="span2 sortable">
                                <span class="line"></span>订单编号
                            </th>
							<th class="span2 sortable">
                                <span class="line"></span>用户
                            </th>
                            <th class="span3 sortable">
                                <span class="line"></span>订单时间
                            </th>
                            <th class="span2 sortable">
                                <span class="line"></span>产品信息
                            </th>
							<th class="span2 sortable">
                                <span class="line"></span>数量
                            </th>
                            <th class="span1 sortable">
                                <span class="line"></span>状态
                            </th>
							<th class="span1 sortable">
                                <span class="line"></span>类型
                            </th>
                            <th class="span1 sortable">
                                <span class="line"></span>买价
                            </th>
                            <th class="span1 sortable">
                                <span class="line"></span>卖价
                            </th>
                            <th class="span2 sortable">
                                <span class="line"></span>账户余额
                            </th>
                            <!--<th class="span2 sortable">
                                <span class="line"></span>佣金
                            </th>-->
							<th class="span1 sortable">
                                <span class="line"></span>手续费
                            </th>							
							<th class="span1 sortable">
                                <span class="line"></span>盈亏
                            </th>
							<th class="span2 sortable">
                                <span class="line"></span>操作
                            </th>
                        </tr>
                    </thead>
                    <tbody id="ajaxback">
                    	<?php if(is_array($orders)): $i = 0; $__LIST__ = $orders;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr class="first <?php if($vo["ostaus"] == 0): ?>create<?php else: endif; ?>">
								<td>
		                            <?php echo ($vo["orderno"]); ?>
		                        </td>
		                        <td>
		                            <a href="<?php echo U('User/updateuser',array('uid'=>$vo['uid']));?>" class="name"><?php echo ($vo["username"]); ?></a>
		                        </td>
		                        <td>
		                        	<?php if($vo["ostaus"] == 1): echo (date('Y-m-d H:m',$vo["selltime"])); ?>
		                            <?php else: ?>
		                           		<?php echo (date('Y-m-d H:m',$vo["buytime"])); endif; ?>
		                        </td>
		                        <td>
									<a href="<?php echo U('Goods/gedit',array('pid'=>$vo['pid']));?>"><?php echo ($vo["ptitle"]); ?></a>
		                        </td>
								<td>
		                            <?php echo ($vo["onumber"]); ?>手
		                        </td>
								<td>
									<?php if($vo["ostaus"] == 1): ?><!--<span class="label label-info">平仓</span>-->
	                                平仓
	                            	<?php else: ?>
									<!--<span class="label">建仓</span>-->
									建仓<?php endif; ?>
	                            </td>
	                            <td>
	                            	<?php if($vo["ostyle"] == 1): ?><!--<span class="label label-success">买跌</span>-->
	                                <font color="#2fb44e">买跌</font>
	                            	<?php else: ?>
									<!--<span class="label label-cc">买涨</span>-->
									<font color="#ed0000">买涨</font><?php endif; ?>                            	
	                            </td>
	                            <td>
	                            	<font color="#f00" size="3"><?php echo ($vo["buyprice"]); ?></font>
	                            </td>
	                            <td class="sellprice">
	                            	<?php if($vo["ostaus"] == 1): if($vo["buyprice"] > $vo["sellprice"]): ?><font color="#ed0000" size="3"><?php echo ($vo["sellprice"]); ?></font>
                            			<?php else: ?>
                            				<font color="#2fb44e" size="3"><?php echo ($vo["sellprice"]); ?></font><?php endif; ?>
	                            	<?php else: ?>
										<!--<span class="label">建仓中</span>-->
										<span <?php if($vo["cid"] == 1): ?>class="you drop"<?php elseif($vo["cid"] == 2): ?>class="baiyin drop"<?php else: ?>class="tong drop"<?php endif; ?>></span><?php endif; ?>
	                            </td>
	                            <td>
	                                <font color="#f00" size="3"><?php echo ($vo["commission"]); ?></font>
	                            </td>
								<!--<td>
	                                <?php if($vo["ostaus"] == 1): ?><font color="#f00" size="3"><?php echo ($vo["commission"]); ?></font>
	                            	<?php else: ?>
									<span class="label">建仓中</span><?php endif; ?>
	                            </td>-->
								<td>
	                                <font color="#f00" size="3"><?php echo ($vo['fee']); ?></font>
	                            </td>
								<td>
	                                <?php if($vo["ostaus"] == 1): if($vo['ploss'] >= 0): ?><font color="#ed0000" size="4"><?php echo ($vo["ploss"]); ?></font>	
	                                	<?php else: ?>
	                                		<font color="#2fb44e" size="3"><?php echo ($vo["ploss"]); ?></font><?php endif; ?>
	                            	<?php else: ?>
									<!--<span class="label">建仓中</span>-->
									<span class="ploss"></span><?php endif; ?>
	                            </td>
								<td>
									<a href="<?php echo U('Order/ocontent',array('oid'=>$vo['oid']));?>">查看</a>
		                        </td>
		                        <input type="hidden" value="<?php echo ($vo['wave']); ?>" name="wave" />
		                        <input type="hidden" value="<?php echo ($vo['onumber']); ?>" name="onumber" />
		                        <input type="hidden" value="<?php echo ($vo['buyprice']); ?>" name="buyprice" />
		                        <input type="hidden" value="<?php echo ($vo['cid']); ?>" name="cid" />
		                        <input type="hidden" value="<?php echo ($vo['ostyle']); ?>" name="ostyle" />
		                    </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                	</tbody>
                </table>
                <input id="yprice" type="hidden" value=""/>
           		<input id="byprice" type="hidden" value=""/>
           		<input id="toprice" type="hidden" value=""/>
                <div class="qjcz">
					今日盈亏统计：<font color="#f00" size="4"><?php if($tploss == ''): ?>0<?php else: echo ($tploss); endif; ?></font>元&nbsp;&nbsp;交易手数：<font color="#f00" size="4"><?php if($num == ''): ?>0<?php else: echo ($num); endif; ?></font>手&nbsp;&nbsp;交易额统计：<font color="#f00" size="5"><?php if($totals == ''): ?>0<?php else: echo ($totals); endif; ?></font>元
				</div>
            </div>
            <div class="pagination pull-right">
                <ul>
                    <?php echo ($page); ?>
                </ul>
            </div>
            <!-- end users table -->
        </div>
    </div>
    <!-- end main container -->
<div id="loading" style="width: 100%;height: 105%;position: absolute;top: 0; z-index: 9999;display: none;">
	<div class="load-center" style="background: #000;position: absolute;width: 60%;height: 14%;bottom: 10%;border-radius: 10px;color: #fff;text-align: center;font-size: 24px;left: 17%;padding: 1%;">
		<img src="/Public/Admin/img/ajax-loading.jpg" alt="ajax-loading" width="40"/><br/>页面加载中...
	</div>
</div>
<!-- scripts -->

<script src="/Public/Admin/js/jquery-latest.js"></script>
<script src="/Public/Admin/js/bootstrap.min.js"></script>
<script src="/Public/Admin/js/bootstrap.datepicker.js"></script>
<script src="/Public/Admin/js/theme.js"></script>
<script type="text/javascript">
    $(function () {

        // datepicker plugin
        $('.datepicker').datepicker().on('changeDate', function (ev) {
            $(this).datepicker('hide');
        });
    });
</script>
<script type="text/javascript">
	$(document).ready(function(){
		var eqli = $("#dashboard-menu").children().eq(3);
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
	//搜索结果，ajax返回搜索框搜索结果
	$('#search_begin').click(function(){
		//获取文本框值
		var orderno = $("#orderno").val(),
			username = $("#username").val(),
			buytime = $("#buytime").val(),
		    ostyle = $("#ostyle  option:selected").val(),
			ploss = $("#ploss  option:selected").val(),
			ostaus = $("#ostaus option:selected").val();
			
		//alert(orderno+username+buytime+ostyle+ploss+ostaus);
		$.ajax({
			type: "post",
			url: "<?php echo U('Order/olist?step=search');?>",
			data:{"orderno":orderno,"username":username,"buytime":buytime,"ostyle":ostyle,"ploss":ploss,"ostaus":ostaus},
			success: function(data){
				//console.log(data);
				if(data=="null"){
	            	//$("#loading").hide();
	            	$("#ajaxback").html('<tr class="first"><td colspan="14">没有找到结果，请重新输入！请检查输入的格式是否正确！</tr></td>');
	            }else{
	            	//$("#loading").hide();
	            	$olist = "";
		            $.each(data,function(no,items){
		            	if(items.ostaus==0){
		            		$olist += '<tr class="first create">';	
		            	}else{
		            		$olist += '<tr class="first">';
		            	}
		            	$olist += '<td>'+items.oid+'</td>';
		            	$olist += '<td><a href="<?php echo U('User/updateuser');?>?uid='+items.uid+'">'+items.username+'</a></td>';
		            	if(items.ostaus==1){
		            		$olist += '<td>'+items.selltime+'</td>';
		            	}else{
		            		$olist += '<td>'+items.buytime+'</td>';
		            	}
		            	$olist += '<td><a href="<?php echo U('Goods/gedit');?>?pid='+items.pid+'">'+items.ptitle+'</a></td>';
		            	$olist += '<td>'+items.onumber+'手</td><td>';
		            	if(items.ostaus==1){
		            		$olist += '平仓';
		            	}else{
		            		$olist += '建仓';
		            	}
		            	$olist += '</td><td>';
		            	if(items.ostyle==1){
		            		$olist += '<font color="#2fb44e">买跌</font>';
		            	}else{
		            		$olist += '<font color="#ed0000">买涨</font>';
		            	}
		            	$olist += '</td>';
		            	$olist += '<td><font color="#f00" size="3">￥'+items.buyprice+'<font></td>';
		            	$olist += '<td class="sellprice">';
		            	if(items.ostaus==1){
		            		if(items.buyprice>items.sellprice){
		            			$olist += '<font color="#ed0000" size="3">'+items.sellprice+'</font>';	
		            		}else{
		            			$olist += '<font color="#2fb44e" size="3">'+items.sellprice+'</font>';
		            		}
		            	}else{
		            		if(items.cid==1){
		            			$olist += '<span class="you drop"></span>';
		            		}else if(items.cid==2){
		            			$olist += '<span class="baiyin drop"></span>';
		            		}else{
		            			$olist += '<span class="tong drop"></span>';
		            		}
		            	}
		            	$olist += '</td><td>';
		            	$olist += '<font color="#f00" size="3">'+items.commission+'<font>';	            	
		            	$olist += '</td>';
		            	$olist += '<td><font color="#f00" size="3">'+items.fee+'<font></td>';
		            	$olist += '<td>';
		            	if(items.ostaus==1){
		            		if(items.ploss>=0){
		            			$olist += '<font color="#ed0000" size="4">'+items.ploss+'<font>';	
		            		}else{
		            			$olist += '<font color="#2fb44e" size="4">'+items.ploss+'<font>';
		            		}
		            	}else{
		            		$olist += '<span class="ploss"></span>';
		            	}
		            	$olist += '</td>';
		            	$olist += '<td><a href="<?php echo U('Order/ocontent');?>?oid='+items.oid+'">查看</a></td>';
		            	$olist += '<input type="hidden" value="'+items.wave+'" name="wave" />';
		            	$olist += '<input type="hidden" value="'+items.onumber+'" name="onumber" />';
		            	$olist += '<input type="hidden" value="'+items.buyprice+'" name="buyprice" />';
		            	$olist += '<input type="hidden" value="'+items.cid+'" name="cid" />';
		            	$olist += '<input type="hidden" value="'+items.ostyle+'" name="ostyle" />';
		            	$olist += '</tr>';
		            })
		            $("#ajaxback").html($olist);
		            butt();
	            }
			},
			error: function(data){
				console.log(data);
			}
		});
	})
	
	
	
	
	$('#top_search').keyup(top_serch);
	$('#sxsearch').click(top_serch);
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
			newurl = "<?php echo U('Order/olist?step=search');?>"
		}
		if(urlkey == "sxsearch"){
			newurl = "<?php echo U('Order/olist?step=sxsearch');?>"
		}
		$.ajax({
        type: "post",  
        url: newurl,    
        data:{"keywords":keywords,"sxkey":sxkey,"formula":formula,"sxvalue":sxvalue},
//      beforeSend:function(XMLHttpRequest){ 
//            //alert('远程调用开始...'); 
//            $("#loading").show(); 
//      },
        success: function(data) {
        	//$("#ajaxback").html(data);
            if(data=="null"){
            	//$("#loading").hide();
            	$("#ajaxback").html('<tr class="first"><td colspan="13">没有找到结果，请重新输入！请检查输入的格式是否正确！</tr></td>');
            }else{
            	//$("#loading").hide();
            	$olist = "";
	            $.each(data,function(no,items){
	            	if(items.ostaus==0){
	            		$olist += '<tr class="first create">';	
	            	}else{
	            		$olist += '<tr class="first">';
	            	}
	            	$olist += '<td>'+items.oid+'</td>';
	            	$olist += '<td><a href="<?php echo U('User/updateuser');?>?uid='+items.uid+'">'+items.username+'</a></td>';
	            	if(items.ostaus==1){
	            		$olist += '<td>'+items.selltime+'</td>';
	            	}else{
	            		$olist += '<td>'+items.buytime+'</td>';
	            	}
	            	$olist += '<td><a href="<?php echo U('Goods/gedit');?>?pid='+items.pid+'">'+items.ptitle+'</a></td>';
	            	$olist += '<td>'+items.onumber+'手</td><td>';
	            	if(items.ostaus==1){
	            		$olist += '平仓';
	            	}else{
	            		$olist += '建仓';
	            	}
	            	$olist += '</td><td>';
	            	if(items.ostyle==1){
	            		$olist += '<font color="#2fb44e">买跌</font>';
	            	}else{
	            		$olist += '<font color="#ed0000">买涨</font>';
	            	}
	            	$olist += '</td>';
	            	$olist += '<td><font color="#f00" size="3">￥'+items.buyprice+'<font></td>';
	            	$olist += '<td class="sellprice">';
	            	if(items.ostaus==1){
	            		if(items.buyprice>items.sellprice){
	            			$olist += '<font color="#ed0000" size="3">'+items.sellprice+'</font>';	
	            		}else{
	            			$olist += '<font color="#2fb44e" size="3">'+items.sellprice+'</font>';
	            		}
	            	}else{
	            		if(items.cid==1){
	            			$olist += '<span class="you drop"></span>';
	            		}else if(items.cid==2){
	            			$olist += '<span class="baiyin drop"></span>';
	            		}else{
	            			$olist += '<span class="tong drop"></span>';
	            		}
	            	}
	            	$olist += '</td><td>';
	            	$olist += '<font color="#f00" size="3">'+items.commission+'<font>';	            	
	            	$olist += '</td>';
	            	$olist += '<td><font color="#f00" size="3">'+items.fee+'<font></td>';
	            	$olist += '<td>';
	            	if(items.ostaus==1){
	            		if(items.ploss>=0){
	            			$olist += '<font color="#ed0000" size="4">'+items.ploss+'<font>';	
	            		}else{
	            			$olist += '<font color="#2fb44e" size="4">'+items.ploss+'<font>';
	            		}
	            	}else{
	            		$olist += '<span class="ploss"></span>';
	            	}
	            	$olist += '</td>';
	            	$olist += '<td><a href="<?php echo U('Order/ocontent');?>?oid='+items.oid+'">查看</a></td>';
	            	$olist += '<input type="hidden" value="'+items.wave+'" name="wave" />';
	            	$olist += '<input type="hidden" value="'+items.onumber+'" name="onumber" />';
	            	$olist += '<input type="hidden" value="'+items.buyprice+'" name="buyprice" />';
	            	$olist += '<input type="hidden" value="'+items.cid+'" name="cid" />';
	            	$olist += '<input type="hidden" value="'+items.ostyle+'" name="ostyle" />';
	            	$olist += '</tr>';
	            })
	            $("#ajaxback").html($olist);
	            butt();
            }
            
            //console.log(data);
        },  
        error: function(data) {  
            console.log(data);
        }
      }); 
	}
	
$("#sxkey").bind("change",function(){
	var sxkey = $(this).val();
	switch(sxkey){
		case "orderno":
			$("#sxvalue").attr("placeholder","格式：不允许汉字");
			break;
		case "username":
			$("#sxvalue").attr("placeholder","格式：雁过留痕");
			break;
		case "buytime":
			$("#sxvalue").attr("placeholder","格式：1970-10-01");
			break;
		case "ostyle":
			$("#sxvalue").attr("placeholder","格式：买涨/买跌");
			break;
		case "ploss":
			$("#sxvalue").attr("placeholder","格式：数字格式");
			break;
		case "ostaus":
			$("#sxvalue").attr("placeholder","格式：建仓/平仓");
			break;
		default:
			$("#sxvalue").text("输入内容");
	}
	
})
</script>
<script type="text/javascript">  
	butt();
	setInterval('butt()', 1000);
	function butt(){  
		//获取油的价格到页面
		var yprice = $('#yprice').val();
		var byprice = $('#byprice').val();
		var toprice = $('#toprice').val();
		$.ajax({  
			type: "post",  
			url: "<?php echo U('Goods/price');?>",         
			success: function(data) { 
				//最新油价
				$('.you').html(data[0]);
				$('#yprice').val(data[0]);
				if(data[0]<yprice){
					$('.you').attr("class","you drop");
				}else if(data[0]==yprice){}else{
					$('.you').attr("class","you rise");
				}              
			},  
		}); 
		//获取白银的价格到页面  
		$.ajax({  
			type: "post",  
			url: "<?php echo U('Goods/byprice');?>",         
			success: function(data) {
				//最新白银价
				$('.baiyin').text(data[0]); 
				$('#byprice').val(data[0]);
				if(data[0]<byprice){
					$('.baiyin').attr("class","baiyin drop");
				}else if(data[0]==byprice){}else{
					$('.baiyin').attr("class","baiyin rise");
				}                
			},  
		});
		//获取铜的价格到页面  
		$.ajax({  
			type: "post",  
			url: "<?php echo U('Goods/toprice');?>",         
			success: function(data) {
				//最新白银价
				$('.tong').text(data[0]);
				$('#toprice').val(data[0]);
				if(data[0]<toprice){
					$('.tong').attr("class","tong drop");
				}else if(data[0]==toprice){}else{
					$('.tong').attr("class","tong rise");
				}   
			},  
		});
	}
</script>
<script type="text/javascript">
	setInterval('getPloss()', 1000);
	function getPloss(){
		$('.create').each(function(){
			var buyprice = $(this).find('input[name=buyprice]').val(),
				sellprice = $(this).find('.sellprice span').html(),
				wave = $(this).find('input[name=wave]').val(),
				onumber = $(this).find('input[name=onumber]').val(),
				cid = $(this).find('input[name=cid]').val(),
				ostyle = $(this).find('input[name=ostyle]').val(),
				ploss = 0,
				findPloss = $(this).find('.ploss');
			if(ostyle==0){
				if(cid==1){
					ploss = (sellprice-buyprice)*wave*onumber;
				}else{
					ploss = (sellprice-buyprice)*wave*onumber;
				}
			}else{
				if(cid==1){
					ploss = (buyprice-sellprice)*wave*onumber;
				}else{
					ploss = (buyprice-sellprice)*wave*onumber;
				}
			}
			if(ploss<0){
				findPloss.attr("class","ploss drop");
				findPloss.css('color','#2fb44e')
			}else{
				findPloss.attr("class","ploss rise");
				findPloss.css('color','#ed0000')
			}
			if(findPloss.html()=="NaN"){
				findPloss.html("");
			}else{
				findPloss.html(parseFloat(ploss).toFixed(2));	
			}
//			}else if(findPloss.html()==""){
//				findPloss.html("");
//			}else{
//				findPloss.html(parseFloat(ploss).toFixed(2));
//			}
			
		})
	}
</script>

    </div>
    <script type="text/javascript">
    	var wid = $(window).height();
    	document.writeln('<div id="popupLayer" style="position:absolute;z-index:2;width:100%;height:'+wid+'px;left:0;top:0;opacity:0.3;filter:Alpha(opacity=30);background:#000;display: none;"></div>');
    </script>
</body>
</html>
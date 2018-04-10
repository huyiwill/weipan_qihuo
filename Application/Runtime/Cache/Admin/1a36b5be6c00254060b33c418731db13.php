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
                <h3>交易流水</h3>
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
                                <span class="line"></span>编号
                            </th>
							<th class="span2 sortable">
                                <span class="line"></span>用户
                            </th>
                            <th class="span2 sortable">
                                <span class="line"></span>类型
                            </th>
                            <th class="span3 sortable">
                                <span class="line"></span>操作时间
                            </th>
                            <th class="span2 sortable">
                                <span class="line"></span>产品信息
                            </th>
							<th class="span2 sortable">
                                <span class="line"></span>数量(手)
                            </th>
                            <th class="span1 sortable">
                                <span class="line"></span>方向
                            </th>							
                            <th class="span1 sortable">
                                <span class="line"></span>金额
                            </th>
                            <th class="span1 sortable">
                                <span class="line"></span>手续费
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
                            <th class="span2 sortable">
                                <span class="line"></span>出入金
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
                    	<?php if(is_array($tlist)): $i = 0; $__LIST__ = $tlist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$tl): $mod = ($i % 2 );++$i;?><tr class="first">
							<td>
	                            <?php echo ($tl["jno"]); ?>
	                        </td>
	                        <td>
	                            <a href="<?php echo U('User/updateuser',array('uid'=>$tl['uid']));?>" class="name"><?php echo ($tl["jusername"]); ?></a>
	                        </td>
	                        <td><?php echo ($tl["jtype"]); ?></td>
	                        <td><?php echo (date('Y-m-d H:s',$tl["jtime"])); ?></td>
	                        <td>
	                        	<?php if($tl["jtype"] == "提现"): ?>0
								<?php elseif($tl["jtype"] == "充值"): ?>
									0
								<?php else: ?>
									<?php echo ($tl["remarks"]); endif; ?>
	                        </td>
	                        <td>
	                        	<?php if($tl["jtype"] == "提现"): ?>0
								<?php elseif($tl["jtype"] == "充值"): ?>
									0
								<?php else: ?>
									<?php echo ($tl["number"]); ?>手<?php endif; ?>
	                        </td>
							<td>
								<?php if($tl["jtype"] == "提现"): ?>0
								<?php elseif($tl["jtype"] == "充值"): ?>
									0
								<?php else: ?>
									<?php if($tl["jostyle"] == 1): ?><!--<span class="label label-success">买跌</span>-->
		                                <font color="#2fb44e">买跌</font>
		                            	<?php else: ?>
										<!--<span class="label label-cc">买涨</span>-->
										<font color="#ed0000">买涨</font><?php endif; endif; ?>
							</td>
							<td>
								<?php if($tl["jtype"] == "提现"): echo ($tl["juprice"]); ?>
								<?php elseif($tl["jtype"] == "充值"): ?>
									<?php echo ($tl["juprice"]); ?>
								<?php else: ?>
									<?php echo ($tl['number']*$tl['juprice']); endif; ?>
							</td>
                            <td>
                            	<?php if($tl["jtype"] == "提现"): ?>0
								<?php elseif($tl["jtype"] == "充值"): ?>
									0
								<?php else: ?>
									<?php echo ($tl["jfee"]); endif; ?>
                            </td>
                            <td>
                            	<?php if($tl["jtype"] == "提现"): ?>0
								<?php elseif($tl["jtype"] == "充值"): ?>
									0
								<?php else: ?>
									<font color="#ed0000" size="3"><?php echo ($tl["jbuyprice"]); ?></font><?php endif; ?>
                            </td>
                            <td>
                            	<?php if($tl["jtype"] == "提现"): ?>0
								<?php elseif($tl["jtype"] == "充值"): ?>
									0
								<?php else: ?>
									<?php if($tl["jtype"] != "建仓"): if($tl["jbuyprice"] < $tl["jsellprice"]): ?><font color="#ed0000" size="3"><?php echo ($tl["jsellprice"]); ?></font>
	                        			<?php else: ?>
	                        				<font color="#2fb44e" size="3"><?php echo ($tl["jsellprice"]); ?></font><?php endif; ?>
	                            	<?php else: ?>
										<!--<span class="label">建仓中</span>-->
										<font color="#ed0000" size="3">0.00</font><?php endif; endif; ?>
                            	
                            </td>
                            <td><font color="#f00" size="3"><?php echo ($tl["balance"]); ?></font></td>
							<td>
								<?php if($tl["jtype"] == "提现"): ?><font color="#2fb44e" size="3">-<?php echo ($tl["juprice"]); ?></font>
								<?php elseif($tl["jtype"] == "充值"): ?>
									<font color="#2fb44e" size="3">-<?php echo ($tl["juprice"]); ?></font>
								<?php else: ?>
									<?php if($tl["jaccess"] >= 0): ?><font color="#ed0000" size="3">+<?php echo ($tl["jaccess"]); ?></font>
									<?php else: ?>
										<font color="#2fb44e" size="3"><?php echo ($tl["jaccess"]); ?></font><?php endif; endif; ?>
							</td>
							<td>
								<?php if($tl["jtype"] == "提现"): ?>0
								<?php elseif($tl["jtype"] == "充值"): ?>
									0
								<?php else: ?>
									<?php if($tl["jtype"] != "建仓"): if($tl["jploss"] >= 0): ?><font color="#ed0000" size="3">+<?php echo ($tl["jploss"]); ?></font>
	                        			<?php else: ?>
	                        				<font color="#2fb44e" size="3"><?php echo ($tl["jploss"]); ?></font><?php endif; ?>
	                            	<?php else: ?>
										<!--<span class="label">建仓中</span>-->
										<font color="#ed0000" size="3">0.00</font><?php endif; endif; ?>
							</td>
							<td>
								<?php if($tl["jtype"] == "提现"): ?>等待审核
								<?php elseif($tl["jtype"] == "充值"): ?>
									等待审核
								<?php elseif($tl["jtype"] == "返点"): ?>
									<?php echo ($tl["explain"]); ?>
								<?php else: ?>
									<a href="<?php echo U('Order/ocontent',array('oid'=>$tl['oid']));?>">查看</a><?php endif; ?>
	                        </td>
	                    </tr><?php endforeach; endif; else: echo "" ;endif; ?>
						<!-- <tr>
							<td>统计</td>
	                        <td colspan="8"></td>
	                        <td>12312312</td>
	                        <td>123123</td>
	                        <td>123123</td>
	                        <td></td>
	                        <td></td>
	                        <td></td>
						</tr> -->
                	</tbody>
                </table>
                <div class="qjcz">
					温馨提示：默认查询当天的交易流水
					<!-- <font color="#f00" size="4"><?php echo ($tploss); ?></font>元&nbsp;&nbsp;交易手数：<font color="#f00" size="4"><?php echo ($num); ?></font>手&nbsp;&nbsp;交易额统计：<font color="#f00" size="5"><?php echo ($totals); ?></font>元 -->
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
		            	console.log(items);
		            	$olist += '<tr class="first">';
		            	$olist += '<td>'+items.orderno+'</td>';
		            	$olist += '<td><a href="<?php echo U('User/updateuser');?>?uid='+items.uid+'">'+items.username+'</a></td><td>';
		            	if(items.ostaus==1){
		            		$olist += '<span class="label label-info">平仓</span>';
		            	}else{
		            		$olist += '<span class="label">建仓</span>';
		            	}
		            	$olist += '</td><td>'+items.buytime+'</td>';
		            	$olist += '<td><a href="<?php echo U('Goods/gedit');?>?pid='+items.pid+'">'+items.ptitle+'</a></td>';
		            	$olist += '<td>'+items.onumber+'手</td>';
		            	
		            	$olist += '<td>';
		            	if(items.ostyle==1){
		            		$olist += '<span class="label label-success">买涨</span>';
		            	}else{
		            		$olist += '<span class="label label-cc">买跌</span>';
		            	}
		            	$olist += '</td>';
		            	$olist += '<td><font color="#f00" size="3">'+items.uprice+'</font></td>';
		            	$olist += '<td><font color="#f00" size="3">'+items.fee+'</font></td>';
		            	$olist += '<td><font color="#f00" size="3">'+items.buyprice+'</font></td>';
		            	$olist += '<td>';
		            	if(items.ostaus==1){
		            		$olist += '<font color="#f00" size="3">'+items.sellprice+'</font>';
		            	}else{
		            		$olist += '<span class="label">建仓中</span>';
		            	}
		            	$olist += '</td>';
		            	if(items.commission==""){
		            		$olist += '<td><font color="#f00" size="3">0.00</font></td>';
		            	}else{
		            		$olist += '<td><font color="#f00" size="3">'+items.commission+'</font></td>';	
		            	}
		            	$olist += '<td><font color="#f00" size="3">'+items.jaccess+'</font></td>';
		            	$olist += '<td>';
		            	if(items.ostaus==1){
		            		$olist += '<font color="#f00" size="4">'+items.ploss+'</font>';
		            	}else{
		            		$olist += '<span class="label">建仓中</span>';
		            	}
		            	$olist += '</td>';
		            	$olist += '<td><a href="<?php echo U('Order/ocontent');?>?oid='+items.oid+'">查看</a></td>';
		            	$olist += '</tr>';
		            })
		            $("#ajaxback").html($olist);
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
	            	$olist += '<tr class="first">';
	            	$olist += '<td>'+items.oid+'</td>';
	            	$olist += '<td><a href="<?php echo U('User/updateuser');?>?uid='+items.uid+'">'+items.username+'</a></td>';
	            	$olist += '<td>'+items.buytime+'</td>';
	            	$olist += '<td><a href="<?php echo U('Goods/gedit');?>?pid='+items.pid+'">'+items.ptitle+'</a></td>';
	            	$olist += '<td>'+items.onumber+'手</td><td>';
	            	if(items.ostaus==1){
	            		$olist += '<span class="label label-info">平仓</span>';
	            	}else{
	            		$olist += '<span class="label">建仓</span>';
	            	}
	            	$olist += '</td><td>';
	            	if(items.ostyle==1){
	            		$olist += '<span class="label label-success">买涨</span>';
	            	}else{
	            		$olist += '<span class="label label-cc">买跌</span>';
	            	}
	            	$olist += '</td>';
	            	$olist += '<td><font color="#f00" size="3">￥'+items.buyprice+'<font></td>';
	            	$olist += '<td>';
	            	if(items.ostaus==1){
	            		$olist += '<font color="#f00" size="3">￥'+items.sellprice+'<font>';
	            	}else{
	            		$olist += '建仓中';
	            	}
	            	$olist += '</td><td>';
	            	if(items.ostaus==1){
	            		$olist += '<font color="#f00" size="3">￥'+items.commission+'<font>';
	            	}else{
	            		$olist += '建仓中';
	            	}
	            	$olist += '</td>';
	            	$olist += '<td><font color="#f00" size="3">￥'+items.fee+'<font></td>';
	            	$olist += '<td>';
	            	if(items.ostaus==1){
	            		$olist += '<font color="#f00" size="4">￥'+items.ploss+'<font>';
	            	}else{
	            		$olist += '建仓中';
	            	}
	            	$olist += '</td>';
	            	$olist += '<td><a href="<?php echo U('Order/ocontent');?>?oid='+items.oid+'">查看</a></td>';
	            	$olist += '</tr>';
	            })
	            $("#ajaxback").html($olist);
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

    </div>
    <script type="text/javascript">
    	var wid = $(window).height();
    	document.writeln('<div id="popupLayer" style="position:absolute;z-index:2;width:100%;height:'+wid+'px;left:0;top:0;opacity:0.3;filter:Alpha(opacity=30);background:#000;display: none;"></div>');
    </script>
</body>
</html>
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
    	
<link rel="stylesheet" href="/Public/Admin/css/compiled/new-user.css" type="text/css" media="screen" />  
   <div class="container-fluid">
            <div id="pad-wrapper" class="new-user">
                <div class="row-fluid header">
                    <h3>客户管理&nbsp;>&nbsp修改用户</h3>
                </div>

                <div class="row-fluid form-wrapper">
                    <form action="<?php echo U(User/updateuser);?>" method="post" class="new_user_form">
                    <input type="hidden" name="uid" value="<?php echo ($userme['uid']); ?>"/>
                    <!-- left column -->
                    <div class="span6 with-sidebar">
                        <div class="span9 field-box uname">
                            <label>客户名:</label>
                            <input class="span3" type="text" name="username" value="<?php echo ($userme['username']); ?>" readonly="true"/>
                            <a href="">冻结</a>/<a href="">解冻</a>
                        </div>
                        <div class="span9 field-box">
                            <label>真实姓名:</label>
                            <input class="span2" type="text" name="mname" value="<?php echo ($userme['mname']); ?>" />
                        </div>
                       
                        <!--<div class="span12 field-box">
                            <label>邮箱:</label>
                            <input class="span9" type="text" value="anjilinazhuli@canvas.com" />
                        </div>-->
                        <div class="span9 field-box">
                            <label>电话:</label>
                            <input class="span8" type="text" name="utel" value="<?php echo ($userme['utel']); ?>" />
                        </div>
                        <div class="span9 field-box">
                            <label>级别:</label>
                            <?php if($userme["otype"] == 0): ?><input class="span2" type="text" name="otype" value="客户" readonly="true"/>
                        	<?php elseif($userme["otype"] == 2): ?>
                        		<input class="span2" type="text" name="otype" value="会员" readonly="true"/>
                    		<?php else: ?>
                        		<input class="span2" type="text" name="otype" value="代理商" readonly="true"/><?php endif; ?>
                        </div>
                        <div class="span9 field-box">
                            <label>归属:</label>
                            <?php if($sys["otype"] == 3): echo ($userme["managername"]); ?>(超级管理员)
                            <?php else: ?>
                            	<a href="<?php echo U('User/updateuser',array('uid'=>$userme['oid']));?>"><?php echo ($userme["managername"]); ?></a><?php endif; ?>
                        </div>
                        <div class="span9 field-box">
                            <label>账户余额:</label>
                            <input class="span2" type="text" name="balance" value="<?php echo ($userme["balance"]); ?>" />元&nbsp;修改冲正
                        </div>
                        <div class="span9 field-box">
                            <label>注册时间:</label>
                            <input class="span8" type="text" name="utime" value="<?php echo (date('Y-m-d H:m',$userme["utime"])); ?>" readonly="true"/>
                        </div>
                        <div class="span9 field-box">
                            <label>身份证号码:</label>
                            <input class="span8" type="text" name="brokerid" value="<?php echo ($userme['brokerid']); ?>" />
                        </div>
                        <div class="span9 field-box">
                            <label>平台:</label>
                            <select id="Bank" class="f-select span3" name="bankname">
                            <option value="支付宝">支付宝</option>
                        <option value="微信">微信</option>
					            <option value="<?php echo ($userme["bankname"]); ?>"><?php echo ($userme["bankname"]); ?></option>
					            <option value="中国银行">中国银行</option>
					            <option value="中国工商银行">中国工商银行</option>
					            <option value="中国农业银行">中国农业银行</option>
					            <option value="中国建设银行">中国建设银行</option>
					            <option value="交通银行">交通银行</option>
					            <option value="招商银行">招商银行</option>
					            <option value="浦发银行">浦发银行</option>
					            <option value="民生银行">民生银行</option>
					            <option value="兴业银行">兴业银行</option>
					            <option value="深发展银行">深发展银行</option>
					            <option value="华夏银行">华夏银行</option>
					            <option value="光大银行">光大银行</option>
					            <option value="广发银行">广发银行</option>
					            <option value="中信银行">中信银行</option>
					        </select>
					        <select id="selProvince" onChange="provinceChange();" class="f-select span2" name="province">
					            <option value="<?php echo ($userme["province"]); ?>"><?php echo ($userme["province"]); ?></option>
					            <option value="北京">北京</option>
					            <option value="上海">上海</option>
					            <option value="天津">天津</option>
					            <option value="重庆">重庆</option>
					            <option value="浙江">浙江</option>
					            <option value="江苏">江苏</option>
					            <option value="广东">广东</option>
					            <option value="福建">福建</option>
					            <option value="湖南">湖南</option>
					            <option value="湖北">湖北</option>
					            <option value="辽宁">辽宁</option>
					            <option value="吉林">吉林</option>
					            <option value="黑龙江">黑龙江</option>
					            <option value="河北">河北</option>
					            <option value="河南">河南</option>
					            <option value="山东">山东</option>
					            <option value="陕西">陕西</option>
					            <option value="甘肃">甘肃</option>
					            <option value="新疆">新疆</option>
					            <option value="青海">青海</option>
					            <option value="山西">山西</option>
					            <option value="四川">四川</option>
					            <option value="贵州">贵州</option>
					            <option value="安徽">安徽</option>
					            <option value="江西">江西</option>
					            <option value="云南">云南</option>
					            <option value="内蒙古">内蒙古</option>
					            <option value="西藏">西藏</option>
					            <option value="广西">广西</option>
					            <option value="宁夏">宁夏</option>
					            <option value="海南">海南</option>
					            <option value="香港">香港</option>
					            <option value="澳门">澳门</option>
					            <option value="台湾">台湾</option>
					        </select>
					        <select id="selCity" class="f-select span2" name="city">
					            <option value="<?php echo ($userme["city"]); ?>"><?php echo ($userme["city"]); ?></option>
					        </select>
                        </div>
                        <div class="span9 field-box">
                            <label>银行卡开户行:</label>
                            <input class="span8" type="text" name="branch" value="<?php echo ($userme['branch']); ?>"/>
                        </div>
                        <div class="span9 field-box">
                            <label>持卡人:</label>
                            <input class="span8" type="text" name="busername" value="<?php echo ($userme['busername']); ?>"/>
                        </div>
                        <div class="span9 field-box">
                            <label>账号:</label>
                            <input class="span8" type="text" name="banknumber" value="<?php echo ($userme['banknumber']); ?>"/>
                        </div>
                        <div class="span3 field-box">
                            <label>新密码:</label>
                            <input class="span5" type="text" value="" name="upwd"/>
                        </div>
                        <div class="span3 field-box">
                            <label>确认密码:</label>
                            <input class="span5" type="text" value="" name="rpwd"/>
                        </div>
                        <div class="span8 field-box actions" style="padding-bottom: 20px;">
                            <input type="submit" class="btn-glow primary" value="修改" />
                        </div>
                    </div>
					</form>
                    <!-- side right column -->
                    <div class="span5 form-sidebar pull-right">
                    	<div class="btn-group toggle-inputs hidden-tablet">
                            <button class="glow left" data-input="inline">内联输入</button>
                            <button class="glow right active" data-input="normal">正常输入</button>
                        </div>
                        <div class="alert alert-info hidden-tablet" style="width: 50%;">
                            <i class="icon-lightbulb pull-left"></i>
                            点击上面的按钮可以切换输入方式。
                        </div>                        
                        <!-- <h6>该用户于2014年6月12日注册</h6>
                        <p>账户余额：￥<?php echo ($account["balance"]); ?></p>
						<p>获得佣金：￥7998.00</p>
                        <p>选择查看该用户订单:</p>
                        <ul>
                            <li><a href="#">12月份订单</a></li>
                            <li><a href="#">11月份订单</a></li>
                            <li><a href="#">10月份订单</a></li>
                        </ul> -->
                    </div>                    
                </div>
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
		//定义数组，存储省份信息    
        var province = ["北京", "上海", "天津", "重庆", "浙江", "江苏", "广东", "福建", "湖南", "湖北", "辽宁",    
                        "吉林", "黑龙江", "河北", "河南", "山东", "陕西", "甘肃", "新疆", "青海", "山西", "四川",    
                        "贵州", "安徽", "江西", "云南", "内蒙古", "西藏", "广西", "宁夏", "海南", "香港", "澳门", "台湾"];    
    
        //定义数组,存储城市信息    
        var beijing = ["东城区", "西城区", "海淀区", "朝阳区", "丰台区", "石景山区", "通州区", "顺义区", "房山区", "大兴区", "昌平区", "怀柔区", "平谷区", "门头沟区", "延庆县", "密云县"];    
        var shanghai = ["浦东新区", "徐汇区", "长宁区", "普陀区", "闸北区", "虹口区", "杨浦区", "黄浦区", "卢湾区", "静安区", "宝山区", "闵行区", "嘉定区", "金山区", "松江区", "青浦区", "南汇区", "奉贤区", "崇明县"];    
        var tianjing = ["河东", "南开", "河西", "河北", "和平", "红桥", "东丽", "津南", "西青", "北辰", "塘沽", "汉沽", "大港", "蓟县", "宝坻", "宁河", "静海", "武清"];    
        var chongqing = ["渝中区", "大渡口区", "江北区", "沙坪坝区", "九龙坡区", "南岸区", "北碚区", "万盛区", "双桥区", "渝北区", "巴南区", "万州区", "涪陵区", "黔江区", "长寿区", "江津区", "合川区", "永川区", "南川区"];    
        var jiangsu = ["南京", "无锡", "常州", "徐州", "苏州", "南通", "连云港", "淮安", "扬州", "盐城", "镇江", "泰州", "宿迁"];    
        var zhejiang = ["杭州", "宁波", "温州", "嘉兴", "湖州", "绍兴", "金华", "衢州", "舟山", "台州", "丽水"];    
        var guangdong = ["广州", "韶关", "深圳", "珠海", "汕头", "佛山", "江门", "湛江", "茂名", "肇庆", "惠州", "梅州", "汕尾", "河源", "阳江", "清远", "东莞", "中山", "潮州", "揭阳","云浮"];    
        var fujiang = ["福州", "厦门", "莆田", "三明", "泉州", "漳州", "南平", "龙岩", "宁德"];    
        var hunan = ["长沙", "株洲", "湘潭", "衡阳", "邵阳", "岳阳", "常德", "张家界", "益阳", "郴州", "永州", "怀化", "娄底", "湘西土家苗族自治区"];    
        var hubei = ["武汉", "襄阳", "黄石", "十堰", "宜昌", "鄂州", "荆门", "孝感", "荆州", "黄冈", "咸宁", "随州", "恩施土家族苗族自治州"];    
        var liaoning = ["沈阳", "大连", "鞍山", "抚顺", "本溪", "丹东", "锦州", "营口", "阜新", "辽阳", "盘锦", "铁岭", "朝阳", "葫芦岛"];    
        var jilin = ["长春", "吉林", "四平", "辽源", "通化", "白山", "松原", "白城", "延边朝鲜族自治区"];    
        var heilongjiang = ["哈尔滨", "齐齐哈尔", "鸡西", "牡丹江", "佳木斯", "大庆", "伊春", "黑河", "大兴安岭"];    
        var hebei = ["石家庄", "保定", "唐山", "邯郸", "承德", "廊坊", "衡水", "秦皇岛", "张家口", "邢台","沧州市"];    
        var henan = ["郑州", "洛阳", "商丘", "安阳", "南阳", "开封", "平顶山", "焦作", "新乡", "鹤壁", "许昌", "漯河", "三门峡", "信阳", "周口", "驻马店", "济源","濮阳"];    
        var shandong = ["济南", "青岛", "菏泽", "淄博", "枣庄", "东营", "烟台", "潍坊", "济宁", "泰安", "威海", "日照", "滨州", "德州", "聊城", "临沂"];    
        var shangxi = ["西安", "宝鸡", "咸阳", "渭南", "铜川", "延安", "榆林", "汉中", "安康", "商洛"];    
        var gansu = ["兰州", "嘉峪关", "金昌", "金川", "白银", "天水", "武威", "张掖", "酒泉", "平凉", "庆阳", "定西", "陇南", "临夏", "合作"];    
        var qinghai = ["西宁", "海东地区", "海北藏族自治州", "黄南藏族自治州", "海南藏族自治州", "果洛藏族自治州", "玉树藏族自治州", "海西蒙古族藏族自治州"];    
        var xinjiang = ["乌鲁木齐", "奎屯", "石河子", "昌吉", "吐鲁番", "库尔勒", "阿克苏", "喀什", "伊宁", "克拉玛依", "塔城", "哈密", "和田", "阿勒泰", "阿图什", "博乐"];    
        var shanxi = ["太原", "大同", "阳泉", "长治", "晋城", "朔州", "晋中", "运城", "忻州", "临汾", "吕梁"];    
        var sichuan = ["成都", "自贡", "攀枝花", "泸州", "德阳", "绵阳", "广元", "遂宁", "内江", "乐山", "南充", "眉山", "宜宾", "广安", "达州", "雅安", "巴中", "资阳", "阿坝藏族羌族自治州", "甘孜藏族自治州", "凉山彝族自治州"];    
        var guizhou = ["贵阳", "六盘水", "遵义", "安顺", "黔南布依族苗族自治州", "黔西南布依族苗族自治州", "黔东南苗族侗族自治州", "铜仁", "毕节","兴义市"];    
        var anhui = ["合肥", "芜湖", "安庆", "马鞍山", "阜阳", "六安", "滁州", "宿州", "蚌埠", "巢湖", "淮南", "宣城", "亳州", "淮北", "铜陵", "黄山", "池州"];    
        var jiangxi = ["南昌", "九江", "景德镇", "萍乡", "新余", "鹰潭", "赣州", "宜春", "上饶", "吉安", "抚州"];    
        var yunnan = ["昆明", "曲靖", "玉溪", "保山", "昭通", "丽江", "普洱", "临沧", "楚雄彝族自治州", "大理白族自治州", "红河哈尼族彝族自治州", "文山壮族苗族自治州", "西双版纳傣族自治州", "德宏傣族景颇族自治州", "怒江傈僳族自治州", "迪庆藏族自治州"];    
        var neimenggu = ["呼和浩特", "包头", "乌海", "赤峰", "通辽", "鄂尔多斯", "呼伦贝尔", "巴彦淖尔", "乌兰察布","乌兰浩特"];    
        var guangxi = ["南宁", "柳州", "桂林", "梧州", "北海", "防城港", "钦州", "贵港", "玉林", "百色", "贺州", "河池", "崇左"];    
        var xizang = ["拉萨", "昌都地区", "林芝地区", "山南地区", "日喀则地区", "那曲地区", "阿里地区"];    
        var ningxia = ["银川", "石嘴山", "吴忠", "固原", "中卫"];    
        var hainan = ["海口", "三亚"];    
       var xianggang = ["中西区", "湾仔区", "东区", "南区", "九龙城区", "油尖旺区", "观塘区", "黄大仙区", "深水埗区", "北区", "大埔区", "沙田区", "西贡区", "元朗区", "屯门区", "荃湾区", "葵青区", "离岛区"];    
        var taiwan = ["台北", "高雄", "基隆", "台中", "台南", "新竹", "嘉义"];    
        var aomeng = ["澳门半岛", "氹仔岛", "路环岛"];    
    
        //页面加载方法    
        $(function () {    
            //设置省份数据    
            setProvince();    
        });    
    
        //设置省份数据    
        function setProvince() {    
            //给省份下拉列表赋值    
            var option, modelVal;    
            var $sel = $("#selProvince");    
    
            //获取对应省份城市    
            for (var i = 0, len = province.length; i < len; i++) {    
                modelVal = province[i];    
                option = "<option value='" + modelVal + "'>" + modelVal + "</option>";    
    
                //添加到 select 元素中    
                $sel.append(option);    
            }    
    
            //调用change事件，初始城市信息    
             
        }    
		//根据选中的省份获取对应的城市    
        function setCity(provinec) {    
            var $city = $("#selCity");    
            var proCity, option, modelVal;    
    
            //通过省份名称，获取省份对应城市的数组名    
            switch (provinec) {    
                case "北京":    
                    proCity = beijing;    
                    break;    
                case "上海":    
                    proCity = shanghai;    
                    break;    
                case "天津":    
                    proCity = tianjing;    
                    break;    
                case "重庆":    
                    proCity = chongqing;    
                    break;    
                case "浙江":    
                    proCity = zhejiang;    
                    break;    
                case "江苏":    
                    proCity = jiangsu;    
                    break;    
                case "广东":    
                    proCity = guangdong;    
                    break;    
                case "福建":    
                    proCity = fujiang;    
                    break;    
                case "湖南":    
                    proCity = hunan;    
                    break;    
                case "湖北":    
                    proCity = hubei;    
                    break;    
                case "辽宁":    
                    proCity = liaoning;    
                    break;    
                case "吉林":    
                    proCity = jilin;    
                    break;    
                case "黑龙江":    
                    proCity = heilongjiang;    
                    break;    
                case "河北":    
                    proCity = hebei;    
                    break;    
                case "河南":    
                    proCity = henan;    
                    break;    
                case "山东":    
                    proCity = shandong;    
                    break;    
                case "陕西":    
                    proCity = shangxi;    
                    break;    
                case "甘肃":    
                    proCity = gansu;    
                    break;    
                case "新疆":    
                    proCity = xinjiang;    
                    break;    
                case "青海":    
                    proCity = qinghai;    
                    break;    
                case "山西":    
                    proCity = shanxi;    
                    break;    
                case "四川":    
                    proCity = sichuan;    
                    break;    
                case "贵州":    
                    proCity = guizhou;    
                    break;    
                case "安徽":    
                    proCity = anhui;    
                    break;    
                case "江西":    
                    proCity = jiangxi;    
                    break;    
                case "云南":    
                    proCity = yunnan;    
                    break;    
                case "内蒙古":    
                    proCity = neimenggu;    
                    break;    
                case "西藏":    
                    proCity = xizang;    
                    break;    
                case "广西":    
                    proCity = guangxi;    
                    break;    
                case "":    
                    proCity = xizang;    
                    break;    
                case "宁夏":    
                    proCity = ningxia;    
                    break;    
                case "海南":    
                    proCity = hainan;    
                    break;    
                case "香港":    
                    proCity = xianggang;    
                    break;    
                case "澳门":    
                    proCity = aomeng;    
                    break;    
                case "台湾":    
                    proCity = taiwan;    
                    break;    
            }    
    
            //先重置之前绑定的值    
            $city.empty();    
    
            //设置对应省份的城市    
            for (var i = 0, len = proCity.length; i < len; i++) {    
                modelVal = proCity[i];    
                option = "<option value='" + modelVal + "'>" + modelVal + "</option>";    
    
                //添加    
                $city.append(option);    
            }    
    
            
        }
		
		//省份选中事件    
        function provinceChange() {    
            var $pro = $("#selProvince");    
            setCity($pro.val());    
        } 
	</script>
	<script type="text/javascript">
        $(function () {

            // toggle form between inline and normal inputs
            var $buttons = $(".toggle-inputs button");
            var $form = $("form.new_user_form");

            $buttons.click(function () {
                var mode = $(this).data("input");
                $buttons.removeClass("active");
                $(this).addClass("active");

                if (mode === "inline") {
                    $form.addClass("inline-input");
                } else {
                    $form.removeClass("inline-input");
                }
            });
        });
    </script>


    </div>
    <script type="text/javascript">
    	var wid = $(window).height();
    	document.writeln('<div id="popupLayer" style="position:absolute;z-index:2;width:100%;height:'+wid+'px;left:0;top:0;opacity:0.3;filter:Alpha(opacity=30);background:#000;display: none;"></div>');
    </script>
</body>
</html>
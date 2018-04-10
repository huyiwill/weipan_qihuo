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
    <link rel="stylesheet" href="/Public/Admin/css/compiled/article.css" type="text/css" media="screen" />
    <div class="container-fluid">
        <div id="pad-wrapper" class="users-list">
            <div class="row-fluid header">
                <h3>文章列表</h3>
                <div class="span8 pull-right">
                    <input type="text" class="span6 search" placeholder="请输入新闻名称查找..." id="top_search"/>
                    
                    <!-- custom popup filter -->
                    <!-- styles are located in css/elements.css -->
                    <!-- script that enables this dropdown is located in js/theme.js -->
                   
                </div>
            </div>
			<div class="row-fluid header head2">
				<a href="<?php echo U('News/newsadd');?>" class="btn-flat success">
					添加文章
				</a>
				<a href="<?php echo U('News/typelist');?>" class="btn-flat success">
					栏目管理
				</a>
				<a href="<?php echo U('News/typelist');?>" class="btn-flat success">
					我的文档
				</a>
			</div>
            <!-- Users table -->
            <form  action="<?php echo U('News/newsdel');?>" method="post" name="del">
            <div class="row-fluid table">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th class="span1 sortable">
                                编号
                            </th>
							<th class="span1 sortable">
                                选择
                            </th>
                            <th class="span5 sortable">
                                <span class="line"></span>文章标题
                            </th>
                            <th class="span2 sortable">
                                <span class="line"></span>更新时间
                            </th>
							<th class="span2 sortable">
                                <span class="line"></span>所属栏目
                            </th>
							<!--<th class="span2 sortable">
                                <span class="line"></span>点击
                            </th>
							<th class="span2 sortable">
                                <span class="line"></span>发布人
                            </th>-->
							<th class="span2 sortable">
                                <span class="line"></span>操作
                            </th>
                        </tr>
                    </thead>
                    <tbody id="ajaxback">
                    <?php if(is_array($newlist)): $i = 0; $__LIST__ = $newlist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$nl): $mod = ($i % 2 );++$i;?><!-- row -->
                    <tr class="first">
						<td>
                            <?php echo ($nl['nid']); ?>
                        </td>
						<td>
                            <input type="checkbox" name="nid[]" value="<?php echo ($nl['nid']); ?>">
                        </td>
                        <td>
                            <a href="<?php echo U('News/newsedit',array('nid'=>$nl['nid']));?>" class="name"><?php echo ($nl['ntitle']); ?></a>
                        </td>
                        <td>
                            <?php echo (date('Y-m-d',$nl['ntime'])); ?>
                        </td>
                        <td>
							<a href="<?php echo U('News/tedit',array('pid'=>$nl['fid']));?>"><?php echo ($nl['fclass']); ?></a>
                        </td>
                        <td>
							<ul class="actions">
								<li><a href="<?php echo U('News/newsedit',array('nid'=>$nl['nid']));?>"><i class="table-edit"></i></a></li>
								<li><i class="table-settings"></i></li>
								<li class="last"><a href="<?php echo U('News/newsdel',array('nid'=>$nl['nid']));?>" onclick="if(confirm('确定要删除吗?')){return true;}else{return false;}"><i class="table-delete"></i></a></li>
							</ul>
                        </td>
                    </tr><?php endforeach; endif; else: echo "" ;endif; ?>                    
                    </tbody>
                </table>
				<div class="qjcz">
					<a id="checkall">全选</a>
					<a id="checkallno">全不选</a>
					<a id="check_revsern">反选</a>
					<input type="submit" id='sbtn' onclick ="return valid();" value="批量删除">
				</div>
            </div>
            </form>
            <div class="pagination pull-right">
                <ul>
                	<?php echo ($page); ?>
                </ul>
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
	var eqli = $("#dashboard-menu").children().eq(1);
	eqli.attr('class','active');
	$("#dashboard-menu .active .submenu").css("display","block");
	
	
	$("#checkall").click(function(){
        $("input[name='nid[]']").each(function(){
            this.checked = true;
        });
    });
     
    $("#checkallno").click(function(){
        $("input[name='nid[]']").each(function(){
            this.checked = false;
        })
    });
     
    $("#check_revsern").click(function(){
        $("input[name='nid[]']").each(function(){
            if (this.checked) {
                this.checked = false;
            }
            else {
                this.checked = true;
            }
        });
    });
    
    $("input[type='checkbox']").click(function(){
    	$("#sbtn").attr("onclick","if(confirm('确定要删除吗?请谨慎操作')){return true;}else{return false;}");
    })
});
function valid(){
	  var check = "";
      $("input:checkbox[name='nid[]']:checked").each(function() {
			check += $(this).val();
	  });
      if(check==''){
      	alert('请选择要删除的文章');
      	return false;
      	}else{ 
      	return true;
      }	
};
//搜索结果，ajax返回搜索框搜索结果
$('#top_search').keyup(function(){
	keywords = $(this).val();
	$.ajax({  
	    type: "post",  
	    url: "<?php echo U('News/newslist?step=search');?>",    
	    data:{"keywords":keywords},
	    success: function(data) {
	    	if(data=="null"){
            	//$("#loading").hide();
            	$("#ajaxback").html('<tr class="first"><td colspan="13">没有找到结果，请重新输入！</tr></td>');
            }else{
		    	$nlist = "";
	            $.each(data,function(no,items){
	            	$nlist += '<tr class="first">';
	            	$nlist += '<td>'+items.nid+'</td>';
	            	$nlist += '<td><input type="checkbox" name="nid[]" value="'+items.nid+'"></td>';
	            	$nlist += '<td><a href="<?php echo U('News/newsedit');?>?pid='+items.nid+'" class="name">'+items.ntitle+'</a></td>';
	            	$nlist += '<td>'+items.ntime+'</td>';
	            	$nlist += '<td><a href="<?php echo U('News/tedit');?>?fid='+items.fid+'">'+items.fclass+'</a></td><td>';
	            	$nlist += '<ul class="actions">';
	            	$nlist += '<li><a href="<?php echo U('News/newsedit');?>?nid='+items.nid+'"><i class="table-edit"></i></a></li>';
					$nlist += '<li><i class="table-settings"></i></li>';
					$nlist += '<li class="last"><a href="<?php echo U('News/newsdel');?>?nid='+items.nid+'" onclick="if(confirm(\'确定要删除吗?\')){return true;}else{return false;}"><i class="table-delete"></i></a></li>';
	            	$nlist += '</ul></td></tr>';
	            })
	            $("#ajaxback").html($nlist);
            }
	    },
	    error: function(data) {  
            console.log(data);
        }
	  })
})
</script>

    </div>
    <script type="text/javascript">
    	var wid = $(window).height();
    	document.writeln('<div id="popupLayer" style="position:absolute;z-index:2;width:100%;height:'+wid+'px;left:0;top:0;opacity:0.3;filter:Alpha(opacity=30);background:#000;display: none;"></div>');
    </script>
</body>
</html>
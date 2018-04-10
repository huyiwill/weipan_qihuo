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
<link rel="stylesheet" href="/Public/Home/css/account.css">
<script id="G--xyscore-load" type="text/javascript" charset="utf-8" async="" src="/Public/Home/js/xyscore_main.js"></script>

<div class="wrap">
  <!-- <div class="index" style="min-height: 1114px;"> -->
  <div class="index">
  <div class="txss">
      <div class="tx"><?php if($suer["portrait"] == ''): ?><img src="/Public/Home/images/pic.gif"><?php else: ?><img src="<?php echo ($suer["portrait"]); ?>"><?php endif; ?></div>
        <div class="gezh">
          <div class="grzh"><span>个人账户（元）</span><p class="a-d"><?php echo ($result["balance"]); ?></p></div>
          <div class="cztz"><a href="<?php echo U('User/logout');?>" class="acc-btn red">退出</a><a href="<?php echo U('User/recharge');?>" class="acc-btn red">充值</a> <a href="<?php echo U('User/cash');?>" class="acc-btn blue">提现</a></div>
        </div>
        <div class="clearfix"></div>
    </div>
    <div class="info-box clearfix"> <i class="a-3"></i>
      <div class="info-detail clearfix"> <a href="<?php echo U('Detailed/dtrading');?>" class="acc-l">交易明细</a> </div>
    </div>
    <div class="info-box clearfix"> <i class="a-4"></i>
      <div class="info-detail clearfix"> <a href="<?php echo U('Detailed/drevenue');?>" class="acc-l">收支明细</a> </div>
    </div>
    <div class="info-box clearfix"> <i class="a-1"></i>
      <div class="info-detail clearfix"> <a href="<?php echo U('User/experiencelist');?>" class="acc-l">我的体验券</a> </div>
    </div>
    <div class="info-box clearfix"> <i class="a-6"></i>
    <?php if(($suer["agenttype"] == 0) OR ($suer["agenttype"] == 1)): ?><div class="info-detail clearfix"> <a href="<?php echo U('Broker/applybroker');?>" class="acc-l">申请经纪人</a> </div>
    <?php else: ?>
         <div class="info-detail clearfix" style="display:block"> <a href="<?php echo U('Broker/brokerinfo');?>" class="acc-l">经纪人中心</a></div><?php endif; ?> 
    </div>
    <div class="info-box clearfix"> <i class="a-5"></i>
      <div class="info-detail clearfix"> <a href="<?php echo U('User/edituser');?>" class="acc-l">修改登陆密码</a> </div>
    </div>
    <div class="info-box clearfix"> <i class="a-2"></i>
      <div class="info-detail clearfix"> <a href="<?php echo U('User/edituserb');?>" class="acc-l">修改交易密码</a> </div>
    </div>
  </div>
</div>
<script src="/Public/Home/js/jquery-2.1.1.min.js"></script>
<script src="/Public/Home/js/script.js"></script>
<script type="text/javascript" charset="utf-8" src="/Public/Home/js/sea.js" async=""></script>

 </div>     
</body>
</html>
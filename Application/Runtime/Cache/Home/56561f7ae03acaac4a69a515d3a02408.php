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
<link rel="stylesheet" href="/Public/Home/css/ticket.css">
<link rel="stylesheet" type="text/css" href="/Public/Home/css/phb.css" />
<script id="G--xyscore-load" type="text/javascript" charset="utf-8" async="" src="/Public/Home/js/xyscore_main.js"></script>
<div class="main"> 
  <div class="phb_div">
      <div class="phb">
          <ul>
             <?php if(is_array($lists)): $k = 0; $__LIST__ = $lists;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($k % 2 );++$k;?><li>
                  <div class="con_ph">
                         <?php if($k < 4): ?><div class="xh_div qsg"><?php echo ($k); ?></div>
                            <?php else: ?>
                           <div class="xh_div "><?php echo ($k); ?></div><?php endif; ?>
                        <div class="tx_div">
                          <?php if($vo["portrait"] == ''): ?><img src="/Public/Home/images/avatar.jpg"/>
                              <?php else: ?>
                             <img src="<?php echo ($vo["portrait"]); ?>"/><?php endif; ?>
                          
                        </div>
                        <div class="rm_div"><?php echo ($vo["name"]); ?></div>
                        <div class="jq_div qsg">￥<?php echo ($vo["pric"]); ?></div>
                    </div>
                </li><?php endforeach; endif; else: echo "" ;endif; ?> 
            </ul>
        </div>
    </div>
</div>
     <!--  <div class="pagelist"><?php echo ($page); ?></div> -->

<style type="text/css">
  .pagelist{ text-align:center; background:#f1f1f1; padding:7px 0;}
.pagelist a{ margin:0 5px; border:#6185a2 solid 1px; display:inline-block; padding:2px 6px 1px; line-height:16px; background:#fff; color:#6185a2;}
.pagelist span{ margin:0 5px; border:#6185a2 solid 1px; display:inline-block; padding:2px 6px 1px; line-height:16px; color:#6185a2; color:#fff; background:#6185a2;}
</style>
<script src="/Public/Home/js/jquery-2.1.1.min.js"></script>
<script src="/Public/Home/js/script.js"></script>
<script src="/Public/Home/js/getJuan.js"></script>
<script type="text/javascript" charset="utf-8" src="/Public/Home/js/sea.js" async=""></script>

 </div>     
</body>
</html>
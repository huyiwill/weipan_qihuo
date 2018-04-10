<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<meta name="format-detection" content="telephone=no">
<meta name="format-detection" content="email=no">
<title>国网微交易中心</title>
<link rel="stylesheet" href="/Public/Home/css/global.css">
<link rel="stylesheet" href="/Public/Home/css/charge.css">
<script id="G--xyscore-load" type="text/javascript" charset="utf-8" async src="/Public/Home/js/xyscore_main.js"></script>
</head>
<body>
<div class="wrap">
  <div class="index" style="min-height: 1114px;">
    <header class="list-head">
      <nav class="list-nav clearfix"> <a href="javascript:history.go(-1)" class="list-back"></a>
        <h3 class="list-title">账户充值</h3>
      </nav>
    </header>
    <ul class="account-info">
      <li>账户ID：<?php echo ($suer['username']); ?></li>
      <li>余额：<span><?php echo ($result['balance']); ?></span><i>元</i></li>
    </ul>
    <?php if($style == '1'): ?><form id="moneyCharge1" class="" method="post" action="<?php echo U('User/recharge');?>">
          <p class="c-line clearfix" >
            <label class="fl">充值</label>
            <em>元</em>
            <input type="text" class="c-input" maxlength="6" placeholder="10" value="100" name="tfee1">
           </p>
          <input id="order_id" type="hidden"  name="order_id" value="<?php echo ($balc["bpno"]); ?>">
          <input type="submit" class="f-sub" value="立即充值">
          </form>
     <?php else: ?>
         <form id="moneyCharge2" class="" method="post" action="http://www.caomengde.cn/Extend/weipay/jsapi.php">
         <p class="c-line clearfix" >
          <label class="fl">充值</label>
          <em>元</em>
          <input type="text" class="c-input" maxlength="6" placeholder="10" value="<?php echo ($balc["bpprice"]); ?>" name="tfee">
         </p>
        <input id="order_id" type="hidden"  name="order_id" value="<?php echo ($balc["bptime"]); ?>">
        <input type="submit" class="f-sub" value="确定订单页面">
        </form><?php endif; ?>
  </div>
 
</div>
<script src="/Public/Home/js/jquery-2.1.1.min.js"></script>
<script src="/Public/Home/js/script.js"></script>
<script type="text/javascript">
$(function(){  
  if ($('#order_id').val()!='') {
       $('#moneyCharge2').submit();
    };
});
</script>
<script type="text/javascript" charset="utf-8" src="/Public/Home/js/sea.js" async></script>
</body>
</html>
<?php

//america
ini_set('date.timezone','Asia/Shanghai');
//error_reporting(E_ERROR);
require_once "lib/WxPay.Api.php";
require_once "WxPay.NativePay.php";

//模式一
/**
 * 流程：
 * 1、组装包含支付信息的url，生成二维码
 * 2、用户扫描二维码，进行支付
 * 3、确定支付之后，微信服务器会回调预先配置的回调地址，在【微信开放平台-微信支付-支付配置】中进行配置
 * 4、在接到回调通知之后，用户进行统一下单支付，并返回支付信息以完成支付（见：native_notify.php）
 * 5、支付完成之后，微信服务器会通知支付成功
 * 6、在支付成功通知中需要查单确认是否真正支付成功（见：notify.php）
 */
 
 
//模式二
/**
 * 流程：
 * 1、调用统一下单，取得code_url，生成二维码
 * 2、用户扫描二维码，进行支付
 * 3、支付完成之后，微信服务器会通知支付成功
 * 4、在支付成功通知中需要查单确认是否真正支付成功（见：notify.php）
 *
 */
  

/*echo WxPayConfig::MCHID.date("YmdHis");

exit;*/
$notify = new NativePay();
$product_id = "123456789";
$body = $_POST['body'];
$attach = "test";
$trade_no = WxPayConfig::MCHID.date('YmdHis',$_POST['orderdate']);//$_POST['order_id'];
$price =  $_POST['fee'];
$tag = $_POST['tag'];

$input = new WxPayUnifiedOrder();
$input->SetBody($body);
$input->SetAttach($attach);
$input->SetOut_trade_no($trade_no);
$input->SetTotal_fee($price);
$input->SetTime_start(date("YmdHis"));
$input->SetTime_expire(date("YmdHis", time() + 600));
$input->SetGoods_tag($tag);
$input->SetNotify_url("http://www.caomengde.cn/Extend/weipay/notify.php");
$input->SetTrade_type("NATIVE");
$input->SetProduct_id($product_id);

$result = $notify->GetPayUrl($input);
$url2 = $result["code_url"];

//这里 定时检查订单是否完成
//echo $trade_no;
$wx_order_query = new WxPayApi();
$ret = $wx_order_query->orderQuery($input);

?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta charset="utf-8">
<title>微信支付</title>
<link rel="stylesheet" type="text/css" href="images/css.css">
<base target="_self" />
<script type="application/javascript" src="js/jquery.min.js" ></script>

<script  language="javascript">
function notify(){
	$.post("order.php", { "trade_no":"<?php echo $trade_no; ?>"}, function (data) {
        if(data == 'SUCCESS'){
		    $.post("<?php echo $_POST['return_url'] ;?>", { "payment_id":"<?php echo $_POST['payment_id'] ?>","order_id":"<?php echo $_POST['order_id'] ?>"}, function (ret) {
				
			if(ret == 1)
			{
				$('#ok').css('background','#445f85 url(images/wx_5.png) no-repeat 0 0px');
				$('#pay_info').html('支付成功！ 窗口五秒钟自动关闭');
				setTimeout(function(){ //IE6、7不会提示关闭
					window.opener=null;
					window.open("","_self");
					window.close();
				}, 3000);
				//window.close();
			}	
			
			});
			
			// window.close();
		}else if (data == "0") {
			$('#pay_info').html('没有找到支付订单');
            
        }else{
			
			//$('#pay_info').html('没有找到支付订单，<br/>请联系客服处理');
			//$('#pay_info').html(data+'...');
			//console.dir(data);	
		}
    })

}
setInterval("notify()",3000);

</script>
</head>
<body>
<div class="header"><img src="images/wx_2.png" /></div>

<div class="wx_main">
	<div class="wx_m1">
    	<p class="p1"></p>
        <p class="p2"></p>
    </div>
    
    <div class="wx_m2">
    	<img class="p1" src="http://paysdk.weixin.qq.com/example/qrcode.php?data=<?php echo urlencode($url2);?>" width="301" height="301" />
        <img class="p2" src="images/wx_6.png" width="282" height="408" />
        <div class="p3">
        	<i id="ok" ></i>
        	<p id="pay_info">请使用微信扫描<br>二维码以完成支付</p>
            <div class="clear"></div>
    	</div>
    </div>
    
    <div class="wx_m3">
    	<p></p>
    	<img src="images/wx_7.png" width="60" height="60" /> 
    </div>
    
    <p class="wx_m4"><span>￥</span><?php  echo floatval($price)/100 ;?> </p>
    
    <div class="wx_m5">    	
		<p class="p1"><?php echo $_POST['body']; ?></p>
    	<p class="p2">中航订单：<?php echo $_POST['order_id']; ?></p>
        
        <ul class="p3">
        	<li><span>交易单号</span><p><?php echo $_POST['payment_id']; ?></p><div class="clear"></div></li>
            <li><span>创建时间</span><p><?php echo date('Y-m-d',$_POST['orderdate']); ?></p><div class="clear"></div></li>
        </ul> 
    </div>
    
    <p class="wx_m6"><span>客服</span>029 - ********</p>
</div>

<div class="bottom">
	<p><a href="#">关于中航</a><a href="#">服务条款</a><a href="#">反馈建议</a></p>
	<p>© 1998 - 2014  Inc. All reserved.</p>
</div>
</body>
</html>

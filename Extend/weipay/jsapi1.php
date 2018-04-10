<?php 

ini_set('date.timezone','Asia/Shanghai');
//error_reporting(E_ERROR);
require_once "lib/WxPay.Api.php";
require_once "WxPay.JsApiPay.php";
require_once 'log.php';

//初始化日志

$logHandler= new CLogFileHandler("logs/".date('Y-m-d').'.log');
$log = Log::Init($logHandler, 15);

//打印输出数组信息
function printf_info($data)
{
    foreach($data as $key=>$value){
        echo "<font color='#00ff55;'>$key</font> : $value <br/>";
    }
}



//①、获取用户openid
$tools = new JsApiPay();

$str =  http_build_query($_REQUEST);

$openId = $tools->GetOpenid($str);



$product_id = "123456789";
$body = $_REQUEST['body'];
$attach = "test";
$trade_no = WxPayConfig::MCHID.date('YmdHis',$_POST['orderdate']);//$_POST['order_id'];
$price =  $_REQUEST['tfee']*100;
$tag = $_REQUEST['tag'];



//②、统一下单
$input = new WxPayUnifiedOrder();
$input->SetBody("充值");
$input->SetAttach("test");
$input->SetOut_trade_no(WxPayConfig::MCHID.date("YmdHis"));
$input->SetTotal_fee($price);
$input->SetTime_start(date("YmdHis"));
$input->SetTime_expire(date("YmdHis", time() + 600));
$input->SetGoods_tag("test");
$input->SetNotify_url("http://www.caomengde.cn/Extend/weipay/notify.php");
$input->SetTrade_type("JSAPI");
$input->SetOpenid($openId);
$order = WxPayApi::unifiedOrder($input);
// echo '<font color="#000"><b>订单支付信息</b></font><br/>';

$jsApiParameters = $tools->GetJsApiParameters($order);


//$SetOut_trade_no = $input->GetOut_trade_no();

//获取共享收货地址js函数参数
//$editAddress = $tools->GetEditAddressParameters();

//③、在支持成功回调通知中处理成功之后的事宜，见 notify.php
/**
 * 注意：
 * 1、当你的回调地址不可访问的时候，回调通知会失败，可以通过查询订单来确认支付是否成功
 * 2、jsapi支付时需要填入用户openid，WxPay.JsApiPay.php中有获取openid流程 （文档可以参考微信公众平台“网页授权接口”，
 * 参考http://mp.weixin.qq.com/wiki/17/c0f37d5704f0b64713d5d2c37b468d75.html）
 */
?>

<html>
<head>
    <meta http-equiv="content-type" content="text/html;charset=utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/> 
    <title>微信支付</title>
    <script type="application/javascript" src="js/jquery.min.js" ></script>
    <script type="text/javascript">
	//调用微信JS api 支付
	function jsApiCall()
	{
		WeixinJSBridge.invoke(
			'getBrandWCPayRequest',
			<?php echo $jsApiParameters; ?>,
			function(res){
				WeixinJSBridge.log(res.err_msg);
				//alert(res.err_msg);
				if(res.err_msg=="get_brand_wcpay_request:ok"){
					successjs();
					//check_order();
				}
			}
		);
	}
	function check_order()
	{
				
		$.post("/weipay/check_order.php", { "trade_id":"<?php echo $SetOut_trade_no ?>","fee":"<?php echo $price ?>"}, function (ret) {		
			var st = ret;
		    alert(st+':'+parseInt('2'));		
		    alert(st == 2);
			if(parseFloat(rs) == parseFloat('2'))
			{
			   successjs();	
			}else{
				return false;	
			}
		});
		
			 
	}
	function successjs()
	{

		alert("<?php echo $_REQUEST['order_id'] ;?>");

		// $.post("<?php echo $_REQUEST['return_url'] ;?>", { "payment_id":"<?php echo $_REQUEST['payment_id'] ?>","order_id":"<?php echo $_REQUEST['order_id'] ?>"}, function (ret) {	
		//      alert(ret);			
		// 	if(ret == 2)
		// 	{
			  	window.location.href="http://www.caomengde.cn/index.php/Home/User/notify/?order_id=<?php echo $_REQUEST['order_id'] ?>";
		// 	}
		// });

	}
			 		 
	function callpay()
	{

		if (typeof WeixinJSBridge == "undefined"){
		    if( document.addEventListener ){
		        document.addEventListener('WeixinJSBridgeReady', jsApiCall, false);
		    }else if (document.attachEvent){
		        document.attachEvent('WeixinJSBridgeReady', jsApiCall); 
		        document.attachEvent('onWeixinJSBridgeReady', jsApiCall);
		    }
		}else{
		    jsApiCall();
		}

	}
	//获取共享地址
	/*function editAddress()
	{
		WeixinJSBridge.invoke(
			'editAddress',
			<?php echo $editAddress; ?>,
			function(res){
				var value1 = res.proviceFirstStageName;
				var value2 = res.addressCitySecondStageName;
				var value3 = res.addressCountiesThirdStageName;
				var value4 = res.addressDetailInfo;
				var tel = res.telNumber;
				
				alert(value1 + value2 + value3 + value4 + ":" + tel);
			}
		);
	}*/
	
	window.onload = function(){
		if (typeof WeixinJSBridge == "undefined"){
		    if( document.addEventListener ){
		  //      document.addEventListener('WeixinJSBridgeReady', editAddress, false);
		    }else if (document.attachEvent){
		   //     document.attachEvent('WeixinJSBridgeReady', editAddress); 
		  //      document.attachEvent('onWeixinJSBridgeReady', editAddress);
		    }
		}else{
		//	editAddress();
		}
	};
	
	</script>
</head>
<body onLoad="callpay()">
    <br/>
    <font color="#9ACD32"><b>该笔订单支付金额为<span style="color:#f00;font-size:50px"><?php  echo floatval($price)/100 ;?></span>元</b></font><br/><br/>
    <div class="wx_m5">    	
	   <p class="p2">商城订单：<?php echo $_REQUEST['order_id']; ?></p>
       <p class="p2">创建时间: <?php echo date('Y-m-d H:i:s',time()); ?></p>        
    </div>
	<div align="center">
		<button style="width:210px; height:50px; border-radius: 15px;background-color:#FE6714; border:0px #FE6714 solid; cursor: pointer;  color:white;  font-size:16px;" type="button" id="pay_info" onClick="callpay()">立即支付</button>
	</div>
</body>

</html>
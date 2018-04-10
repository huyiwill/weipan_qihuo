<?php

ini_set('date.timezone','Asia/Shanghai');
error_reporting(E_ERROR);

require_once "lib/WxPay.Api.php";
require_once "notify.php";
$notify = new PayNotifyCallBack();

$trade_id = $_POST['trade_id'];


$fee = $_POST['fee'];		
$ret = $notify->Queryorder('',$trade_id);

if($fee == $ret['total_fee']){
	echo 2;
}else{
	echo $trade_id;	
}

?>
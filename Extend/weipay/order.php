<?php
ini_set('date.timezone','Asia/Shanghai');
error_reporting(E_ERROR);

require_once "lib/WxPay.Api.php";
require_once 'lib/WxPay.Notify.php';
require_once 'log.php';

//初始化日志
$logHandler= new CLogFileHandler("logs/".date('Y-m-d').'.log');
$log = Log::Init($logHandler, 15);

class PayNotify extends WxPayNotify
{
	//查询订单
	public function Queryorder($transaction_id,$out_trade_no = '')
	{
		$input = new WxPayOrderQuery();
		if($transaction_id){
			$input->SetTransaction_id($transaction_id);
		}
		
		if($out_trade_no){
			$input->SetOut_trade_no($out_trade_no);
		}
		$result = WxPayApi::orderQuery($input);
		//Log::DEBUG("query:" . json_encode($result));
		if(array_key_exists("return_code", $result)
			&& array_key_exists("result_code", $result)
			&& $result["return_code"] == "SUCCESS"
			&& $result["result_code"] == "SUCCESS")
		{
			return $result;//true;
		}
		return false;
	}
	
	//重写回调处理函数
	public function NotifyProcess($data, &$msg)
	{
		Log::DEBUG("call back:" . json_encode($data));
		$notfiyOutput = array();
		
		if(!array_key_exists("transaction_id", $data)){
			$msg = "输入参数不正确";
			return false;
		}
		//查询订单，判断订单真实性
		if(!$this->Queryorder($data["transaction_id"])){
			$msg = "订单查询失败";
			return false;
		}
		return true;
	}
}


$notify = new PayNotify();
$transaction_id = $_POST['trade_no'];

$ret = $notify->Queryorder('',$transaction_id);


if($ret){

	if($ret['trade_state'] == 'SUCCESS'){
		echo 'SUCCESS';
	}else{
		echo $ret['trade_state_desc'];
	}
}else{
	echo '0';	
}
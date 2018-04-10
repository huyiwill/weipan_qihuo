<?php

namespace Admin\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index()
    {
    	header("Content-type: text/html; charset=utf-8");
    	$user= A('Admin/User');
		$user->checklogin();
		
		$tq=C('DB_PREFIX');
    	$user = D("userinfo");
		$order = D("order");
		$product = D("productinfo");
		$account = D("accountinfo");
		
    	//访问量
		
    	//用户数量
    	$userCount = $user->where('ustatus=0')->count();
		
    	//今日订单数量，最近7天订单数量，最近30天交易总金额，订单信息
    	$orderDay = $order->where("date_format(from_UNIXTIME(selltime),'%Y-%m-%d')>='".date('Y-m-d')."'")->count();
		$sevenDay = date('Y-m-d',strtotime("-7 day"));
		$orderCount = $order->where("date_format(from_UNIXTIME(selltime),'%Y-%m-%d')>='".$sevenDay."'")->count();
		$last_day = date('Y-m-d',strtotime("-30 day"));
		$result = $order->where("date_format(from_UNIXTIME(selltime),'%Y-%m-%d')>='".$last_day."'")->select();
		for($i=0;$i<count($result);$i++){
			$total += ($result[$i]['onumber']*$result[$i]['buyprice']);
		}
		//最近30天交易总金额
		$total = number_format($total);
		
		$orders = $order->table('wp_userinfo u,wp_order o,wp_productinfo p')->where('u.uid=o.uid and o.pid=p.pid')->field('u.uid as uid,u.username as username,o.buytime as buytime,p.pid as pid,p.ptitle as ptitle,p.uprice as uprice,o.onumber as onumber,o.ostyle as ostyle,o.ostaus as ostaus,o.fee as fee,o.orderno as orderno')->order('o.oid desc')->limit(5)->select();
		
		
		//var_dump($orders[1]['pid']);
		//die;
		//产品信息展示
		$plist = $product->order('pid desc')->limit(5)->select();
		
		//产品交易数量
//		foreach($orders as $k => $v){
//			foreach($plist as $key => $value){
//				if($v['pid']==$value['pid']){
//					$onumber = $order->where('pid='.$value['pid'])->field('oid,onumber')->select();
//
//					//$plist['onumber'] = intval($onumber);
//				}else{
//					$plist['onumber'] = 0;
//				}	
//			}
//			$onum = intval($onumber[$k]['onumber']);

//			
//			$plist[$k]['onumber'] = intval($onumber);
//		}
		
		//var_dump($plist);
		$this->assign('orderDay',$orderDay);
    	$this->assign('userCount',$userCount);
		$this->assign('orderCount',$orderCount);
		$this->assign('total',$total);
		$this->assign('orders',$orders);
		$this->assign('plist',$plist);
		$this->display();
	}
	public function price(){
		 $diancha=$this->selectcid(1);
         $source=file_get_contents("xh/you.txt");
         $msg = explode(',',$source);
         $myprice[0] = round(str_replace('price:', '',str_replace('"','',$msg[1])));//最新
         $myprice[0] =$myprice[0]*$diancha['myat']*$diancha['myatjia'];
         return $myprice[0];
    }
	public function byprice(){
		 $diancha=$this->selectcid(2);
         $source=file_get_contents("xh/baiyin.txt");
         $msg = explode(',',$source);
         $myprice[0] = round(str_replace('price:', '',str_replace('"','',$msg[1])));//最新
          $myprice[0] =$myprice[0]*$diancha['myat']*$diancha['myatjia'];
         return $myprice[0];
    }
	public function toprice(){
		 $diancha=$this->selectcid(3);
         $source=file_get_contents("xh/tong.txt");
         $msg = explode(',',$source);
         $myprice[0] = round(str_replace('price:', '',str_replace('"','',$msg[1])));//最新
          $myprice[0] =$myprice[0]*$diancha['myat']*$diancha['myatjia'];
         return $myprice[0];
    }
	public function olist(){
		//获取所有没有平仓的订单
		$tq=C('DB_PREFIX');
		$orders = D('order');
		$jo = D('journal');
		$detailed = A('Home/Detailed');
		$orderno = $detailed->build_order_no();
		$field = $tq.'order.oid as oid,'.$tq.'order.buyprice as buyprice,'.$tq.'order.onumber as onumber,'.$tq.'productinfo.wave as wave,'.$tq.'order.endprofit as endprofit,'.$tq.'order.endloss as endloss,'.$tq.'catproduct.cid as cid,'.$tq.'productinfo.uprice as uprice,'.$tq.'order.uid as uid,'.$tq.'order.ptitle as ptitle,'.$tq.'order.pid as pid,'.$tq.'accountinfo.balance as balance,'.$tq.'userinfo.username as username,'.$tq.'order.ostyle as ostyle,'.$tq.'order.fee as fee,'.$tq.'catproduct.myat as myat';
		//$olist = $orders->where('ostaus=0')->select();
		$order=$orders->join($tq.'productinfo on '.$tq.'order.pid='.$tq.'productinfo.pid')
        ->join($tq.'catproduct on '.$tq.'productinfo.cid='.$tq.'catproduct.cid')->join($tq.'userinfo on '.$tq.'order.uid='.$tq.'userinfo.uid')->join($tq.'accountinfo on '.$tq.'order.uid='.$tq.'accountinfo.uid')->field($field)->where('ostaus=0')->select();
		//获取最新产品价格
		$yprice = $this->price();//油价
		$byprice = $this->byprice();//白银价
		$toprice = $this->toprice();//铜价
		//设置盈亏比，爆仓
		foreach($order as $k => $v){
			$uid = $order[$k]['uid'];					//用户id
			$pid = $order[$k]['pid'];					//产品id
			$uoid = $order[$k]['uoid'];					//上级用户id
			$balance = $order[$k]['balance'];			//账户余额
			$username = $order[$k]['username'];			//用户名
			$fee = $order[$k]['fee'];					//手续费
			$ptitle = $order[$k]['ptitle'];				//产品
			$endprofit = $order[$k]['endprofit'];		//止盈
			$endloss = $order[$k]['endloss'];			//止亏
			$buyprice = $order[$k]['buyprice'];			//买入价格
			$onumber = $order[$k]['onumber'];			//买入数量
			$cid = $order[$k]['cid'];					//产品分类id，用于区分产品现价，1代表油价、2代表白银、3代表铜
			$ostyle = $order[$k]['ostyle'];				//涨、跌，0代表涨、1代表跌
			$wave = $order[$k]['wave'];					//浮动
			$uprice = $order[$k]['uprice'];				//单价
			$oid = $order[$k]['oid'];					//订单id
			$myat = $order[$k]['myat'];					//波动，目前只有油的波动是100，其他的都是1
			$payprice = $onumber*$uprice;				//保障金
			$min_payprice = $payprice*0.3;				//最低限制
			if($ostyle==0){
				if($cid==1){
					$ploss = round(($yprice-$buyprice)*$onumber*$wave*$myat,2);			//盈亏资金	
				}elseif($cid==2){
					$ploss = round(($byprice-$buyprice)*$onumber*$wave*$myat,2);		//盈亏资金
				}else{
					$ploss = round(($toprice-$buyprice)*$onumber*$wave*$myat,2);		//盈亏资金
				}
			}else{
				if($cid==1){
					$ploss = round(($buyprice-$yprice)*$onumber*$wave*$myat,2);			//盈亏资金	
				}elseif($cid==2){
					$ploss = round(($buyprice-$byprice)*$onumber*$wave*$myat,2);		//盈亏资金
				}else{
					$ploss = round(($buyprice-$toprice)*$onumber*$wave*$myat,2);		//盈亏资金
				}
			}
			$percentage = round($ploss/($uprice*$onumber)*$myat,2);			//盈亏百分比
			$surplus = $payprice+$ploss;									//本单盈余	
			
			$myprice=M('accountinfo')->where('uid='.$uid)->find();
            $acco= M('accountinfo');
            $acco->uid=$uid;
            $acco->balance=$myprice['balance']+$surplus;
            $acco->save();
			/**
			 * 写入记录
			 * 爆仓记录
			 * */
			$jour['jno'] = $orderno;			
			$jour['uid'] = $uid;
			$jour['jtype'] = '爆仓';
			$jour['jtime'] = date(time());
			$jour['number'] = $onumber;
			$jour['remarks'] = $ptitle;
			$jour['balance'] = $balance+$surplus;
			$jour['jusername'] = $username;
			$jour['jostyle'] = $ostyle;
			$jour['juprice'] = $uprice;
			$jour['jfee'] = $fee;
			$jour['jbuyprice'] = $buyprice;
			if($cid==1){
				$jour['jsellprice'] = $yprice;	
			}elseif($cid==2){
				$jour['jsellprice'] = $byprice;
			}else{
				$jour['jsellprice'] = $toprice;
			}
			$jour['jaccess'] = $surplus;
			$jour['jploss'] = $ploss;
			$jour['oid'] = $oid;
			$jour['explain'] = '系统自动爆仓';
			
			/**
			 * 保障金亏空，自动平仓
			 * 按盈亏比判断是否爆仓
			 * */
			//判断盈余是否为0，小于0表示保证金已经亏空自动平仓
			if($surplus<=$min_payprice){				
				$orders->where('oid='.$oid)->setField(array('selltime'=>date(time()),'ostaus'=>'1','sellprice'=>$yprice,'ploss'=>$ploss));
				$jo->add($jour);
			}else{
				//涨，求盈亏以及盈亏百分比
				if($ostyle==0){
					//判断当前百分比，如果大于等于0，和止盈作比较
					if($percentage>=0){
						//如果止盈不为0，继续执行爆仓操作，否则不执行任何操作
						if($endprofit!=0){
							//比较当前盈亏百分比，如果大于设置盈亏百分比，爆仓立即平仓，如果超出设置百分比按照设置百分比盈利	
							if($percentage>=$endprofit){
								//平仓
								$orders->where('oid='.$oid)->setField(array('selltime'=>date(time()),'ostaus'=>'1','sellprice'=>$yprice,'ploss'=>$ploss));
								$jo->add($jour);
							}
						}	
					}else{
						//如果止亏不为0，继续执行，否则不执行任何操作
						if($endloss!=0){
							//比较当前盈亏百分比，如果大于设置盈亏百分比，爆仓立即平仓，如果超出设置百分比按照设置百分比盈利
							if(abs($percentage)>=$endloss){
								//平仓
								$orders->where('oid='.$oid)->setField(array('selltime'=>date(time()),'ostaus'=>'1','sellprice'=>$yprice,'ploss'=>$ploss));
								$jo->add($jour);
							}
						}
					}
				}else{
					//跌，求盈亏百分百
					//判断当前百分比，如果大于等于0，和止盈作比较
					if($percentage>=0){
						//如果止盈不为0，继续执行爆仓操作，否则不执行任何操作
						if($endprofit!=0){
							//比较当前盈亏百分比，如果大于设置盈亏百分比，爆仓立即平仓，如果超出设置百分比按照设置百分比盈利	
							if($percentage>=$endprofit){
								//平仓
								$orders->where('oid='.$oid)->setField(array('selltime'=>date(time()),'ostaus'=>'1','sellprice'=>$yprice,'ploss'=>$ploss));
								$jo->add($jour);
							}
						}	
					}else{
						//如果止亏不为0，继续执行，否则不执行任何操作
						if($endloss!=0){
							//比较当前盈亏百分比，如果大于设置盈亏百分比，爆仓立即平仓，如果超出设置百分比按照设置百分比盈利
							if(abs($percentage)>=$endloss){
								//平仓
								$orders->where('oid='.$oid)->setField(array('selltime'=>date(time()),'ostaus'=>'1','sellprice'=>$yprice,'ploss'=>$ploss));
								$jo->add($jour);
							}
						}
					}
				}
			}
		}
		
		
		//echo $orders->getLastSql();
		$this->assign('olist',$order);
		$this->display();
	}
		//调取分类的点差
    function selectcid($cid){
        $str=M('catproduct')->where('cid='.$cid)->find();
        return  $str;
    }
}
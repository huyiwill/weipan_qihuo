<?php
// 本类由系统自动生成，仅供测试用途
namespace Admin\Controller;
use Think\Controller;
class OrderController extends Controller {
    public function ocontent()
	{
		//判断用户是否登陆
		$user= A('Admin/User');
		$user->checklogin();
		$order = D('order');
		$users = D('userinfo');
		$binfo = D('bankinfo');
		$pinfo = D('productinfo');
		$manager = D('managerinfo');
		$account = D('accountinfo');
		//获取订单id
		$oid = I('get.oid');
		//查询订单数据基本信息
		$oinfo = $order->where('oid='.$oid)->find();		
		//客户信息
		$uinfo = $users->where('uid='.$oinfo['uid'])->find();
		//商品信息
		$goods = $pinfo->where('pid='.$oinfo['pid'])->find();
		//银行卡信息
		$bank = $binfo->where('uid='.$oinfo['uid'])->field('bnkmber')->find();
		//身份证信息
		$mger = $manager->where('uid='.$oinfo['uid'])->field('mname,brokerid')->find();
		//用户账户信息
		$acount = $account->where('uid='.$oinfo['uid'])->field('balance')->find();
		
		$this->assign('oinfo',$oinfo);
		$this->assign('uinfo',$uinfo);
		$this->assign('goods',$goods);
		$this->assign('bank',$bank);
		$this->assign('mger',$mger);
		$this->assign('acount',$acount);
		$this->display();
	}
	public function olist(){
		//判断用户是否登陆
		$user= A('Admin/User');
		$user->checklogin();

		$tq=C('DB_PREFIX');
		$order = D('order');
		$pinfo = D('productinfo');
		$step = I('get.step');
		//重命名数据库字段名，以免多表查询字段重复
		$liestr = $tq.'order.uid as uid,'.$tq.'order.selltime as selltime,'.$tq.'userinfo.username as username,'.$tq.'order.buytime as buytime,'.$tq.'order.ptitle as ptitle,'.$tq.'order.commission as commission,'.$tq.'order.oid as oid,'.$tq.'order.ploss as ploss,'.$tq.'order.onumber as onumber,'.$tq.'order.ostyle as ostyle,'.$tq.'order.ostaus as ostaus,'.$tq.'order.fee as fee,'.$tq.'order.pid as pid,'.$tq.'order.buyprice as buyprice,'.$tq.'order.sellprice as sellprice,'.$tq.'order.orderno as orderno,'.$tq.'accountinfo.balance as balance,'.$tq.'productinfo.cid as cid,'.$tq.'productinfo.wave as wave,'.$tq.'productinfo.uprice as uprice';
		//die;
		if($step == "search"){
			
			//获取订单号，生产模糊条件
			$orderno = I('post.orderno');
			//获取用户名，生产模糊条件
			$username = I('post.username');
			//获取订单时间
			$buytime = I('post.buytime');
			//$this->ajaxReturn($buytime);
			//获取订单类型
			$ostyle = I('post.ostyle');
			//获取订单盈亏
			$ploss = I('post.ploss');
			//获取订单状态
			$ostaus = I('post.ostaus');
			if($orderno){
				$where['orderno'] = array('like','%'.I('post.orderno').'%');
			}
			if($username){
				$where['username'] = array('like','%'.I('post.username').'%');
			}
			if($buytime){

				$today = date("Y-m-d",strtotime($buytime));
				$today = explode('-', $today);
				$begintime = mktime(0,0,0,$today[1],$today[2],$today[0]);
				$endtime = mktime(23,59,59,$today[1],$today[2],$today[0]);
				$where['buytime'] = array('between',array($begintime,$endtime));
			}
			if($ostyle!=""){
				$where['ostyle'] = $ostyle;	
			}
			if($ploss=='0'){
				$where['ploss'] = array('egt','0');
			}else if($ploss=='1'){
				$where['ploss'] = array('lt','0');
			}
			if($ostaus!=""){
				$where['ostaus'] = $ostaus;	
			}
//			$this->ajaxReturn($ploss);	
			
			$orders = $order->join($tq.'userinfo on '.$tq.'order.uid='.$tq.'userinfo.uid','left')->join($tq.'accountinfo on '.$tq.'accountinfo.uid='.$tq.'userinfo.uid','left')->join($tq.'productinfo on '.$tq.'order.pid='.$tq.'productinfo.pid','left')->field($liestr)->order($tq.'order.oid desc')->where($where)->select();
			//$this->ajaxReturn($order->getLastSql());
			foreach($orders as $k => $v){
				$orders[$k]['buytime'] = date("Y-m-d H:m",$orders[$k]['buytime']);
				$orders[$k]['jaccess']=$orders[$k]['sellprice']-$orders[$k]['buyprice']-$orders[$k]['fee'];
			}

			if($orders){
				$this->ajaxReturn($orders);	
			}else{
				$this->ajaxReturn("null");
			}
			
		}else{
			//分页
			$count = $order->count();
	        $pagecount = 15;
	        $page = new \Think\Page($count , $pagecount);
	        $page->parameter = $row; //此处的row是数组，为了传递查询条件
	        $page->setConfig('first','首页');
	        $page->setConfig('prev','&#8249;');
	        $page->setConfig('next','&#8250;');
	        $page->setConfig('last','尾页');
	        $page->setConfig('theme','%FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END% ');
	        $show = $page->show();
			//订单列表
			$orders = $order->join($tq.'userinfo on '.$tq.'order.uid='.$tq.'userinfo.uid','left')->join($tq.'accountinfo on '.$tq.'accountinfo.uid='.$tq.'userinfo.uid','left')->join($tq.'productinfo on '.$tq.'order.pid='.$tq.'productinfo.pid','left')->field($liestr)->order($tq.'order.oid desc')->limit($page->firstRow.','.$page->listRows)->select();
			
			
			//var_dump($orders);
			//今日统计
			$today = date("Y-m-d",time());
			$today = explode('-', $today);
			$begintime = mktime(0,0,0,$today[1],$today[2],$today[0]);
			$endtime = mktime(23,59,59,$today[1],$today[2],$today[0]);
			$where['buytime'] = array('between',array($begintime,$endtime));
			$statis = $order->join($tq.'productinfo on '.$tq.'order.pid='.$tq.'productinfo.pid')->field('onumber,uprice,ploss')->where($where)->select();
			foreach($statis as $k => $v){
				$total = $v['onumber']*$v['uprice'];
				$totals += $total;
				$number = $v['onumber'];
				$num += $number;
				$ploss = $v['ploss'];
				$tploss += $ploss;
			}
			//echo $v['onumber']*$v[''];
			$this->assign('totals',$totals);
			$this->assign('tploss',$tploss);
			$this->assign('num',$num);
			$this->assign('page',$show);
			$this->assign('orders',$orders);			
		}
		//统计
		//$today=strtotime(date('Y-m-d 00:00:00'));
		//create_time
		$this->display();
	}
    //最新订单，默认查询30秒内要平仓的全部订单。并统计。
    public function zxlist(){
    	//判断用户是否登陆
		$user= A('Admin/User');
		$user->checklogin();
		$tq=C('DB_PREFIX');
		$order = D('order');
		$pinfo = D('productinfo');
		if (IS_POST) {
			//商品分类：
			$ostyle = I('post.ostyle');
			//交易金额
			$ploss = I('post.ploss');
			//平仓时间
			$ostaus = I('post.ostaus');

			if($ostyle!=""){
				$where['cid']=$ostyle;	
			}
			if($ploss!=''){
			    $where['uprice']=$ploss;
			}
			if($ostaus!=""){
				$time1=time()+$ostaus;
				$where['selltime'] =array(array('EGT',time()),array('ELT',$time1));
			}

			if ($ostyle==""&&$ploss==""&&$ostaus=="") {
				$time1=time()+60;
				$where['selltime'] =array(array('EGT',time()),array('ELT',$time1));
			}
			$where['ostaus']=0;
			
		}else{
			$time1=time()+60;
			$where['selltime'] =array(array('EGT',time()),array('ELT',$time1));
			$where['ostaus']=0;
		}

		$orders = $order->join($tq.'userinfo on '.$tq.'order.uid='.$tq.'userinfo.uid','left')->join($tq.'productinfo on '.$tq.'order.pid='.$tq.'productinfo.pid')->where($where)->order($tq.'order.oid desc')->select();
		
		//买涨的手数。
		$zhang=$order->join($tq.'userinfo on '.$tq.'order.uid='.$tq.'userinfo.uid','left')->join($tq.'productinfo on '.$tq.'order.pid='.$tq.'productinfo.pid')->where($where.' and '.$tq.'order.ostyle=0')->sum($tq.'order.onumber');
        $sum['zhang']=$zhang;
		//买跌的手数。
		$die=$order->join($tq.'userinfo on '.$tq.'order.uid='.$tq.'userinfo.uid','left')->join($tq.'productinfo on '.$tq.'order.pid='.$tq.'productinfo.pid')->where($where.' and '.$tq.'order.ostyle=1')->sum($tq.'order.onumber');
        $sum['die']=$die;
        //查询所有商品信息
        $goods=$pinfo->distinct(true)->field('uprice')->select();

		//echo $order->getLastSql();
		$this->assign('goods',$goods);
		$this->assign('sum',$sum);
		$this->assign('orders',$orders);

    	$this->display();
    }
	public function tlist(){
		//判断用户是否登陆
		$user= A('Admin/User');
		$user->checklogin();
		$tq=C('DB_PREFIX');
		$journal = D('journal');
		$bournal = D('bournal');
		$user = D('userinfo');

		$today = date("Y-m-d",time());
		$today = explode('-', $today);
		$begintime = mktime(0,0,0,$today[1],$today[2],$today[0]);
		
		$tlist = $journal->order('jtime desc')->where('jtime>'.$begintime)->select();		
		$lt = count($tlist);
		$blist = $bournal->order('btime desc')->where('btime>'.$begintime)->select();
		$times=array();
		foreach($blist as $k => $v){
			$tlist[$lt+$k]['jno'] = $v['bno'];
			$tlist[$lt+$k]['uid'] = $v['uid'];
			$tlist[$lt+$k]['jtype'] = $v['btype'];
			$tlist[$lt+$k]['jtime'] = $v['btime'];
			$tlist[$lt+$k]['number'] = 1;
			$tlist[$lt+$k]['juprice'] = $v['bprice'];
			$tlist[$lt+$k]['jusername'] = $v['username'];
			$tlist[$lt+$k]['isverified'] = $v['isverified'];
			$tlist[$lt+$k]['balance'] = $v['balance'];
		}
		foreach($tlist as $k => $v){
			$times[$k] = $v['jtime'];
		}
		array_multisort($times,SORT_STRING,SORT_DESC,$tlist);
		$this->assign('tlist',$tlist);
		$this->display();
	}
	 
}
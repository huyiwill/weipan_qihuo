<?php

namespace Admin\Controller;
use Think\Controller;
class MenberController extends Controller {
	//会员列表
    public function mlist()
    {
    	//判断用户是否登陆
		$user= A('Admin/User');
		$user->checklogin();
    	
    	$tq=C('DB_PREFIX');
    	$user = D('userinfo');
		$order = D('order');
		$account = D('accountinfo');
		$step = I('get.step');
		
		$field = $tq.'userinfo.username as username,'.$tq.'userinfo.utel as utel,'.$tq.'userinfo.utime as utime,'.$tq.'userinfo.uid as uid,'.$tq.'userinfo.otype as otype,'.$tq.'userinfo.ustatus as ustatus,'.$tq.'userinfo.oid as oid,'.$tq.'userinfo.address as address,'.$tq.'userinfo.portrait as portrait,'.$tq.'userinfo.lastlog as lastlog,'.$tq.'userinfo.managername as managername,'.$tq.'userinfo.comname as comname,'.$tq.'userinfo.comqua as comqua,'.$tq.'userinfo.rebate as rebate,'.$tq.'userinfo.feerebate as feerebate,'.$tq.'accountinfo.balance as balance';
		 
		if($step == "search"){
			$keywords = '%'.I('post.keywords').'%';	
			$where['username|utel'] = array('like',$keywords);
			
			$ulist = $user->join($tq.'accountinfo on '.$tq.'userinfo.uid='.$tq.'accountinfo.uid','left')->where($where)->where('ustatus=0 and otype=2')->field($field)->order($tq.'userinfo.uid desc')->select();
			//循环用户id，获取该用户的所有订单数,以及账户余额
			foreach($ulist as $k => $v){
				$ocount = $order->where($tq.'order.uid='.$v['uid'])->count();
				$ulist[$k]['ocount'] = $ocount;
				$ulist[$k]['balance'] = number_format($ulist[$k]['balance'],2);
				$ulist[$k]['utime'] = date("Y-m-d",$ulist[$k]['utime']);
			}
			if($ulist){
				$this->ajaxReturn($ulist);	
			}else{
				$this->ajaxReturn("null");
			}
		}else if($step == "sxsearch"){
			$key = I('post.sxkey');
			$formula = I('post.formula');
			$sxvalue = I('post.sxvalue');
			if($key=="utime"){
				$sxvalue = strtotime($sxvalue);
			}
			if($key=="uid"){
				$key = $tq."userinfo.uid";
			}
			if($sxvalue=="会员"){
				$sxvalue = 0;
			}else if($sxvalue == "经纪人"){
				$sxvalue = 2;
			}else{
				$sxvalue =$sxvalue;
			}
			switch($formula){
				case "eq":
					$formula = " = '".$sxvalue."'";
					break;
				case "neq":
					$formula = " <> '".$sxvalue."'";
					break;
				case "gt":
					$formula = " > '".$sxvalue."'";
					break;
				case "lt":
					$formula = " < '".$sxvalue."'";
					break;
				case "bh":
					$formula = " like '%".$sxvalue."%'";
					break;
				case "bbh":
					$formula = " no like '%".$sxvalue."%'";
					break;
				default:
					$formula = " = '".$sxvalue."'";
			}
			$where = $key.$formula;
			//查询用户和账户信息
			$ulist = $user->join($tq.'accountinfo on '.$tq.'userinfo.uid='.$tq.'accountinfo.uid','left')->where($where.' and ustatus=0 adn otype=2')->field($field)->order($tq.'userinfo.uid desc')->select();
			//$this->ajaxReturn($user->getLastSql());
			//循环用户id，获取该用户的所有订单数,以及账户余额
			foreach($ulist as $k => $v){
				$ocount = $order->where($tq.'order.uid='.$v['uid'])->count();
				$ulist[$k]['ocount'] = $ocount;
				$ulist[$k]['balance'] = number_format($ulist[$k]['balance'],2);
				$ulist[$k]['utime'] = date("Y-m-d",$ulist[$k]['utime']);
			}
			if($ulist){
				$this->ajaxReturn($ulist);	
			}else{
				$this->ajaxReturn("null");
			}
		}else{
			//分页
			$count = $user->where('ustatus=0 and otype=2')->count();
	        $pagecount = 10;
	        $page = new \Think\Page($count , $pagecount);
	        $page->parameter = $row; //此处的row是数组，为了传递查询条件
	        $page->setConfig('first','首页');
	        $page->setConfig('prev','&#8249;');
	        $page->setConfig('next','&#8250;');
	        $page->setConfig('last','尾页');
	        $page->setConfig('theme','%FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END% ');
	        $show = $page->show();
			//查询用户和账户信息
			$ulist = $user->join($tq.'accountinfo on '.$tq.'userinfo.uid='.$tq.'accountinfo.uid','left')->where('ustatus=0 and otype=2')->field($field)->order($tq.'userinfo.uid desc')->limit($page->firstRow.','.$page->listRows)->select();
			
			//循环用户id，获取该用户的所有订单数
			foreach($ulist as $k => $v){
				//$v['uid'];
				$ocount = $order->where($tq.'order.uid='.$v['uid'])->count();
				$ulist[$k]['ocount'] = $ocount;
				$ulist[$k]['balance'] = number_format($ulist[$k]['balance'],2);
				
			}
			$this->assign('page',$show);
	    	$this->assign('ulist',$ulist);
    	}

		//统计
		//用户数量
    	$userCount = $user->where('ustatus=0')->count();
		//交易手数
		$orders = $order->where('ostaus=1')->field('onumber')->select();
		//所有用户账户余额统计
		$acc = $account->field('balance')->select();
		$onumber = 0;
		$anumber = 0;
		foreach($orders as $k => $v){
			$onumber += $orders[$k]['onumber'];
		}
		foreach($acc as $k => $v){
			$anumber += $acc[$k]['balance'];
		}
		$anumber = number_format($anumber,2);
		$this->assign('onumber',$onumber);
		$this->assign('anumber',$anumber);
		$this->assign('ucount',$userCount);
		$this->display();
	}
	public function index()
	{
		$this->display('mlist');		
	}
	//读取关注微信的用户信息。
	public function wxlist(){
		//判断用户是否登陆
		$user= A('Admin/User');
		$user->checklogin();

		$userinfo = M('userinfo');
        //分页
		$count = $userinfo->where('usertype=1')->count();
        $pagecount = 10;
        $page = new \Think\Page($count , $pagecount);
        $page->parameter = $row; //此处的row是数组，为了传递查询条件
        $page->setConfig('first','首页');
        $page->setConfig('prev','&#8249;');
        $page->setConfig('next','&#8250;');
        $page->setConfig('last','尾页');
        $page->setConfig('theme','%FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END% ');
        $show = $page->show();
		//查询用户和账户信息
		$ulist = $userinfo->where('usertype=1')->order('uid desc')->limit($page->firstRow.','.$page->listRows)->select();
		
		$this->assign('page',$show);
    	$this->assign('ulist',$ulist);


		$this->display();
	} 
	/*
	*获取最新的所有关注用户的信息，添加到用户列表，注意usertype，wxtype，2个参数。
	*/
	public function instruser(){
		//判断用户是否登陆
		$user= A('Admin/User');
		$user->checklogin();
		$wxinfo=M('wechat')->find();
	    $appid = $wxinfo['appid'];  
	    $appsecret = $wxinfo['appsecret'];  

	    $url = "https://api.weixin.qq.com/cgi-bin/token?grant_type=client_credential&appid=$appid&secret=$appsecret";  
	    $ch = curl_init();  
	    curl_setopt($ch, CURLOPT_URL, $url);  
	    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);  
	    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);  
	    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);  
	    $output =curl_exec($ch);  
	    curl_close($ch);  
	    $jsoninfo = json_decode($output, true);  
	    $access_token = $jsoninfo["access_token"];     
	    $url = "https://api.weixin.qq.com/cgi-bin/user/get?access_token=$access_token";  
	    $result =$this->https_request($url);  
	    $jsoninfo = json_decode($result);  // 默认false，为Object，若是True，为Array  
	       
	    $data = $jsoninfo -> data;    
	    header("Content-type: text/html; charset=utf-8");
	    $userlist=array();
	    foreach($data -> openid as $x=>$x_value) {   
	        $url = "https://api.weixin.qq.com/cgi-bin/user/info?access_token=".$access_token."&openid=".$x_value;
	        $result = $this->https_request($url); 
	        $php_json =(Array)json_decode($result);   //再把json格式的数据转换成php数组
	        $php_json['username']= substr($php_json['openid'], -5).time();//登录名
            $php_json['address']=$php_json['country'].$php_json['province'].$php_json['city'];//地址
            $php_json['portrait']=$php_json['headimgurl'];//头像
            $php_json['utime']=$php_json['subscribe_time'];//时间
            $php_json['openid']= $php_json['openid'];
            $php_json['nickname']=$php_json['nickname'];
	        $php_json['usertype']='1';
	        $php_json['wxtype']='1';
	        $userlist[]=$php_json;
	    }
        //重组数组
        $mydata=array();
        $userinfo = M('userinfo');
        foreach ($userlist as $key => $value) {
        	$mydata[$key]['username']=$value['username'];
        	$mydata[$key]['address']=$value['address'];
        	$mydata[$key]['portrait']=$value['portrait'];
        	$mydata[$key]['openid']=$value['openid'];
        	$mydata[$key]['utime']=$value['utime'];
        	$mydata[$key]['nickname']=$value['nickname'];
        	$mydata[$key]['usertype']=1;
        	$mydata[$key]['wxtype']=1;
        	$usersum=$userinfo->where("openid='".$value['openid']."'")->count();
        	if ($usersum<1) {
        		$userinfo->add($mydata[$key]);
        	}

        }
        $this->redirect('Menber/wxlist');
	}
	/**
	 * 添加会员
	 * */
	public function madd(){
		//判断用户是否登陆
		$user= A('Admin/User');
		$user->checklogin();
		
		$user = D('userinfo');
		$account = D('accountinfo');
		$manager = D('managerinfo');
		if(IS_POST){
			if($data=$user->create()){
				$data['utime']=date(time());
				$data['upwd']=md5(I('post.upwd').date(time()));
				$data['oid']=session('userid');
				$data['managername']=session('username');
				$data['utime']=date(time());
				$result = $user->add($data);
				if($result){
					$mg['brokerid'] = I('post.brokerid');
					$mg['uid'] = $result;
					$ac['uid'] = $result;
					//创建账户表
					$account->add($ac);
					//创建身份证信息表
					$manager->add($mg);
					$this->success('添加成功',U('Menber/mlist'));
				}else{
					$this->error("添加失败");
				}
			}else{
				$this->error($user->getError());
			}
		}else{
			$this->display();	
		}
	}
	
	public function mupdate(){
		//判断用户是否登陆
		$user= A('Admin/User');
		$user->checklogin();
		
		$user = D('userinfo');
		$manager = D('managerinfo');
		if(IS_POST){
			$ajax = I('get.ajax');
			$uid = I('post.uid');
			$rebate = I('post.rebate');
			$feerebate = I('post.feerebate');
			$data['username'] = I('username');
			$data['utel'] = I('utel');
			$data['address'] = I('address');
			$data['brokerid'] = I('brokerid');
			$data['comname'] = I('comname');
			$data['comqua'] = I('comqua');
			$data['rebate'] = $rebate;
			$data['feerebate'] = $feerebate;
			$upwd = I('upwd');
			if(!empty($upwd)){
				$data['upwd'] = md5($upwd.I('utime'));	
			}
			
			$editlt = $user->where('uid='.$uid)->save($data);
			if($editlt!==FALSE){
				$this->success("修改成功",U("Menber/mlist"));
			}else{
				$this->error('修改失败');
			}
			
			if($ajax=="rebate"){
				$result = $user->where('uid='.$uid)->setField('rebate',$rebate);
				if($result){
					$this->ajaxReturn('修改成功');
				}else{
					$this->ajaxReturn('修改失败');
				}
			}else if($ajax=="feerebate"){
				$result = $user->where('uid='.$uid)->setField('feerebate',$feerebate);
				if($result){
					$this->ajaxReturn('修改成功');
				}else{
					$this->ajaxReturn('修改失败');
				}
			}
			
		}else{
			$uid = I('get.uid');			
			$us = $user->where('uid='.$uid)->find();
			$mg = $manager->where('uid='.$uid)->find();
			$this->assign('us',$us);
			$this->assign('mg',$mg);
			$this->display();
		}
	}
	//微信基本配置
	public function wxinfo(){
		$wechat=D('wechat');
		if (IS_POST) {
			header("Content-type: text/html; charset=utf-8");
				if(!$wechat->create()){
					  // 如果创建失败 表示验证没有通过 输出错误提示信息
                    $this->error($wechat->getError());
				}else{
					//添加
					if (I('post.wcid')=='') {
						$data=$wechat->create();
					    $wechat->add($data);
					}else{
					//修改
						$data['wcid']=I('post.wcid');
						$data=$wechat->create();
					    $wechat->save($data);		
					}	
					
				};

		}
		$wx=$wechat->find();
		$this->assign('wx',$wx);
		$this->display();
	}
    //出来微信htpp地址方法
	function https_request($url)  
    {         
        $curl = curl_init();         
        curl_setopt($curl, CURLOPT_URL, $url);         
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, FALSE);         
        curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, FALSE);         
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);         
        $data = curl_exec($curl);         
        if (curl_errno($curl)) {return 'ERROR '.curl_error($curl);}         
        curl_close($curl);         
        return $data;  
    }     
	
}
<?php
// 本类由系统自动生成，仅供测试用途
namespace Ucenter\Controller;
use Ucenter\Controller\CommonController;
class CustomerController extends CommonController{
     //会员列表
	public function customerlist()
    {

    	$oid=$_SESSION['cuid'];

    	$tq=C('DB_PREFIX');
    	$userinfo=M('userinfo');
    	$ouid =$userinfo->field('uid')->where('oid='.$oid.' and ustatus=0')->select();
    	$myuid =$userinfo->field('uid')->where('uid='.$oid.' and ustatus=0')->select();
    	$ulist=array_merge_recursive($ouid,$myuid);
    	$ulistid=array();
    	foreach ($ulist as $key => $value) {
    		$ulistid[]=$value['uid'];
    	}

    	$buytime=strtotime(date('Y-m-d', strtotime(I('post.StartTime'))));
        $selltime=strtotime(date('Y-m-d 24:00:00', strtotime(I('post.EntTime'))));
        $search=I('post.search');
        //判断是否是加了条件查询。
        if ($buytime>0||$selltime>58888||$search!=''||$search=null) {

        	if ($buytime<0) {$buytime=0;}
            if ($selltime<58888){$selltime=date(time());}
            $count =$userinfo->join($tq.'managerinfo on '.$tq.'userinfo.uid='.$tq.'managerinfo.uid')
	    	->where($tq.'userinfo.oid in ('.implode(',',$ulistid).') and ustatus=0 and otype=0 and '.$tq.'userinfo.username like "%'.$search.'%" and '.$buytime.' > '.$tq.'userinfo.utime and '.$tq.'userinfo.utime > '.$selltime)->count();
	    	$pagecount = 10;
	        $page = new \Think\Page($count , $pagecount);
	        $page->parameter = $row; //此处的row是数组，为了传递查询条件
	        $page->setConfig('first','首页');
	        $page->setConfig('prev','上一页');
	        $page->setConfig('next','下一页');
	        $page->setConfig('last','尾页');
	        $page->setConfig('theme','%FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END%');
	        $show = $page->show();
	    	$list=$userinfo->join($tq.'managerinfo on '.$tq.'userinfo.uid='.$tq.'managerinfo.uid')
	    	->where($tq.'userinfo.oid in ('.implode(',',$ulistid).') and ustatus=0 and otype=0 and '.$tq.'userinfo.username like "%'.$search.'%" and '.$buytime.' < '.$tq.'userinfo.utime and '.$tq.'userinfo.utime < '.$selltime)->limit($page->firstRow.','.$page->listRows)->select();
	    	$sum=array();
	    	$accoun=array();
	    	foreach ($list as $k => $v) {
	    		$sum[]=M('order')->where('uid='.$v['uid'])->sum('onumber');
	    		$accoun[]=M('accountinfo')->field('balance')->where('uid='.$v['uid'])->find();
	    	}
	    	foreach ($list as $key => $value) {
	    		foreach ($sum as $k => $v) {
	    			if($key==$k){
	    				$list[$key]['sum'] = $sum[$k];	
	    			}
	    		}
	    		foreach ($accoun as $ky => $va) {
	    			if($key==$ky){
	    				$list[$key]['balance'] = $accoun[$ky]['balance'];
	    			}
	    		}
	    	}

        }else{
	    	$count =$userinfo->join($tq.'managerinfo on '.$tq.'userinfo.uid='.$tq.'managerinfo.uid')
	    	->where($tq.'userinfo.oid in ('.implode(',',$ulistid).') and ustatus=0 and otype=0')->count();

            
	    	$pagecount = 10;
	        $page = new \Think\Page($count , $pagecount);
	        $page->parameter = $row; //此处的row是数组，为了传递查询条件
	        $page->setConfig('first','首页');
	        $page->setConfig('prev','上一页');
	        $page->setConfig('next','下一页');
	        $page->setConfig('last','尾页');
	        $page->setConfig('theme','%FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END%');
	        $show = $page->show();
	    	$list=$userinfo->join($tq.'managerinfo on '.$tq.'userinfo.uid='.$tq.'managerinfo.uid')
	    	->where($tq.'userinfo.oid in ('.implode(',',$ulistid).') and ustatus=0 and otype=0')->limit($page->firstRow.','.$page->listRows)->select();
	    	$sum=array();
	    	$accoun=array();
	    	foreach ($list as $k => $v) {
	    		$sum[]=M('order')->where('uid='.$v['uid'])->sum('onumber');
	    		$accoun[]=M('accountinfo')->field('balance')->where('uid='.$v['uid'])->find();
	    	}
	    	foreach ($list as $key => $value) {
	    		foreach ($sum as $k => $v) {
	    			if($key==$k){
	    				$list[$key]['sum'] = $sum[$k];	
	    			}
	    		}
	    		foreach ($accoun as $ky => $va) {
	    			if($key==$ky){
	    				$list[$key]['balance'] = $accoun[$ky]['balance'];
	    			}
	    		}
	    	}
    	}
	    $this->assign('ulist',$list);
        $this->assign('page',$show);
		$this->display();
    }
	public function customeradd()
    {
    	header("Content-type: text/html; charset=utf-8");
        //获取登录代理商的id
        $myuid=$_SESSION['cuid'];
    	if (IS_POST) {
	    	$uid=I('post.uid');
	    	$mid=I('post.mid');
	    	$userinfo=D('userinfo');
	    	$managerinfo=M('managerinfo');
            // 自动验证 创建数据集
            if ($userinfo->create()) {
               //验证身份证正确性
               $broker= A('Ucenter/Account');
               $broker->checkIdCard(I('post.brokerid'));
               if($uid!=''&&$mid!=''){
                    //修改
                    $data['uid']=$uid;
                    $data['utel']=I('post.utel');
                    $data['address']=I('post.address');
                    $userinfo->save($data);
                    $mana['mid']=$mid;
                    $mana['brokerid']=I('post.brokerid');
                    $managerinfo->save($mana); 
                    redirect(U('Customer/customerlist'),1, '修改成功...');
                }else{
                    //添加
                    $user=$userinfo->field('username')->where('uid='.$myuid)->find();
                    $data['managername']=$user['username'];
                    $data['username']=I('post.username');
                    $data['utel']=I('post.utel');
                    $data['utime']=date(time());
                    $data['upwd']=md5(I('post.username').date(time()));
                    $data['address']=I('post.address');
                    $data['otype']=0;
                    $data['oid']=$myuid;
                    if ($uid = $userinfo->add($data)) {
                          $brok['uid']=$uid;
                          $brok['brokerid']=I('post.brokerid');
                          $managerinfo->add($brok);
                          $accid['uid']=$uid;
                          M('accountinfo')->add($accid);
                    }
                    redirect(U('Customer/customerlist'),1, '新增用户成功...');
                }
            }else{
                $this->error($userinfo->getError());
            }
    	}
    	//判断跳转到修改页面或者新增页面
		$uid=I('get.uid');
    	if($uid){
    		$user=M('userinfo')->where('uid='.$uid)->find();
    		$usermsg=M('managerinfo')->where('uid='.$uid)->find();
    		$user['brokerid']=$usermsg['brokerid'];
    		$user['mid']=$usermsg['mid'];
    		$this->assign('user',$user);
    	}	
    	$this->display();
    }

	public function customerdetail()
    {
    	$uid=I('get.uid');
    	//普通会员信息
    	$user=M('userinfo')->where('uid='.$uid)->find();
    	$usermsg=M('managerinfo')->where('uid='.$uid)->find();
    	$account=M('accountinfo')->where('uid='.$uid)->find();
    	//普通会员上线信息
    	$ouid=M('userinfo')->where('uid='.$user['oid'])->find();

    	$user['brokerid']=$usermsg['brokerid'];
    	$user['mname']=$usermsg['mname'];
    	$user['balance']=$account['balance'];
    	$user['oname']=$ouid['username'];

    	$this->assign('user',$user);
		$this->display();
    }
	
	
}
<?php
// 本类由系统自动生成，仅供测试用途
namespace Home\Controller;
use Think\Controller;
use Com\Wechat;
use Com\WechatAuth;
class UcenterController extends Controller {
	public function Index()
	{   
        $this->display();
	}
   
   public function plist()
	{   
	    $plist=D('project')->select();
    	$this->assign('plist',$plist);
    	$this->display();
	}
	public function getUserinfo($arr)
	{
	   $data['wechartid']=$arr['openid'];
	   $data['nickname']=$arr['nickname'];
	   $data['photos']=$arr['headimgurl'];
	   $data['ustaus']=1;
	   $data['frozen']=0;
	   $data['account']=1;
	   $data['creat_time']=time();
	   $data['ustaus']=1;
       $result=D('user')->add($data);
       $this->ajaxReturn($result);

	}


}

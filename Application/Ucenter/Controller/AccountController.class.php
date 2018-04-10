<?php
// 本类由系统自动生成，仅供测试用途
namespace Ucenter\Controller;
use Ucenter\Controller\CommonController;
class AccountController extends CommonController{
    //会员列表
	public function agentlist()
    {
    	//获取登录代理商的id
    	$oid=$_SESSION['cuid'];
    	$count =M('userinfo')->where('oid='.$oid.' and ustatus=0')->count();
        $pagecount = 10;
        $page = new \Think\Page($count , $pagecount);
        $page->parameter = $row; //此处的row是数组，为了传递查询条件
        $page->setConfig('first','首页');
        $page->setConfig('prev','上一页');
        $page->setConfig('next','下一页');
        $page->setConfig('last','尾页');
        $page->setConfig('theme','%FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END%');
        $show = $page->show();
		$ulist=M('userinfo')->where('oid='.$oid.' and ustatus=0 and otype=1')->limit($page->firstRow.','.$page->listRows)->select();
        $this->assign('ulist',$ulist);
        $this->assign('page',$show);
		$this->display();
    }
    //会员增加或者修改
	public function agentadd()
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
               $this->checkIdCard(I('post.brokerid'));
               if($uid!=''&&$mid!=''){
                    //修改
                    $data['uid']=$uid;
                    $data['utel']=I('post.utel');
                    $data['address']=I('post.address');
                    $userinfo->save($data);
                    $mana['mid']=$mid;
                    $mana['brokerid']=I('post.brokerid');
					$mana['comname']=I('post.comname');
					$mana['rebate']=I('post.rebate');
					$mana['feerebate']=I('post.feerebate');
                    $managerinfo->save($mana); 
                    redirect(U('Account/agentlist'),1, '修改成功...');
                }else{
                    //添加
                    $user=$userinfo->field('username')->where('uid='.$myuid)->find();
                    $data['managername']=$user['username'];
                    $data['username']=I('post.username');
                    $data['utel']=I('post.utel');
                    $data['utime']=date(time());
                    $data['upwd']=md5('123456'.date(time()));
                    $data['address']=I('post.address');
					$data['comname']=I('post.comname');
					$data['rebate']=I('post.rebate');
					$data['feerebate']=I('post.feerebate');
                    $data['otype']=1;
                    $data['oid']=$myuid;
                    if ($uid = $userinfo->add($data)) {
                          $brok['uid']=$uid;
                          $brok['brokerid']=I('post.brokerid');
                          $managerinfo->add($brok);
                          $accid['uid']=$uid;
                          M('accountinfo')->add($accid);
                    }
                    redirect(U('Account/agentlist'),1, '新增用户成功...');
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
    //删除会员
    public function agentdel(){
    	header("Content-type: text/html; charset=utf-8");
    	$uid=I('get.uid');
    	$userinfo=M('userinfo');
    	$data['uid']=$uid;
    	$data['oid']=0;
        $data['otype']=0;
    	if($userinfo->save($data)){
    	  redirect(U('Account/agentlist'),1, '删除用户成功...');
	    }else{
	      redirect(U('Account/agentlist'),1, '删除用户失败...');	
	    }
    }

	public function memberlist()
    {
		$this->display();
    }
	public function memberadd()
    {
		$this->display();
    }
    //身份证号验证
    function checkIdCard($idcard){  
    // 只能是18位  
    if(strlen($idcard)!=18){ 
        $this->error("身份证号不正确，请重新输入"); 
        return false;  
    }  
    // 取出本体码  
    $idcard_base = substr($idcard, 0, 17);  
    // 取出校验码  
    $verify_code = substr($idcard, 17, 1);  
    // 加权因子  
    $factor = array(7, 9, 10, 5, 8, 4, 2, 1, 6, 3, 7, 9, 10, 5, 8, 4, 2);  
    // 校验码对应值  
    $verify_code_list = array('1', '0', 'X', '9', '8', '7', '6', '5', '4', '3', '2');  
    // 根据前17位计算校验码  
    $total = 0;  
    for($i=0; $i<17; $i++){  
        $total += substr($idcard_base, $i, 1)*$factor[$i];  
    }  
    // 取模  
    $mod = $total % 11;  
  
    // 比较校验码  
    if($verify_code == $verify_code_list[$mod]){  
        return true;  
    }else{  
        $this->error("身份证号不正确，请重新输入");
        return false;  
     }  
    } 
}
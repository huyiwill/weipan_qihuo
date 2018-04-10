<?php
// 本类由系统自动生成，仅供测试用途
namespace Ucenter\Controller;
use Ucenter\Controller\CommonController;
class RetlogController extends CommonController{

	public function returnloglist()
    {	
    	//获取session
    	$uid=$_SESSION['cuid'];
    	$tq=C('DB_PREFIX');
    	$commission=M('commission');
    	$commlist=$commission->join($tq.'userinfo on '.$tq.'commission.uid='.$tq.'userinfo.uid')->where($tq.'commission.uid='.$uid.' and ustyle=0')->select();
    	$this->assign('list',$commlist);
		$this->display();
    }
    public function editretur(){
    	header("Content-type: text/html; charset=utf-8");
    	$uid=I('get.comid');
    	$commission=M('commission');
    	$date['ustyle']=1;
    	$style=$commission->where('comid='.$uid)->save($date);
    	if ($style) {
    		 redirect(U('Retlog/returnloglist'),1, '删除成功...');
    	}else{
    		 redirect(U('Retlog/returnloglist'),1, '删除失败...');
    	}
    }
}
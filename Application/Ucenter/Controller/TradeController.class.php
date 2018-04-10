<?php
// 本类由系统自动生成，仅供测试用途
namespace Ucenter\Controller;
use Ucenter\Controller\CommonController;
class TradeController extends CommonController{
	public function tradelist()
    {
    	$tq=C('DB_PREFIX');
    	$userinfo=M('userinfo');
    	$order = M('order');
    	//默认查询全部
    	//获取登录商的id 
        $myuid=$_SESSION['cuid'];
    	$tmp = array();
    	//根据登录id查询商户所有的下线id
        $arruid = array();
    	$userlist=$userinfo->field('uid,username')->where('oid='.$myuid)->select();
        
        foreach ($userlist as $k => $v) {
            $arruid[] = $v['uid'];
        }
       
        $buytime=strtotime(date('Y-m-d', strtotime(I('post.StartTime'))));
        $selltime=strtotime(date('Y-m-d 24:00:00', strtotime(I('post.EntTime'))));
        $search=I('post.search');
    	if ($buytime>0||$selltime>58888||$search!=''||$search=null) {
            // 存储session
            if ($buytime<0) {$buytime=0;}
            if ($selltime<58888){$selltime=date(time());}
            $count = M('order')->join($tq.'userinfo on '.$tq.'order.uid='.$tq.'userinfo.uid')->where($tq.'order.uid in('.implode(',', $arruid).') and '.$tq.'order.display=0 and '.$tq.'userinfo.username like "%'.$search.'%" and '.$tq.'order.buytime > '.$buytime.' and '.$tq.'order.selltime < '.$selltime)->count();
            $pagecount = 10;
            $page = new \Think\Page($count , $pagecount);
            $page->parameter = $row; //此处的row是数组，为了传递查询条件
            $page->setConfig('first','首页');
            $page->setConfig('prev','上一页');
            $page->setConfig('next','下一页');
            $page->setConfig('last','尾页');
            $page->setConfig('theme','%FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END%');
            $show = $page->show();
    	  //获取查询的参数并且转换成时间
    	  	$list=M('order')->join($tq.'userinfo on '.$tq.'order.uid='.$tq.'userinfo.uid')->where($tq.'order.uid in('.implode(',', $arruid).') and '.$tq.'order.display=0 and '.$tq.'userinfo.username like "%'.$search.'%" and '.$tq.'order.buytime > '.$buytime.' and '.$tq.'order.selltime < '.$selltime)->limit($page->firstRow.','.$page->listRows)->select();
    	}else{
            $count =M('order')->join($tq.'userinfo on '.$tq.'order.uid='.$tq.'userinfo.uid')->where($tq.'order.uid in('.implode(',', $arruid).') and '.$tq.'order.display=0')->count();
            $pagecount = 10;
            $page = new \Think\Page($count , $pagecount);
            $page->parameter = $row; //此处的row是数组，为了传递查询条件
            $page->setConfig('first','首页');
            $page->setConfig('prev','上一页');
            $page->setConfig('next','下一页');
            $page->setConfig('last','尾页');
            $page->setConfig('theme','%FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END%');
            $show = $page->show();
	  	    $list=M('order')->join($tq.'userinfo on '.$tq.'order.uid='.$tq.'userinfo.uid')->where($tq.'order.uid in('.implode(',', $arruid).') and '.$tq.'order.display=0')->limit($page->firstRow.','.$page->listRows)->select(); 
    	
            echo M('order')->getlastsql();

        }
        $this->assign('page',$show);
    	$this->assign('ordlist',$list);
		$this->display();
    }
    public function delord(){
    	header("Content-type: text/html; charset=utf-8");
    	$orderno=I('get.orderno');
    	if ($orderno) {
    		$order=M('order');
	    	$data['display']=1;
	    	if ($order->where('orderno='.$orderno)->save($data)) {
	    		redirect(U('Trade/tradelist'),1, '删除用户成功...');
	    	}else{
	    		redirect(U('Trade/tradelist'),1, '删除用户失败...');
	    	}
    	}
    	redirect(U('Trade/tradelist'),1, '用户订单不存在...');
    }

}
<?php
// 本类由系统自动生成，仅供测试用途
namespace Admin\Controller;
use Think\Controller;
class CouponsController extends Controller {
    public function cpadd()
	{
		//判断用户是否登陆
		$user= A('Admin/User');
		$user->checklogin();
		if(IS_POST){
			$exper = D('experience');
			//优惠卷价格
			$data['eprice'] = I('post.eprice');
			//开始时间
		/*	$data['gettime'] = strtotime(I('post.gettime'));
			//结束时间
			$data['endtime'] = strtotime(I('post.endtime'));*/
            $data['limittime'] = I('post.limittime');
			if($exper->create()){
				$result = $exper->add($data);
				if($result){
					$this->success("优惠劵添加成功",U("Coupons/cplist"));
				}else{
					$this->error('优惠劵添加失败，请重新添加！');
				}
			}else{
				$this->error($exper->getError());
			}
		}else{
			$this->display();
		}
	}

    //发放优惠券
    public function cpsend()
    {
        //判断用户是否登陆
        $user= A('Admin/User');
        $user->checklogin();
        $exper = D('experience');
        $user = D('userinfo');
        $cpall = $exper->select();
        $ulist = $user->select();
        $ucount = $user->count();
        $this->assign('cpall',$cpall);
        $this->assign('ulist',$ulist);
        if(IS_POST){
            $experienceinfo = D('experienceinfo');
            $eid =  I('post.cptype');
            //查询优惠券期限
            $limittime = $exper->where("eid=".$eid)->getField('limittime');
            $data['eid'] = $eid;
            $data['exgtime'] = time();
            $data['endtime'] = time()+24*3600*(intval($limittime));
            $data['getstyle'] = 0;
            $data['getway'] = "后台发放";
            $data['uid'] = I('post.cpuname');
            if($experienceinfo->create()){
                if($data['uid']=="all")
                {
                  for($i=0;$i<$ucount;$i++)
                  {
                      $data['uid'] = $ulist[$i]['uid'];
                      $result = $experienceinfo->add($data);

                  }
                }
                else
                {
                    $result = $experienceinfo->add($data);
                }

                if($result){
                    $this->success("优惠劵发放成功",U('Coupons/cplist',array('style'=>'list')));
                }else{
                    $this->error('优惠劵发放失败，请重新添加！');
                }
            }else{
                $this->error($exper->getError());
            }
        }else{
            $this->display();
        }
    }
	public function cplist(){
		//判断用户是否登陆
		$user= A('Admin/User');
		$user->checklogin();
		$exper = D('experience');
		$user = D('userinfo');
		
		$nowtime = date(time());
		$exstyle = I('get.style');
		//优惠卷
		if($exstyle=='list'){
			$count = $exper->where("endtime >=".$nowtime)->count();
	        $pagecount = 20;
	        $page = new \Think\Page($count , $pagecount);
	        $page->parameter = $row; //此处的row是数组，为了传递查询条件
	        $page->setConfig('first','首页');
	        $page->setConfig('prev','&#8249;');
	        $page->setConfig('next','&#8250;');
	        $page->setConfig('last','尾页');
	        $page->setConfig('theme','%FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END% ');
	        $show = $page->show();
		/*	$coulist = $exper->where("endtime >=".$nowtime)->order('eid desc')->limit($page->firstRow.','.$page->listRows)->select();*/
            $coulist = $exper->order('eid desc')->limit($page->firstRow.','.$page->listRows)->select();
			
			foreach($coulist as $k => $v){
				$coulist[$k]['coustyle'] = 0;
			}
		}
		//过期优惠卷
		if($exstyle=='oldlist'){
			
			$count = $exper->where("endtime <".$nowtime)->count();
	        $pagecount = 20;
	        $page = new \Think\Page($count , $pagecount);
	        $page->parameter = $row; //此处的row是数组，为了传递查询条件
	        $page->setConfig('first','首页');
	        $page->setConfig('prev','&#8249;');
	        $page->setConfig('next','&#8250;');
	        $page->setConfig('last','尾页');
	        $page->setConfig('theme','%FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END% ');
	        $show = $page->show();
			$coulist = $exper->where("endtime <".$nowtime)->order('eid desc')->limit($page->firstRow.','.$page->listRows)->select();
			foreach($coulist as $k => $v){
				$coulist[$k]['coustyle'] = 1;
			}
		}
		
		$this->assign('page',$show);
		$this->assign('coulist',$coulist);
		$this->display();
	}
	public function cpedit()
	{
		//判断用户是否登陆
		$user= A('Admin/User');
		$user->checklogin();
		
		$exper = D('experience');
		if(IS_POST){
			
		}else{
			$geteid = I('get.eid');
			$editex = $exper->where('eid='.$geteid)->find();
		}		
		
		$this->assign('editex',$editex);
		$this->display();
	}
	public function cpdel(){
		$exper = D('experience');
		//批量删除id
		$arreid = I('post.eid');
		//单个删除
		$eid = I('get.eid');
		if(IS_POST){
			//批量删除
			$result = $exper->where('eid in('.implode(',',$arreid).')')->delete();
			if($result!==FALSE){
				$this->success("成功删除{$result}条！",U("Coupons/cplist",array("style"=>"list")));
			}else{
				$this->error('删除失败！');
			}
		}else{
			//单个删除
			$result = $exper->where('eid='.$eid)->delete();
			if($result!==FALSE){
				$this->success("成功删除！",U("Coupons/cplist",array('style'=>'list')));
			}else{
				$this->error('删除失败！');
			}
		}
	}
	public function exlist(){
		//判断用户是否登陆
		$user= A('Admin/User');
		$user->checklogin();
		$tq=C('DB_PREFIX');
		$exper = D('experience');
		$experinfo = D('experienceinfo');
		$users = D('userinfo');
		$eid = I('get.eid');
		//查部分数据
		$field = $tq.'userinfo.username as username,'.$tq.'experienceinfo.uid as uid,'.$tq.'experienceinfo.eid as eid,'.$tq.'experienceinfo.exid as exid,'.$tq.'experienceinfo.exgtime as exgtime,'.$tq.'experienceinfo.getstyle as getstyle,'.$tq.'experienceinfo.endtime as endtime,'.$tq.'experience.eprice as eprice';
		//
		$exlist = $experinfo->join($tq.'userinfo on '.$tq.'experienceinfo.uid='.$tq.'userinfo.uid','left')->join($tq.'experience on '.$tq.'experienceinfo.eid='.$tq.'experience.eid','left')->where($tq.'experienceinfo.eid='.$eid)->field($field)->select();
		
		$this->assign('exlist',$exlist);
		$this->display();
	}
	public function exdel(){
		$experinfo = D('experienceinfo');
		//单个删除
		$exid = I('get.exid');
		//单个删除
		$result = $experinfo->where('exid='.$exid)->delete();
		if($result!==FALSE){
			$this->success("成功删除！",U('Coupons/cplist',array('style'=>'list')));
		}else{
			$this->error('删除失败！');
		}
	}
}
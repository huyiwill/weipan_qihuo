<?php
// 本类由系统自动生成，仅供测试用途
namespace Admin\Controller;
use Think\Controller;
class NewsController extends Controller {
	public function typelist()
	{
		//判断用户是否登陆
		$user= A('Admin/User');
		$user->checklogin();
		
		$typenew = D('newsclass');
		$typenewlist = $typenew->select();
		
		$this->assign('typenewlist',$typenewlist);		
		$this->display();
	}
	public function typeadd(){
		//判断用户是否登陆
		$user= A('Admin/User');
		$user->checklogin();
		
		$typenew = D('newsclass');
		if(IS_POST){
			if($typenew->create()){
				$result = $typenew->add();
				if($result){
					$this->success('添加成功',U('News/typelist'));
				}else{
					$this->error("添加失败");
				}
			}else{
				$this->error($typenew->getError());
			}
		}else{
			$this->display();	
		}
	}
	public function tedit(){
		//判断用户是否登陆
		$user= A('Admin/User');
		$user->checklogin();
		//实例化数据表
		$goodtype = D('newsclass');
		if(IS_POST){
			//自动验证表单
			if($goodtype->create()){
				//添加数据
				$result = $goodtype->save();
				if($result){
					$this->success('修改栏目成功',U('News/typelist'));
				}else{
					$this->error('修改失败');
				}
			}else{
				//自动验证返回结果
				$this->error($goodtype->getError());
			}
		}else{
			$fid = I('get.fid');
			$gt = $goodtype->where('fid='.$fid)->find();			
			$this->assign('gt',$gt);
			$this->display();
		}	
	}
	public function newsadd(){
		//判断用户是否登陆
		$user= A('Admin/User');
		$user->checklogin();
		
		if(IS_POST){
			$news = D('newsinfo');
			header("Content-type: text/html; charset=utf-8");
            $upload = new \Think\Upload();// 实例化上传类
            $upload->maxSize   =     3145728 ;// 设置附件上传大小
            $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
            $upload->rootPath  =     'Public/Uploads'; // 设置附件上传根目录
            $info   =   $upload->upload();
            if(!$info) {// 上传错误提示错误信息    
                $this->error($upload->getError());
            }else{
            	// 上传成功 获取上传文件信息   
              	foreach($info as $file){      
                	$idcover= $file['savepath'].$file['savename'];    
           		}
			}
			if($news->create()){
				$news->ntime = strtotime(I('post.ntime'));
				$news->ncover = $idcover;
				
				$result = $news->add();
				if($result){
					$this->success("添加成功",U('News/newslist'));
				}else{
					$this->error("添加失败");
				}
			}else{
				$this->error($news->getError());				
			}	 
				 
		}else{
			$newsclass = D('newsclass');			
			$nclist = $newsclass->select();
		
			$this->assign('nclist',$nclist);
			$this->display();
		}
		
	}
	public function newslist(){
		
		//判断用户是否登陆
		$user= A('Admin/User');
		$user->checklogin();
		
		$tq=C('DB_PREFIX');
		$news = D('newsinfo');
		$step = I('get.step');
		if($step == "search"){
			$keywords = '%'.I('post.keywords').'%';
			$where['ntitle'] = array('like',$keywords);
			$newlist = $news->join($tq.'newsclass on '.$tq.'newsinfo.ncategory='.$tq.'newsclass.fid')->where($where)->order($tq.'newsinfo.nid desc')->select();
			foreach($newlist as $k => $v){
				$newlist[$k]['ntime'] = date("Y-m-d",$newlist[$k]['ntime']);
			}
			if($newlist){
				$this->ajaxReturn($newlist);	
			}else{
				$this->ajaxReturn("null");
			}
		}else{
			//查询多条记录
	        $count = $news->count();
	        $pagecount = 20;
	        $page = new \Think\Page($count , $pagecount);
	        $page->parameter = $row; //此处的row是数组，为了传递查询条件
	        $page->setConfig('first','首页');
	        $page->setConfig('prev','&#8249;');
	        $page->setConfig('next','&#8250;');
	        $page->setConfig('last','尾页');
	        $page->setConfig('theme','%FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END% ');
			
	        $show = $page->show();
			$newlist = $news->join($tq.'newsclass on '.$tq.'newsinfo.ncategory='.$tq.'newsclass.fid')->order($tq.'newsinfo.nid desc')->limit($page->firstRow.','.$page->listRows)->select();
			
	
			$this->assign('page',$show);
			$this->assign('newlist',$newlist);
		}
		$this->display();
	}
	
	public function newsedit(){
		//判断用户是否登陆
		$user= A('Admin/User');
		$user->checklogin();
		
		//实例化新闻表，新闻分类表
		$tq=C('DB_PREFIX');
		$news = D('newsinfo');
		$newsclass = D('newsclass');
		
		//判断执行，如果是post提交，执行修改方法，否则显示页面
		if(IS_POST){
			
			$news = D('newsinfo');
			header("Content-type: text/html; charset=utf-8");
            $upload = new \Think\Upload();// 实例化上传类
            $upload->maxSize   =     3145728 ;// 设置附件上传大小
            $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
            $upload->rootPath  =     'Public/Uploads'; // 设置附件上传根目录
            $info   =   $upload->upload();
			if($info==""){
				$idcover = I('post.ncover');
			}else{
	            if(!$info) {// 上传错误提示错误信息    
	                $this->error($upload->getError());
	            }else{
	            	// 上传成功 获取上传文件信息   
	              	foreach($info as $file){      
	                	$idcover= $file['savepath'].$file['savename'];
						   
	           		}
					
				}
			}
			
			$postnid = I('post.aid');
			$data['ntitle'] = I('post.ntitle');
			$data['ncategory'] = I('post.ncategory');
			$data['ntime'] = strtotime(I('post.ntime'));
			$data['ncontent'] = I('post.ncontent');
			$data['ncover'] = $idcover;
			
			$result = $news->where('nid='.$postnid)->save($data);
			if($result === FALSE){
				$this->error("修改失败！");
			}else{
				$this->success("修改成功",U('News/newslist'));
			}
			
		}else{
			//根据get接收到的id，获取本条数据并展示
			$getnid = I('get.nid');
			$editnew = $news->join($tq.'newsclass on '.$tq.'newsinfo.ncategory='.$tq.'newsclass.fid')->where('nid='.$getnid)->find();
			//所有分类数据获取
			$nclist = $newsclass->select();
			$this->assign('nclist',$nclist);
			$this->assign('editnew',$editnew);
			$this->display();
		}
	}
	//删除文章
	public function newsdel(){
		$news = D('newsinfo');
		//批量删除id
		$arrnid = I('post.nid');
		//单个删除
		$nid = I('get.nid');
		
		if(IS_POST){
			$result = $news->where('nid in('.implode(',',$arrnid).')')->delete();
			if($result!==FALSE){
				$this->success("成功删除{$result}条！",U("News/newslist"));
			}else{
				$this->error('删除失败！');
			}
		}else{
			$result = $news->where('nid='.$nid)->delete();
			if($result!==FALSE){
				$this->success("成功删除！",U("News/newslist"));
			}else{
				$this->error('删除失败！');
			}
		}
	}
	//删除栏目
	public function newtypedel(){
		$newsclass = D('newsclass');
		//单个删除
		$fid = I('get.fid');
		$result = $newsclass->where('fid='.$fid)->delete();
		if($result!==FALSE){
			$this->success("成功删除！",U("News/typelist"));
		}else{
			$this->error('删除失败！');
		}
	}
	 
}
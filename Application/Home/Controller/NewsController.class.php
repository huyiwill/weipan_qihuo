<?php
namespace Home\Controller;
use Think\Controller;
class NewsController extends Controller {
    public function newslist(){
    	$fid=I('get.fid');
    	$nlist=M('newsinfo')->where('ncategory='.$fid)->order('nid desc')->select();
    	$newscat=M('newsclass')->where('fid='.$fid)->find();
	    $this->assign('nlist',$nlist);
	    $this->assign('newscat',$newscat);	
		$this->display();
    }
    public function newsid(){
    	$nid=I('get.nid');
        $newsid=M('newsinfo')->where('nid='.$nid)->find();
        $this->assign('newsid',$newsid);
        $this->display();
    }
}
<?php
namespace Home\Controller;
use Think\Controller;
class CommonController extends Controller {

        public function _initialize(){
         //判断用户是否已经登录
          if (!isset($_SESSION['uid'])) {
          	//直接跳转页面
             $this->redirect('User/login'); 
          }
         
        

    }



}


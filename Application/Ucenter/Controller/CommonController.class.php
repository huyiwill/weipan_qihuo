<?php
namespace UCenter\Controller;
use Think\Controller;
class CommonController extends Controller {

        public function _initialize(){
         //判断用户是否已经登录
          if (!isset($_SESSION['cuid'])) {
          	//直接跳转页面
             $this->redirect('Admin/User/signin'); 
          }
    }
}
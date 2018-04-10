<?php
// 本类由系统自动生成，仅供测试用途
namespace Ucenter\Controller;
use Ucenter\Controller\CommonController;
class IndexController extends CommonController{
    public function index()
    {
		redirect(U('Account/agentlist'));
    }
    
}
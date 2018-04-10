<?php
 namespace Admin\Model;
 use Think\Model;
 class EmployeeModel extends Model {

	 protected $_validate = array(
		 	array('cname', 'require', '参选人姓名不能为空！'), //默认情况下用正则进行验证
	        array('usex', 'require', '参选人性别不能为空！'), //默认情况下用正则进行验证
	        array('c_introduce', 'require', '参选人简介信息不能为空！'), 
	    );
      protected $_auto = array(
        array('c_support', '0', self::MODEL_INSERT),      
       );

       
 }
?>

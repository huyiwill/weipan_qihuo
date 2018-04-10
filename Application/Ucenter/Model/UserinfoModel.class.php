<?php
// 本类由系统自动生成，仅供测试用途
namespace Ucenter\Model;
use Think\Model;
class UserinfoModel extends Model{
     protected $_validate = array(  
       array('username','require', '用户名不能为空！'),  
       array('username', '','用户名已经存在', 0 , 'unique', 1), 
       array('address','require', '地址不能为空！'),
       array('utel', 'require', '手机号码不能为空！'), //默认情况下用正则进行验证
       array('utel', '', '该手机号码已被占用', 0, 'unique', 1), // 在新增的时候验证name字段是否唯一
       array('utel', '/^1[34578]\d{9}$/', '手机号码格式不正确', 0), // 正则表达式验证手机号码
      
    );  
}
<?php

namespace Admin\Model;
use Think\Model;
class CouponsModel extends Model {
	
	/**
     * 自动验证
     */
	protected $_validate = array(
        array('eprice', 'require', '优惠劵价格不能为空！'), //默认情况下用正则进行验证
        array('gettime', 'require', '开始时间不能为空！'), //默认情况下用正则进行验证             
        array('endtime', 'require', '结束时间不能为空！'), // 新增的时候email字段是否唯一
	);
    /**
     * 自动完成
     */
     protected $_auto = array (
        
    );
	
}
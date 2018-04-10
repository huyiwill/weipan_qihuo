<?php
return array(
    //'配置项'=>'配置值'
   'SHOW_PAGE_TRACE'=>false,
     /* 模板相关配置 */
    'TMPL_PARSE_STRING' => array(
        '__STATIC__' => __ROOT__ . '/Public/static',
        '__ADDONS__' => __ROOT__ . '/Public/' . MODULE_NAME . '/Addons',
        '__IMG__'    => __ROOT__ . '/Public/' . MODULE_NAME . '/images',
        '__CSS__'    => __ROOT__ . '/Public/' . MODULE_NAME . '/css',
        '__JS__'     => __ROOT__ . '/Public/' . MODULE_NAME . '/js',
        'SHOW_PAGE_TRACE'=>True,
    ),

    'pay_config'=>array(
        'merchant_code' =>'1222980101',
        'service_type' =>'direct_pay',
        'interface_version' =>'V3.0',
        'sign_type' =>'MD5',
        'input_charset' =>'UTF-8',
        'notify_url' =>'http://www.caomengde.cn/index.php/home/Pay/notifyurl',
        'return_url' =>'http://www.caomengde.cn/index.php/home/Pay/returnurl',
        'show_url' => 'http://www.caomengde.cn/index.php/home/Index/index'
    ),

    'stspage' => 'Home/User/memberinfo'

);


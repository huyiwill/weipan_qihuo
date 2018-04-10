<?php
return array(
	//'配置项'=>'配置值'
   'SHOW_PAGE_TRACE'=>false,
	 /* 模板相关配置 */
    'TMPL_PARSE_STRING' => array(
        '__Fonts__' => __ROOT__ . '/Public/' . MODULE_NAME . '/fonts',
         '__ICO__'    => __ROOT__ . '/Public/' . MODULE_NAME . '/ico',
        '__IMG__'    => __ROOT__ . '/Public/' . MODULE_NAME . '/img',
        '__CSS__'    => __ROOT__ . '/Public/' . MODULE_NAME . '/css',
        '__JS__'     => __ROOT__ . '/Public/' . MODULE_NAME . '/js',
        '__PLU_'     => __ROOT__ . '/Public/' . MODULE_NAME . '/plugins',
    
    )

);
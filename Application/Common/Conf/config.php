<?php
return array(
	//'配置项'=>'配置值'
	'URL_MODEL' => '2', // URL模式
	'SESSION_AUTO_START' => true, //是否开启session
	'DB_TYPE' => 'mysql',		//设置数据库类型
	'DB_HOST' => 'localhost',	//设置主机
	'DB_NAME' => 'putao',			//设置数据库名
	'DB_USER' => 'root',		//设置用户名
	'DB_PWD' => '',				//这只密码
	'DB_PORT' => '3306',		//设置端口号
	'DB_PREFIX' => '',			//设置表前缀
	'SHOW_PAGE_TRACE'=>true,
	'TMPL_L_DELIM' => '<{',		//修改左定界符
	'TMPL_R_DELIM' => '}>',		//修改右定界符
	'TMPL_PARSE_STRING' => array(
		'__CSS__'=>__ROOT__.'/Public/Css',
		'__JS__'=>__ROOT__.'/Public/Js',
	),//添加自己的模板变量规则
	'MODULE_ALLOW_LIST' => array('Home','Admin','User'),	// 允许访问的模块列表
	'DEFAULT_MODULE'  => 'Home',	// 默认模块
);
<?php
define("APP_PATH",dirname(__FILE__));
define("SP_PATH",dirname(__FILE__).'/SpeedPHP');
$spConfig = array(
"db" => array(
		'host' => 'localhost',
		'login' => 'root',
		'password' => '8641683',
		'database' => 'dianming',
		),
'view' => array(
		'enabled' => TRUE, // 开启视图
		'config' =>array(
			'template_dir' => APP_PATH.'/tpl', // 模板目录
			'compile_dir' => APP_PATH.'/tmp', // 编译目录
			'cache_dir' => APP_PATH.'/tmp', // 缓存目录
			'left_delimiter' => '<{',  // smarty左限定符
			'right_delimiter' => '}>', // smarty右限定符
		),
		)
		);
require(SP_PATH."/SpeedPHP.php");
spRun();
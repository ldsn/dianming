<?php /* Smarty version Smarty-3.0.8, created on 2014-04-14 23:16:36
         compiled from "D:\WWW\game/tpl\game/home.html" */ ?>
<?php /*%%SmartyHeaderCode:4573534bfbd44232e6-36409967%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b80a0d8d5384a1fa40d05f443b6feff3364ce9be' => 
    array (
      0 => 'D:\\WWW\\game/tpl\\game/home.html',
      1 => 1397488590,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4573534bfbd44232e6-36409967',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0;" >
<link rel="stylesheet" href="http://code.jquery.com/mobile/1.3.2/jquery.mobile-1.3.2.min.css">
<script src="http://code.jquery.com/jquery-1.8.3.min.js"></script>
<script src="http://code.jquery.com/mobile/1.3.2/jquery.mobile-1.3.2.min.js"></script>
<title>个人中心</title>
<style>
#picture{
	border:1px solid #990;
	height:140px;
	width:35%;
	border-radius:10px;
	float:left;
	margin-left:5%;
	}
#sth{

	width:40%;
	height:140px;
    float:left;
	margin-left:12%;
	text-align:center;
	font-family:"幼圆";
    font-weight:600;
	}
#ct{

	height:400px;
    width:100%;
	float:left;
	margin-top:10px;
	border-radius:10px;
	}
#about{
	width:90%;
	height:100px;
	float:left;
	border:1px solid #000;
	margin:5%;
	border-radius:10px;
	}
#shop{
	width:90%;
	height:100px;
	float:left;
	border:1px solid #000;
	margin:5%;
	border-radius:10px;
	
	}
#apart{
	width:90%;
	height:100px;
	float:left;
	border:1px solid #000;
	margin:5%;
	border-radius:10px;
	
	}
#name{
	width:80%;
	height:30px;

	margin-top:10px;

	}
#id{
	margin-top:10px;
	width:80%;
	height:30px;

	
	}
#money{
	margin-top:10px;
	width:70%;
	height:30px;

	}
#content{
	background:tpl/game/images/bg_home.jpg;
	
	}
	img {border-radius:10px;}
p{margin:10px;}
a{inline:block; text-decoration:none;}
h3{margin:10px;}
</style>
</head>

<body>
<div data-role="page" id="index">
  <div data-role="header" data-position="fixed">
  <a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'main','a'=>'index'),$_smarty_tpl);?>
" data-role="button" data-icon="back" data-ajax="false">注销</a>
  <h1>个人中心</h1>
  </div>
           
  <div data-role="content" id="content" style="background:url(tpl/game/images/bg_home.jpg); height:500px;">
   <div id="picture">  <img src="tpl/game/images/<?php echo $_smarty_tpl->getVariable('ja_level')->value;?>
_<?php echo $_smarty_tpl->getVariable('ja_gender')->value;?>
.jpg"  width="100%" height="140"/> </div>
   <div id="sth">
   <div id="name"><?php echo $_smarty_tpl->getVariable('ja_name')->value;?>
</div>
   <div id="id"><?php echo $_smarty_tpl->getVariable('ja_id')->value;?>
</div>
   <div id="money"><span><img src="tpl/game/images/money.png" width="25" height="25" /></span>&nbsp;<?php echo $_smarty_tpl->getVariable('ja_money')->value;?>
</div>
   </div>
   <div id="ct">
   <div id="about">
     <p>&nbsp;楼号：&nbsp;<?php echo $_smarty_tpl->getVariable('ja_building')->value;?>
号楼</p>
     <p>&nbsp;房间号：&nbsp;<?php echo $_smarty_tpl->getVariable('ja_num')->value;?>
</p>
     <p>&nbsp;人物等级：&nbsp;<?php echo $_smarty_tpl->getVariable('ja_level')->value;?>
</p>
   
   </div>
   <div id="shop">
   <h3>商店</h3>
     &nbsp;&nbsp;<a href="" data-ajax="false" >&nbsp;购买道具</a><br />
     &nbsp;&nbsp;<a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'main','a'=>'shop'),$_smarty_tpl);?>
" data-ajax="false">&nbsp;升级人物</a>
   </div>
   <div id="apart">
   <h3>公寓</h3>
    &nbsp;&nbsp;<a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'main','a'=>'user_home'),$_smarty_tpl);?>
"  data-ajax="false">自己宿舍</a><br />
    &nbsp;&nbsp;<a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'main','a'=>'jinru'),$_smarty_tpl);?>
"  data-ajax="false">他人宿舍</a>
   </div>
   </div>
  </div>

 <div data-role="footer" data-position="fixed"><h1>鲁大学生网</h1></div>
</div> 
</body>
</html>

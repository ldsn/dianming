<?php /* Smarty version Smarty-3.0.8, created on 2014-04-17 19:17:53
         compiled from "D:\WWW\game/tpl\game/index.html" */ ?>
<?php /*%%SmartyHeaderCode:22793534fb861cbb7c1-40242089%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4c48fa3038ae6e975b05ae1df4a2b3d6b7bda23c' => 
    array (
      0 => 'D:\\WWW\\game/tpl\\game/index.html',
      1 => 1397733038,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '22793534fb861cbb7c1-40242089',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
﻿<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="http://code.jquery.com/mobile/1.3.2/jquery.mobile-1.3.2.min.css">
<link href="tpl/game/css/index.css" rel="stylesheet">
<script src="http://code.jquery.com/jquery-1.8.3.min.js"></script>
<script src="http://code.jquery.com/mobile/1.3.2/jquery.mobile-1.3.2.min.js"></script>
</head>
<body>
<!--首页-->
<div data-role="page" id="index">
  <div data-role="header" data-position="fixed">
  <a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'main','a'=>'index'),$_smarty_tpl);?>
" data-ajax="false" data-role="button">首页</a>
  <h1>抢宿舍</h1>
  <a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'main','a'=>'in'),$_smarty_tpl);?>
"  data-ajax="false" data-role="button" >注册</a>
  </div>
           
  <div data-role="content"   style="background:url(tpl/game/images/bg.jpg); height:500px;">
  <div id="logo" style="margin-top:50px;"><img src="tpl/game/images/wz_03.jpg" height="120"; width="120"; style="background:#FFF; border-radius:10px;"></div>
  <div id="name"><p style="text-shadow: 1px 1px 1px #000; color:#FFF;">鲁大学生网三周年APP</p></div>
  <div id="one" style="margin-top:50px;">
     <a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'main','a'=>'denglu'),$_smarty_tpl);?>
" data-role="button" data-ajax="false">登录</a>
  <a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'main','a'=>'in'),$_smarty_tpl);?>
" data-role="button" data-ajax="false"  >注册</a>
  </div>
  </div>

 <div data-role="footer" data-position="fixed"><h1>鲁大学生网</h1></div>
</div> 





</body>
</html>

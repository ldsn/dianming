<?php /* Smarty version Smarty-3.0.8, created on 2014-04-13 16:26:52
         compiled from "D:\WWW\game/tpl\game/login.html" */ ?>
<?php /*%%SmartyHeaderCode:19273534a4a4cee6d78-85054159%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '454a461d173081ceceebe6abc96b96d07bcb78b9' => 
    array (
      0 => 'D:\\WWW\\game/tpl\\game/login.html',
      1 => 1397377592,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19273534a4a4cee6d78-85054159',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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
  <div data-role="header">
  <a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'main','a'=>'index'),$_smarty_tpl);?>
" data-ajax="false" data-role="button">首页</a>
  <h1>抢宿舍</h1>
  <a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'main','a'=>'in'),$_smarty_tpl);?>
"  data-ajax="false" data-role="button" >注册</a>
  </div>
           
  <div data-role="content">
  <div id="logo"><img src="tpl/game/images/wz_03.jpg" height="120"; width="120";></div>
  <div id="name"><p>鲁大学生网三周年APP</p></div>
    <form method="post" action="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'main','a'=>'login'),$_smarty_tpl);?>
" data-ajax="false" name="theForm">
    <label for="fname">帐号</label>
    <input type="text" name="username" id="username">
    <label for="fname">密码</label>
    <input type="password" name="password" id="password">
    <input type="submit"  value="登录"  >
    </form>
  
  </div>

 <div data-role="footer" data-position="fixed"><h1>鲁大学生网</h1></div>
</div> 





</body>
</html>

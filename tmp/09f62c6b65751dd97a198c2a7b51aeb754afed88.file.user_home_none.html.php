<?php /* Smarty version Smarty-3.0.8, created on 2014-05-31 10:36:13
         compiled from "D:\WWW\game/tpl\game/user_home_none.html" */ ?>
<?php /*%%SmartyHeaderCode:53375389401db515d8-67060630%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '09f62c6b65751dd97a198c2a7b51aeb754afed88' => 
    array (
      0 => 'D:\\WWW\\game/tpl\\game/user_home_none.html',
      1 => 1397641731,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '53375389401db515d8-67060630',
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
<title>我的宿舍</title>
</head>

<body>
<div data-role="page" id="index">
  <div data-role="header" data-position="fixed">
  <a href="" data-role="button" data-icon="back">注销</a>
  <h1>我的宿舍</h1>
  </div>
    <div data-role="content" id="content">
    <div id="line"  style="text-align:center;">
    <h3><?php echo $_smarty_tpl->getVariable('fankui')->value;?>
</h3>
    </div>
           
 
     <a href='<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'main','a'=>'home'),$_smarty_tpl);?>
' data-role="button"  data-ajax="false" >返回</a>


    

   <div data-role="footer" data-position="fixed"><h1>鲁大学生网</h1></div>
</div> 
</body>
</html>

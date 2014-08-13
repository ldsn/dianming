<?php /* Smarty version Smarty-3.0.8, created on 2014-04-05 04:43:22
         compiled from "D:\WWW\game/tpl\game/test.html" */ ?>
<?php /*%%SmartyHeaderCode:31414533f196a290aa3-59876424%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '45b71ca46d4d33ce9119a50cdf2591e7063170e4' => 
    array (
      0 => 'D:\\WWW\\game/tpl\\game/test.html',
      1 => 1396644195,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '31414533f196a290aa3-59876424',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>

<body>
<?php echo $_smarty_tpl->getVariable('hello')->value;?>

 <div id="picture">  <img src="images/16105353.jpg"  width="100%" height="140"/> </div>
   <div id="sth">
   <div id="name"><?php echo $_smarty_tpl->getVariable('ja_name')->value;?>
</div>
   <div id="id"><?php echo $_smarty_tpl->getVariable('ja_id')->value;?>
</div>
   <div id="money"><span><img src="images/money.png" width="25" height="25" /></span>&nbsp;&nbsp;&nbsp;<?php echo $_smarty_tpl->getVariable('ja_money')->value;?>
</div>
   </div>
   <div id="ct">
   <div id="about">
     <p>&nbsp;楼号：&nbsp;<?php echo $_smarty_tpl->getVariable('ja_building')->value;?>
号楼</p>
     <p>&nbsp;房间号：&nbsp;<?php echo $_smarty_tpl->getVariable('ja_num')->value;?>
</p>
     <p>&nbsp;人物等级：&nbsp;D</p>
   
   </div>


</body>
</html>

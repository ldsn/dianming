<?php /* Smarty version Smarty-3.0.8, created on 2014-04-08 14:55:17
         compiled from "D:\WWW\game/tpl\game/room.html" */ ?>
<?php /*%%SmartyHeaderCode:1502953439d55c82534-22754824%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '781c14e2429e899591dbd4c29d9b285349811e8c' => 
    array (
      0 => 'D:\\WWW\\game/tpl\\game/room.html',
      1 => 1396940091,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1502953439d55c82534-22754824',
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
<a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'main','a'=>'back'),$_smarty_tpl);?>
">back</a>
   <div id="h">
    <div id="name"><?php echo $_smarty_tpl->getVariable('ap_name')->value;?>
</div>
    <div id="id"><?php echo $_smarty_tpl->getVariable('ap_id')->value;?>
</div>
    <div id="sth"><?php echo $_smarty_tpl->getVariable('ap_gender')->value;?>
<?php echo $_smarty_tpl->getVariable('ap_money')->value;?>
<?php echo $_smarty_tpl->getVariable('ap_id')->value;?>
</div>
     </div>
</body>
</html>

<?php /* Smarty version Smarty-3.0.8, created on 2014-04-14 23:25:06
         compiled from "D:\WWW\game/tpl\game/choice.html" */ ?>
<?php /*%%SmartyHeaderCode:25744534bfdd21f5386-85340923%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2ea1c6b743c63972b9b4b0567354cf416c3477f9' => 
    array (
      0 => 'D:\\WWW\\game/tpl\\game/choice.html',
      1 => 1397489095,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '25744534bfdd21f5386-85340923',
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
<title>选择宿舍</title>
</head>

<body>
<div data-role="page" id="index">
  <div data-role="header" data-position="fixed">
  <a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'main','a'=>'home'),$_smarty_tpl);?>
" data-role="button" data-icon="back" data-ajax="false">返回</a>
  <h1>选择宿舍</h1>
  </div>
           
  <div data-role="content" id="content">
  <form method="post" action="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'main','a'=>'charu'),$_smarty_tpl);?>
" data-ajax="false" name="theForm">
  <label for="day">选择宿舍楼</label>
        <select name="building" id="num">
        <?php  $_smarty_tpl->tpl_vars['a'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('apart')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['a']->key => $_smarty_tpl->tpl_vars['a']->value){
?>
			<option value="<?php echo $_smarty_tpl->tpl_vars['a']->value['building'];?>
"><?php echo $_smarty_tpl->tpl_vars['a']->value['building'];?>
</option>
        <?php }} ?>
        </select>
        <label for="day">选择宿舍号</label>
         <select name="room" id="num">
        <?php  $_smarty_tpl->tpl_vars['b'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('room')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['b']->key => $_smarty_tpl->tpl_vars['b']->value){
?>
			<option value="<?php echo $_smarty_tpl->tpl_vars['b']->value['num'];?>
"><?php echo $_smarty_tpl->tpl_vars['b']->value['num'];?>
</option>
        <?php }} ?>
        </select>
    <input type="submit" value="潜入">
      <a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'main','a'=>'home'),$_smarty_tpl);?>
" data-role="button" data-ajax="false">返回</a>
    </form>
  </div>

 <div data-role="footer" data-position="fixed"><h1>鲁大学生网</h1></div>
</div> 
</body>
</html>

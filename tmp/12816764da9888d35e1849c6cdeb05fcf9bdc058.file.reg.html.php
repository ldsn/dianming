<?php /* Smarty version Smarty-3.0.8, created on 2014-04-13 16:27:37
         compiled from "D:\WWW\game/tpl\game/reg.html" */ ?>
<?php /*%%SmartyHeaderCode:28218534a4a799246f8-76070807%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '12816764da9888d35e1849c6cdeb05fcf9bdc058' => 
    array (
      0 => 'D:\\WWW\\game/tpl\\game/reg.html',
      1 => 1397377637,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '28218534a4a799246f8-76070807',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>抢宿舍注册</title>
<link rel="stylesheet" href="http://code.jquery.com/mobile/1.3.2/jquery.mobile-1.3.2.min.css">
<link href="css/index.css" rel="stylesheet">
<script src="http://code.jquery.com/jquery-1.8.3.min.js"></script>
<script src="http://code.jquery.com/mobile/1.3.2/jquery.mobile-1.3.2.min.js"></script>


</head>

<body>

<!--注册-->
<div data-role="page" id="zc">
<div data-role="header">
  <a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'main','a'=>'index'),$_smarty_tpl);?>
" data-ajax="false" data-role="button" >首页</a>
  <h1>抢宿舍</h1>

  </div>
  <div data-role="content">
    <form method="post" action="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'main','a'=>'reg'),$_smarty_tpl);?>
" data-ajax="false" name="theForm">
    <label for="fname" name="uesrname">帐号</label>
    <input type="text" name="username" id="user">
    <label for="fname">密码</label>
    <input type="password" name="password" id="password">
    <label for="fname">再次输入密码</label>
    <input name="pass" type="password" id="pass"  />
    <label for="fname">输入昵称</label>
    <input name="user_name" type="text" id="user_name"  />
    <fieldset data-role="controlgroup">
      <legend>请选择您的性别：</legend>
        <label for="male">男性</label>
        <input type="radio" name="gender" id="male" value="male">
        <label for="female">女性</label>
        <input type="radio" name="gender" id="female" value="female">	
      </fieldset>
       <label for="day">选择宿舍楼</label>
        <select name="num_apart" id="num">
        <?php  $_smarty_tpl->tpl_vars['a'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('apart')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['a']->key => $_smarty_tpl->tpl_vars['a']->value){
?>
			<option value="<?php echo $_smarty_tpl->tpl_vars['a']->value['rid'];?>
"><?php echo $_smarty_tpl->tpl_vars['a']->value['building'];?>
</option>
        <?php }} ?>
        </select>
        <label for="day">选择宿舍号</label>
         <select name="num_room" id="num">
        <?php  $_smarty_tpl->tpl_vars['b'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('room')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['b']->key => $_smarty_tpl->tpl_vars['b']->value){
?>
			<option value="<?php echo $_smarty_tpl->tpl_vars['b']->value['room_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['b']->value['num'];?>
</option>
        <?php }} ?>
        </select>
    <input type="submit" value="注册">
    </form>
  </div>
  <div data-role="footer" data-position="fixed"><h1>鲁大学生网</h1></div>

</div>
</body>
</html>

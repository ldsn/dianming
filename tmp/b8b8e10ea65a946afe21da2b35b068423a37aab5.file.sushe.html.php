<?php /* Smarty version Smarty-3.0.8, created on 2014-03-27 01:14:24
         compiled from "D:\WWW\game/tpl\game/sushe.html" */ ?>
<?php /*%%SmartyHeaderCode:168953330af0c60dc0-67297147%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b8b8e10ea65a946afe21da2b35b068423a37aab5' => 
    array (
      0 => 'D:\\WWW\\game/tpl\\game/sushe.html',
      1 => 1395853907,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '168953330af0c60dc0-67297147',
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

<!--入住宿舍-->
<div data-role="page" id="zc">
<div data-role="header">
  <a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'main','a'=>'index'),$_smarty_tpl);?>
" data-role="button" >首页</a>
  <h1>抢宿舍</h1>

  </div>
  <div data-role="content">
    <form method="post" action="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'main','a'=>'insert_apartment'),$_smarty_tpl);?>
" data-ajax="false" name="theForm">
    <label for="day">选择宿舍楼</label>
        <select name="num_apart" id="num">
         <option value="北一">北一</option>
         <option value="北二">北二</option>
         <option value="北三">北三</option>
         <option value="北四">北四</option>
         <option value="北五">北五</option>
         <option value="北六">北六</option>
         <option value="北七">北七</option>
        </select>
        <label for="day">选择宿舍号</label>
         <select name="num_room" id="num">
         <option value="101">101</option>
         <option value="102">102</option>
         <option value="103">103</option>
         <option value="104">104</option>
         <option value="105">105</option>
         <option value="106">106</option>
         <option value="107">107</option>
        </select>
           <input type="submit" value="提交">
    </form>
  </div>
  <div data-role="footer" data-position="fixed"><h1>鲁大学生网</h1></div>

</div>
</body>
</html>

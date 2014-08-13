<?php /* Smarty version Smarty-3.0.8, created on 2014-04-09 10:54:00
         compiled from "D:\WWW\game/tpl\game/apart.html" */ ?>
<?php /*%%SmartyHeaderCode:174735344b6485016a6-87814807%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2cf4e385b077242531791eb15d64622836d549a7' => 
    array (
      0 => 'D:\\WWW\\game/tpl\\game/apart.html',
      1 => 1397009508,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '174735344b6485016a6-87814807',
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
<title>宿舍内部</title>
<style>
#h{
	width:100%;
	height:200px;
	border-radius:10px;
	
	}
#name{
	width:60%;
	height:30px;
	border-radius:10px;

	margin:10px;
    font-family:"幼圆";
	}
#id{
	width:60%;
	height:30px;
	border-radius:10px;
	
	margin:10px;
    font-family:"幼圆";

	}
#sth{
	width:90%;
	height:95px;
	border:1px solid #000;
	border-radius:10px;
	margin:10px;
    font-family:"幼圆";
	}

</style>
</head>

<body>
<div data-role="page" id="index">
  <div data-role="header" data-position="fixed">
  <a href="" data-role="button" data-icon="back">注销</a>
  <h1>宿舍内部</h1>
  </div>
    <div data-role="content" id="content">
    <div id="line"></div>

    <div id="h">
    <div id="name">姓名：<?php echo $_smarty_tpl->getVariable('ap_name')->value;?>
</div>
    <div id="id">ID:<?php echo $_smarty_tpl->getVariable('ap_id')->value;?>
</div>
    <div id="sth">你现在正在处于别人的宿舍内<br />停留时间越长就收获越多的金币哦~</div>
     </div>
     <a href='index.php?c=main&a=back' data-role="button"  data-ajax="false" >离开</a>


    

   <div data-role="footer" data-position="fixed"><h1>鲁大学生网</h1></div>
</div> 
<body>
</body>
</html>

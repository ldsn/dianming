<?php /* Smarty version Smarty-3.0.8, created on 2014-04-06 10:49:41
         compiled from "D:\WWW\game/tpl\game/shop.html" */ ?>
<?php /*%%SmartyHeaderCode:160755340c0c5297935-34081961%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f54a525daa2ba1f6a0330b7cc81d0dcadc114c93' => 
    array (
      0 => 'D:\\WWW\\game/tpl\\game/shop.html',
      1 => 1396752407,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '160755340c0c5297935-34081961',
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
<title>商店</title>
<style>
#nav{
	width:100%;
	height:50px;
	background:#9C0;
	}
#content{
	padding:0px;
	}
.m{
	width:90%;
	height:270px;
	border-radius:10px;
	margin:5%;
	border:1px solid #333; 
	}
.img{
	width:35%;
	height:100px;
    border-radius:10px;
	margin:10px;
	border:1px solid #666;
	float:left;
	}
.sth{
	float:left;
	width:40%;
	height:100px;
	margin:10px;
	   font-family:"幼圆";
	   font-weight:600;
	
	}
.name{
	width:80%;
	height:25px;
	

	}
.level{
	width:80%;
	height:25px;
	
    margin-top:10px;
	}
.buy{
	width:100%;
	height:25px;
	border:1px solid #FC3;
	border-radius:10px;
	background:#FF6;
    margin-top:10px;
	text-align:center; 
       color:#FF0;
	line-height:23px;
	}
.about{
	width:90%;
	height:120px;
	border:1px solid #333;
	margin:5%;
	float:left;
	   font-family:"幼圆";
	   font-weight:600;
	}
img {border-radius:10px;}
a{ text-decoration:none;}	
</style>
</head>

<body>


<div data-role="page" id="index">
  <div data-role="header" data-position="fixed">
  <a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'main','a'=>'home'),$_smarty_tpl);?>
" data-role="button" data-icon="back" data-ajax="false">返回</a>
  <h1>商店</h1>
  <div data-role="navbar" >
    <ul >
      <li><a href="#anylink" data-theme="b">男性</a></li>
      <li><a href="#anylink" data-theme="b">女性</a></li>
      <li><a href="#anylink" data-theme="b">关于店铺</a></li>
    </ul>
  </div>
  </div>
           
  <div data-role="content" id="content">
<div data-role="collapsible">  
 <h1>C级人物购买</h1> 
   <div class="m">
    <div class="img"><img src="tpl/game/images/C.jpg" width="100%" height="100" /></div>
     <div class="sth">
     <div class="name">RENWU</div>
     <div class="level">$5000</div>
     <div class="buy"><a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'main','a'=>'shopbuy_1'),$_smarty_tpl);?>
" data-ajax="false">立即购买</a></div>
     </div>
    <div class="about">
    <p>&nbsp;这个人物长得很帅，能赚很多钱这个人物长得很帅，能赚很多钱</p></div>
   </div>
   </div>
  <div data-role="collapsible">  
 <h1>B级人物购买</h1> 
     <div class="m">
    <div class="img"><img src="tpl/game/images/B.jpg" width="100%" height="100" /></div>
     <div class="sth">
     <div class="name">RENWU</div>
     <div class="level">$5000</div>
     <div class="buy"><a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'main','a'=>'shopbuy_2'),$_smarty_tpl);?>
" data-ajax="false">立即购买</a></div>
     </div>
    <div class="about">
    <p>&nbsp;这个人物长得很帅，能赚很多钱这个人物长得很帅，能赚很多钱</p></div>
   </div>
   </div>
<div data-role="collapsible">  
 <h1>A级人物购买</h1> 
    <div class="m">
    <div class="img"><img src="tpl/game/images/A.jpg" width="100%" height="100" /></div>
     <div class="sth">
     <div class="name">RENWU</div>
     <div class="level">$5000</div>
     <div class="buy"><a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'main','a'=>'shopbuy_3'),$_smarty_tpl);?>
" data-ajax="false">立即购买</a></div>
     </div>
    <div class="about">
    <p>&nbsp;这个人物长得很帅，能赚很多钱这个人物长得很帅，能赚很多钱</p></div>
   </div>
   </div>
<div data-role="collapsible">  
 <h1>S级人物购买</h1> 
     <div class="m">
    <div class="img"><img src="tpl/game/images/S.jpg" width="100%" height="100" /></div>
     <div class="sth">
     <div class="name">RENWU</div>
     <div class="level">$5000</div>
     <div class="buy"><a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'main','a'=>'shopbuy_4'),$_smarty_tpl);?>
" data-ajax="false">立即购买</a></div>
     </div>
    <div class="about">
    <p>&nbsp;这个人物长得很帅，能赚很多钱这个人物长得很帅，能赚很多钱</p></div>
   </div>
   </div>
 <div data-role="footer" data-position="fixed"><h1>鲁大学生网</h1></div>
</div> 


</body>
</html>

<?php /* Smarty version Smarty-3.0.8, created on 2014-08-13 00:40:28
         compiled from "D:\WWW\share1/tpl\show.html" */ ?>
<?php /*%%SmartyHeaderCode:1241153ea437ccc5193-99017545%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '15b6b1f39d1c3e1d031595b63d03b0786cca7634' => 
    array (
      0 => 'D:\\WWW\\share1/tpl\\show.html',
      1 => 1407861623,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1241153ea437ccc5193-99017545',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>点名</title>
<style>
*{margin:0px;padding:0px; list-style:none;text-decoration: none; }
#all{width:auto; display:block;}
.header{width:auto;; height:100px;}
.h-logo{width:500px; float:left;}
.h-txt{width:480px; float:left;}
.content{width:auto; height:200px; height: 350px;}
.c-warp-show{width:300px; height:auto; margin:0 auto; overflow:hidden; background:url('./tpl/images/bg.png') no-repeat;color: rgba(150, 161, 194, 1);}
.c-in-show{ height:200px; margin-top:70px;}

.c-in-ul-li{width:300px; height:30px; text-align:center; float:left;}
.button{width:100px; margin:0 auto; border-radius:5px; background:#CCCCCC; height:40px; text-align:center; font-weight:bold; line-height:40px; margin-top:60px;}
.button:hover{background:#0099CC;}
.footer{width:980px; height:50px; text-align:center; font-size:14px; color:#666666;}
.c-show-ul{width:300px; height:auto;}
.button{width:100px; margin:0 auto; border-radius:5px; background:#CCCCCC; height:40px; text-align:center; font-weight:bold; line-height:40px; margin-top:60px;}
.button:hover{background:#0099CC;}
@media screen and (max-width:980px){
#all{width:auto;}
.header{width:auto;; height:100px;}
.h-logo{width:500px; float:left;}
.h-txt{width:auto; float:left;}
.content{width:auto; }
.c-warp{width:300px; height:auto; margin:0 auto; overflow:hidden;}
.c-in{ height:200px;}

.footer{width:auto; height:50px; text-align:center; font-size:14px; color:#666666;}

}
@media screen and (max-width:700px){
#all{width:auto;}
.header{width:auto; height:100px;}
.h-logo{width:500px; float:left;}
.h-txt{width:480px; float:left;}
.content{width:auto;}
.c-warp{width:300px; height:auto; margin:0 auto; overflow:hidden;}
.c-in{ height:200px;}
.c-in-ul-li{width:300px; height:30px; text-align:center; float:left;}
.footer{width:auto; height:50px; text-align:center; font-size:14px; color:#666666;}

}
@media screen and (max-width:480px){
#all{width:auto;}
.header{width:auto; height:100px;}
.h-logo{width:500px; float:left;}
.h-txt{width:auto; float:left;}
.content{width:auto; }
.footer{width:auto; height:50px; text-align:center; font-size:14px; color:#666666;}



}
@media screen and (min-width:360px){

#all{width:auto;}
.header{width:auto; height:100px;}
.h-logo{width:500px; float:left;}
.h-txt{width:auto; float:left;}
.content{width:auto; }
.footer{width:auto; height:50px; text-align:center; font-size:14px; color:#666666;}
}
</style>

</head>

<body>
<div id="all">
     
    <div class="header">
 <div class="h-txt"><img src="./tpl/images/logo.png"/></div>	   
	</div>
	<div class="content">
	
	   <div class="c-warp-show">
	      <div class="c-in-show" >
		  <ul class="c-show-ul"> 
	           <?php  $_smarty_tpl->tpl_vars['a'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('getout')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['a']->key => $_smarty_tpl->tpl_vars['a']->value){
?>
			   <li class="c-in-ul-li"><?php echo $_smarty_tpl->tpl_vars['a']->value['title'];?>
:<?php echo $_smarty_tpl->tpl_vars['a']->value['content'];?>
</li>
			   <?php }} ?>
			  <li class="c-in-ul-li">
			      <div class="button" ><a href="#">分享到空间</a></div>
			  </li>
		  </ul>

		  </div>
		  </div>
	</div>
	
	<div class="footer">&copy; 2011-2014 LDSN.鲁大学生网,All rights reserved.<script src="http://s19.cnzz.com/stat.php?id=1253022913&web_id=1253022913" language="JavaScript"></script></div>

</div>

</body>
</html>

<?php /* Smarty version Smarty-3.0.8, created on 2014-08-12 23:39:07
         compiled from "D:\WWW\share1/tpl\reply.html" */ ?>
<?php /*%%SmartyHeaderCode:1159053ea351b8f9612-61034405%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7810e703183a4d51e7d2c0772086df0c1abae057' => 
    array (
      0 => 'D:\\WWW\\share1/tpl\\reply.html',
      1 => 1407857945,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1159053ea351b8f9612-61034405',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<script type="text/javascript" src="./tpl/js/jquery-1.11.1.min.js"></script>
<title>点名</title>
<style>
*{margin:0px;padding:0px; list-style:none;text-decoration: none;}

#all{width:auto; display:block;}
.header{width:auto;; height:100px;}
.h-logo{width:500px; float:left;}
.h-txt{width:480px; float:left;}
.content{width:auto; height:200px;}
.c-warp{width:300px; height:200px; margin:0 auto; overflow:hidden;}
.c-in{ height:200px;}
.c-in-ul-li{width:300px; height:200px; text-align:center; float:left;}
.button{width:100px; margin:0 auto; border-radius:5px; background:#CCCCCC; height:40px; text-align:center; font-weight:bold; line-height:40px; margin-top:60px;}
.button>a{text-decoration:none;}
.button:hover{background:#0099CC;}
.footer{width:980px; height:50px; text-align:center; font-size:14px; color:#666666;}
.c-f-input{height:30px;}
.pre{width: 50px;float: left; height: 43px;  left: 35px; position: absolute;  top: 140px; background:url(./tpl/images/pre.png) no-repeat;}
.next{float:right; width: 50px; height: 43px; position: absolute; right: 38px; top: 140px; background:url(./tpl/images/next.png) no-repeat;}
@media screen and (max-width:980px){
#all{width:auto;}
.header{width:auto;; height:100px;}
.h-logo{width:500px; float:left;}
.h-txt{width:auto; float:left;}
.content{width:auto; }
.c-warp{width:300px; height:200px; margin:0 auto; overflow:hidden;}
.c-in{ height:200px;}
.c-in-ul-li{width:300px; height:200px; text-align:center; float:left;}
.footer{width:auto; height:50px; text-align:center; font-size:14px; color:#666666;}

}
@media screen and (max-width:700px){
#all{width:auto;}
.header{width:auto; height:100px;}
.h-logo{width:500px; float:left;}
.h-txt{width:480px; float:left;}
.content{width:auto;}
.c-warp{width:300px; height:200px; margin:0 auto; overflow:hidden;}
.c-in{ height:200px;}
.c-in-ul-li{width:300px; height:200px; text-align:center; float:left;}
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
	   <div class="c-warp">
	      <div class="c-in" id="div1">
		  <form method="post" action="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'main','a'=>'insert'),$_smarty_tpl);?>
">
           <input type="hidden" value="<?php echo $_smarty_tpl->getVariable('aid')->value;?>
" name="aid"/>
		  <ul class="c-in-ul"> 
		      <?php  $_smarty_tpl->tpl_vars['a'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('question')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['a']->key => $_smarty_tpl->tpl_vars['a']->value){
?>
			      
			  <li class="c-in-ul-li">
			   <h3><?php echo $_smarty_tpl->tpl_vars['a']->value['title'];?>
</h3>
			      <input type="text" name="the[<?php echo $_smarty_tpl->tpl_vars['a']->value['qid'];?>
]" class="c-f-input"/>
			   </li>	
			   <?php }} ?>
			   
			  <li class="c-in-ul-li">
			 
                     <h3>完成正在提交</h3>
				  
			      <input type="submit" value="提交" style="width:50px; height:30px;"/>
			  </li>
		  </ul>
			  </form>
		  </div>
		  </div>			      <div class="pre" ></div>
			      <div class="next"></div>
	</div>
	<div class="footer">&copy; 2011-2014 LDSN.鲁大学生网,All rights reserved.<script src="http://s19.cnzz.com/stat.php?id=1253022913&web_id=1253022913" language="JavaScript"></script></div>

</div>
<script>
$(document).ready(function(){
var g=$('.c-in-ul-li').length;
var li_width=$('.c-in-ul-li').width();
var width=g*li_width;
$('.c-in').width(width);
var l_width = width - li_width;
var dd=false;
$('.next').click(function(){

		if(parseInt($('.c-in-ul').css('margin-left'))==-l_width){
			return;
		}
		if (dd == true){
			return;
		}
		dd=true;
		
	   $('.c-in-ul').animate({marginLeft:'-=300px'},function(){
			dd=false;
	   })

	});

$('.pre').click(function(){
	if(parseInt($('.c-in-ul').css('margin-left'))==0){
		return;
	}
	if (dd == true){
		return;
	}
	dd=true;
	
   $('.c-in-ul').animate({marginLeft:'+=300px'},function(){
   	
	dd=false;
   })
})
});
</script>
</body>
</html>

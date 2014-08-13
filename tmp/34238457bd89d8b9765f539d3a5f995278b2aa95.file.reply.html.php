<?php /* Smarty version Smarty-3.0.8, created on 2014-08-13 19:34:47
         compiled from "D:\phpStudy\WWW\dianming/tpl\reply.html" */ ?>
<?php /*%%SmartyHeaderCode:884553eb4d57ce74a3-15051962%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '34238457bd89d8b9765f539d3a5f995278b2aa95' => 
    array (
      0 => 'D:\\phpStudy\\WWW\\dianming/tpl\\reply.html',
      1 => 1407929685,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '884553eb4d57ce74a3-15051962',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<script type="text/javascript" src="./tpl/js/jquery-1.11.1.min.js"></script>
<title>点名</title>
<style>
*{margin:0px;padding:0px; list-style:none;text-decoration: none;}
body{
background:url(./tpl/images/bg1.png)
}
#all{width:auto; display:block;}
.content{width:auto; height:200px;}
.c-warp{width:300px; height:200px; margin:0 auto; overflow:hidden;}
.c-in{ height:200px;}
.c-in-ul-li{width:300px; height:200px; text-align:center; float:left;}
.button{width:100px; margin:0 auto; border-radius:5px; background:#CCCCCC; height:40px; text-align:center; font-weight:bold; line-height:40px; margin-top:60px;}
.button>a{text-decoration:none;}
.button:hover{background:#0099CC;}
.footer {
width: 300px;
text-align: center;
font-size: 14px;
color: #666666;
margin: 0 auto;
background: #fff;
}
.c-f-input{height:30px;}
h3 {
font-size: 20px;
text-decoration: none;
font-weight: normal;
text-align: left;
padding: 15px 12px;
color: #fff;
}
.c-f-input {
height: 30px;
border-radius: 6px;
box-shadow: inset 1px 1px 20px -12px;
border: none;
border-bottom: 2px solid #ccc;
outline: none;
padding: 0 10px;
width: 273px;
margin-top: 10px;
background: none;
color: #fff;
}
.pre {
    left: 10px;
}
.pre, .next {
position: absolute;
background: #8DB8F0;
padding: 7px 17px;
cursor: pointer;
border-radius: 7px;
color: #fff;
font-weight: bold;
top: 160px;
}
.re{position:relative;background:url(./tpl/images/aa.jpg)}
.next {
    right: 10px;
}
.sub{
display: block;
padding: 1px;
background: #FA8EFA;
width: 142px;
line-height: 40px;
border-radius: 43px;
margin: 0 auto;
color: #fff;
font-weight: bold;
}
</style>
</head>
<body>
<div id="all">
	<div class="content">
	   <div class="c-warp">
		<div class="re">
	      <div class="c-in" id="div1">
		  <form method="post" action="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'main','a'=>'insert'),$_smarty_tpl);?>
" name="ti">
           <input type="hidden" value="<?php echo $_smarty_tpl->getVariable('aid')->value;?>
" name="aid"/>
		  <ul class="c-in-ul"> 
		      <?php  $_smarty_tpl->tpl_vars['a'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('question1')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['a']->key => $_smarty_tpl->tpl_vars['a']->value){
?>
			      
			  <li class="c-in-ul-li">
			   <h3><?php echo $_smarty_tpl->tpl_vars['a']->value['title'];?>
</h3>
			      <input type="text" name="the[<?php echo $_smarty_tpl->tpl_vars['a']->value['qid'];?>
]" class="c-f-input" placeholder="填写答案"/>
			   </li>	
			   <?php }} ?>
			   
			  <li class="c-in-ul-li">
					<a href="javascript:;" class="sub" onclick="ti.submit()" style="margin-top: 66px;">
						完成提交
					</a>
			  </li>
			<div class="pre">上一题</div>
			<div class="next">下一题</div>
		  </ul>
			  </form>
		  </div>
		  </div>
		  </div>
	</div>
	<div class="footer">
	&copy; 2011-2014 LDSN.<a href="http://www.ldustu.com" target="_blank">鲁大学生网</a>
	<script src="http://s19.cnzz.com/stat.php?id=1253022913&web_id=1253022913" language="JavaScript"></script></div>

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

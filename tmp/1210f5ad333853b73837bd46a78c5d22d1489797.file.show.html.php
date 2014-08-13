<?php /* Smarty version Smarty-3.0.8, created on 2014-08-14 02:21:13
         compiled from "D:\phpStudy\WWW\dianming/tpl\show.html" */ ?>
<?php /*%%SmartyHeaderCode:428253ebac99284927-18149260%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1210f5ad333853b73837bd46a78c5d22d1489797' => 
    array (
      0 => 'D:\\phpStudy\\WWW\\dianming/tpl\\show.html',
      1 => 1407954071,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '428253ebac99284927-18149260',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!DOCTYPE html>
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge" > 
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta charset="utf-8"/>
<title>传递黑板</title>
<style>

*{margin:0px;padding:0px; list-style:none;text-decoration: none;}
body{
background:url(./tpl/images/bg1.png)
}
#all{width:auto; display:block;}
.c-warp{width:300px; height:200px; margin:0 auto; overflow:hidden;}
.c-show-ul{
background: url(./tpl/images/aa.jpg);
padding: 10px 20px;
color: #fff;
line-height: 30px;
}
.footer {
text-align: center;
font-size: 14px;
color: #666666;
background: #fff;
width:300px;
margin: 0 auto;
}
.tr{
width:300px;
margin: 0 auto;
}
.share {
font-weight: bold;
text-align: center;
font-size: 20px;
}
</style>

</head>
<body>
		<div class="tr">
		  <ul class="c-show-ul"> 
		 <?php if ('status'==0){?>
		  <li class="c-in-ul-li">
				<div class="share">把它传递下去<br/>@10位你最好的朋友<br/>别忘记@传给你的人哦~<br/>
        <a href="#" onclick='toQzoneLogin()'><img src="include/login.png"></a>
        <a href="#" onclick='closeChildWindow()'><img src="include/login.png"></a>
				</div>
		 <?php }?>
		  </li>
	           <?php  $_smarty_tpl->tpl_vars['a'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('getout')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['a']->key => $_smarty_tpl->tpl_vars['a']->value){
?>
			   <li class="c-in-ul-li"><?php echo $_smarty_tpl->tpl_vars['a']->value['title'];?>
 : <?php echo $_smarty_tpl->tpl_vars['a']->value['content'];?>
</li>
			   <?php }} ?>
			  
		  </ul>
		</div>
	<div class="footer">
	&copy; 2011-2014 LDSN.<a href="http://www.ldustu.com" target="_blank">鲁大学生网</a>
	<script src="http://s19.cnzz.com/stat.php?id=1253022913&web_id=1253022913" language="JavaScript"></script></div>

</div>

        <script type="text/javascript">
            var childWindow;
            function toQzoneLogin()
            {
                childWindow = window.open("oauth/index.php","TencentLogin","width=450,height=320,menubar=0,scrollbars=1, resizable=1,status=1,titlebar=0,toolbar=0,location=1");
            } 
            
            function closeChildWindow()
            {
                childWindow.close();
            }
        </script>
</body>
</html>

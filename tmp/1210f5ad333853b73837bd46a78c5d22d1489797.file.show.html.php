<?php /* Smarty version Smarty-3.0.8, created on 2014-08-14 18:12:55
         compiled from "D:\phpStudy\WWW\dianming/tpl\show.html" */ ?>
<?php /*%%SmartyHeaderCode:3174253ec8ba78d3a32-33577706%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1210f5ad333853b73837bd46a78c5d22d1489797' => 
    array (
      0 => 'D:\\phpStudy\\WWW\\dianming/tpl\\show.html',
      1 => 1408011173,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3174253ec8ba78d3a32-33577706',
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
.tr .open{
display: block;
background: #000;
width: 135px;
line-height: 41px;
text-align: center;
color: #fff;
font-weight: bold;
border-radius: 40px;
margin: 0 auto;
box-shadow: 0px 0px 18px 3px rgba(177, 123, 123, 0.51);
}

</style>

</head>
<body>
		<div class="tr">
		  <ul class="c-show-ul"> 
		 <?php if ($_smarty_tpl->getVariable('status')->value==0){?>
		  <li class="c-in-ul-li">
				<div class="share">把它传递下去<br/>@10位你最好的朋友<br/>别忘记@传给你的人哦~<br/>
<script type="text/javascript">
(function(){
var p = {
url:location.href,
showcount:'0',/*是否显示分享总数,显示：'1'，不显示：'0' */
desc:'一面充满爱的黑板，我要把它传递给我最好的朋友！@',/*默认分享理由(可选)*/
summary:'这是一面充满爱的黑板，他只会传递给最好的朋友。',/*分享摘要(可选)*/
title:'传递黑板',/*分享标题(可选)*/
site:'鲁大学生网',/*分享来源 如：腾讯网(可选)*/
pics:'http://127.0.0.1:9096/dianming/tpl/images/share.jpg', /*分享图片的路径(可选)*/
style:'101',
width:120,
height:30
};
var s = [];
for(var i in p){
s.push(i + '=' + encodeURIComponent(p[i]||''));
}
document.write(['<a version="1.0" class="qzOpenerDiv" href="http://sns.qzone.qq.com/cgi-bin/qzshare/cgi_qzshare_onekey?',s.join('&'),'" target="_blank">分享</a>'].join(''));
})();
</script>

<script src="http://qzonestyle.gtimg.cn/qzone/app/qzlike/qzopensl.js#jsdate=20111201" charset="utf-8"></script>
<br>马上关注 鲁大学生网，获取最新最牛逼咨询！<br />
<iframe src="http://open.qzone.qq.com/like?url=http%3A%2F%2Fuser.qzone.qq.com%2F1307183747&type=button&width=400&height=30&style=3" allowtransparency="true" scrolling="no" border="0" frameborder="0" style="width:62px;height:22px;border:none;overflow:hidden;"></iframe>
				</div>
		 <?php }else{ ?>
		 马上关注 鲁大学生网认证空间，获取最新最牛逼咨询！
<iframe src="http://open.qzone.qq.com/like?url=http%3A%2F%2Fuser.qzone.qq.com%2F1307183747&type=button&width=400&height=30&style=3" allowtransparency="true" scrolling="no" border="0" frameborder="0" style="width:62px;height:22px;border:none;overflow:hidden;"></iframe>
		<br>
		我点了你的名字，你也要完完整整的填写一份，并且@10位好朋友哦，一定要@我哦。<br>
		<a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'main','a'=>'in'),$_smarty_tpl);?>
" class="open">开始爬黑板</a>
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
			  <li class="c-in-ul-li">
		<a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'main','a'=>'in'),$_smarty_tpl);?>
" class="open">开始爬黑板</a></li>
		  </ul>
		  
		</div>
	<div class="footer">
	&copy; 2011-2014 LDSN.<a href="http://www.ldustu.com" target="_blank">鲁大学生网</a>
	<script src="http://s19.cnzz.com/stat.php?id=1253022913&web_id=1253022913" language="JavaScript"></script></div>

</div>
</body>
</html>

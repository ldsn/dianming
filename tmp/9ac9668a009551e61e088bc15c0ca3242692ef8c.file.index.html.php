<?php /* Smarty version Smarty-3.0.8, created on 2014-08-13 02:36:32
         compiled from "D:\phpStudy\WWW\dianming/tpl\index.html" */ ?>
<?php /*%%SmartyHeaderCode:498253ea5eb00dcd83-26252249%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9ac9668a009551e61e088bc15c0ca3242692ef8c' => 
    array (
      0 => 'D:\\phpStudy\\WWW\\dianming/tpl\\index.html',
      1 => 1407868590,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '498253ea5eb00dcd83-26252249',
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
*{margin:0px;padding:0px; list-style:none;text-decoration: none;}
body{
background:#000;
color:#fff;
}
.content{
	width:360px;
	margin:0 auto;
}
.login_a{display:block;width:230px;height:48px;margin:0 auto;margin-top:33px}
.footer{position:fixed;bottom:0;text-align:center; font-size:14px; color:#666666;}
span.year {
    color: #C9C9C9;
    font-size: 23px;
    font-weight: bold;
    font-family: youyuan,幼圆;
    position: absolute;
    top: 21px;
    left: 47px;
}
.title {
    margin-top: 27px;
    position: relative;
    width: 360px;
    height: 213px;
}
span.hot {
    font-size: 49px;
    position: absolute;
    top: 38px;
    left: 98px;
    color: #ff0000;
}
span.game {
    display: block;
    width: 52px;
    line-height: 34px;
    font-size: 34px;
    position: absolute;
    left: 217px;
    top: 70px;
    text-align: center;
    padding: 11px 1px;
    background: #D8E8FF;
    border-radius: 35px;
    color: #0052FF;
    font-weight: bold;
    box-shadow: inset 0px 1px 29px 6px  #000;
    font-family: youyuan,幼圆;
}
span.true {
    position: absolute;
    top: 89px;
    font-size: 15px;
    left: 59px;
    color: #ccc;
}
span.pq {
    position: absolute;
    top: 97px;
    right: 190px;
    font-size: 17px;
    color: #A57D00;
}
span.jd {
    position: absolute;  
    top: 113px;  
    left: 22px;  font-size: 17px;  
    color: #00A59E;
}
span.bwn {
    position: absolute;  
    top: 138px;  
    left: 38px;  
    font-size: 21px;  
    color: #A50098;
    width: 22px;
}
span.cdxq {
    position: absolute;  
    top: 154px;  
    left: 61px;  
    font-size: 37px;  
    color: #4E8004;
}
.dj{
display:block;
text-align:center;
}
</style>



</head>

<body>
<div class="content">
		<div class="title">
			<span class="game">点名游戏</span><span class="year">2014年</span>
			<span class="hot">最火的</span>
			<span class="true">你的心情</span><span class="pq">像一阵风？</span><span class="jd">是否还记得夕阳下的奔跑？</span><span class="bwn">把温暖</span><span class="cdxq">传递下去</span>
		
		</div>
		<a class="login_a" href="javascript:toQzoneLogin();"><img src="./include/login.png"></a>
		<span class="dj">点击登录进入答题</span>
		<div class="footer">© 2011-2014 LDSN.鲁大学生网,All rights reserved.<script src="http://s19.cnzz.com/stat.php?id=1253022913&amp;web_id=1253022913" language="JavaScript"></script></div>
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

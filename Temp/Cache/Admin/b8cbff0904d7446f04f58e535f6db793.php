<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
<link type="text/css" rel="stylesheet" href="../Public/css/login.css" />
<link type="text/css" rel="stylesheet" href="../Public/css/public.css" />
<script type="text/javascript">
window.onload = function(){
	var oHeight = screen.height;
	var oDiv = (oHeight-500)/2;
	var oLogin = document.getElementById("oLogin");
	oLogin.style.marginTop =  oDiv+'px';
}
</script>
</head>

<body>
	<div class="login" id="oLogin">
    	<div class="log">
        <form action="<?php echo U(GROUP_NAME.'/Public/checkLogin');?>" id="loginform" method="post">
            <div class="log01">
                <div class="log02">
                    <span>用户名：</span>
                    <div class="log03"><input type="text" name="username" id="inputForm" /></div>
                    <div class="clear"></div>
                </div>
                <div class="log02">
                    <span>密&nbsp;&nbsp;码：</span>
                    <div class="log03"><input type="password" name="password" id="inputForm" /></div>
                    <div class="clear"></div>
                </div>
                <div class="log02">
                    <span>验证码：</span>
                    <div class="log03">
                        <label><input type="text" id="inputForm3" name="verify" /></label>
                        <label><a href="javascript:void(0);" onclick="javascript:document.getElementById('code').src='<?php echo U('Public/verify');?>?rnd='+Math.random();var $$$$t=0;" style="color:#ffb100;"><img src="<?php echo U('Public/verify');?>" width="48" height="22" align="absmiddle" id="code"/></a></label>
                        <div class="clear"></div>
                    </div>
                    <div class="clear"></div>
                </div>
                <div class="log02">
                    <div class="log03" style="margin-left:50px;_margin-left:25px; margin-top:20px;">
                    	<label><input type="image" src="../Public/images/log.jpg" /></label>
                        <label><a href="javascript:document.getElementById('loginform').reset();"><img src="../Public/images/res.jpg" style="border:none;"/></a></label>
                    </div>
                </div>
                <div class="clear"></div>
            </div>
        </form>
        </div>
        <div class="shadow"><img src="../Public/images/shadow.png" /></div>
    </div>
</body>
</html>
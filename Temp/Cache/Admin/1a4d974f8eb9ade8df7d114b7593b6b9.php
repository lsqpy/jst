<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>内容管理系统</title>
<style>
body
{
  scrollbar-base-color:#C0D586;
  scrollbar-arrow-color:#FFFFFF;
  scrollbar-shadow-color:DEEFC6;
}
</style>
</head>
<frameset rows="121,*" cols="*" frameborder="no" border="0" framespacing="0">
  <frame src="<?php echo U(GROUP_NAME.'/Public/top');?>" name="topFrame" id="topFrame" scrolling="no">
  <frameset cols="190,*" name="btFrame" id="btFrame" frameborder="NO" border="0" framespacing="0">
    <frame src="<?php echo U(GROUP_NAME.'/Public/left');?>" noresize name="left" scrolling="no">
    <frame src="<?php echo U(GROUP_NAME.'/Index/main');?>" noresize name="main" scrolling="yes">
  </frameset>
</frameset>
<noframes>
<body>您的浏览器不支持框架！</body>
</noframes>
</html>
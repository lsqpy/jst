<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
<link href="../Public/css/public.css" rel="stylesheet" type="text/css" />
<link href="../Public/css/style.css" rel="stylesheet" type="text/css" />
</head>

<body>
	<!--头部内容-->
	<div class="header">
    	<div class="head">
        	<div class="header01"><img src="../Public/images/logo.jpg" /></div>
            <div class="header06"><p>您好：<?php echo ($username); ?>，欢迎使用管理系统！今天是<?php echo date("Y-m-d");?></p></div>
            <div class="header02">
            	<ul class="header03">
                	<li><a href="javascript:history.go(-1);" class="retreat">后退</a></li>
                    <li><a href="javascript:parent.history.go(-0);" class="refresh">刷新</a></li>
                    <li><a href="javascript:history.go(+1);" class="go">前进</a></li>
                </ul>
                <ul class="header04">
                	<li><a href="__APP__" class="index" target="_blank">网站主页</a></li>
                    <li><a target="_parent" href="<?php echo U('Public/logout');?>" class="zhuxiao">注销退出</a></li>
                    <div class="clear"></div>
                </ul>
                <div class="clear"></div>
            </div>
            <div class="clear"></div>
        </div>
        <div class="header05">
        	
            <div class="menu">
            	<ul>
                <?php if(is_array($toplist)): $i = 0; $__LIST__ = $toplist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li><a target="left" href="<?php echo U('Public/left',array('id'=>$vo['id']));?>" ><?php echo ($vo["title"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
                    <div class="clear"></div>
                </ul>
                <div class="clear"></div>
            </div>
            <div class="clear"></div>
        </div>
    </div>
    <!--中间内容-->
     
    <!--底部导航-->
    
</body>
</html>
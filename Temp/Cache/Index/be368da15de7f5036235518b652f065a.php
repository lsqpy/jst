<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php echo W('Seo');?>
<link rel="stylesheet" type="text/css" href="__PUBLIC__/style/public.css"/>
<link rel="stylesheet" type="text/css" href="__PUBLIC__/style/style.css"/>
</head>

<body>
	<div class="container">
    	<div class="head">
        	<div class="headerLayout">
            	<div class="menu">
	<ul>
    	<li><a href="<?php echo U('Index/index');?>" class="menuIndex <?php if(MODULE_NAME == Index && ACTION_NAME == index): ?>hover<?php endif; ?>"></a></li>
        <li><a href="<?php echo U('Experience/design');?>" class="menuTiyan <?php if(MODULE_NAME == Experience): ?>hover<?php endif; ?>"></a></li>
        <li><a href="<?php echo U('Shop/index');?>" class="menuShang <?php if(MODULE_NAME == Shop && ACTION_NAME == index): ?>hover<?php endif; ?>"></a></li>
        <li><a href="<?php echo U('About/index');?>" class="menuUs <?php if(MODULE_NAME == About && ACTION_NAME == index): ?>hover<?php endif; ?>"></a></li>
        <li><a href="http://www.channelfone.com/bbs.php" class="menuLuntan"></a></li>
        <li><a href="<?php echo U('Public/resgite');?>" class="resgite"></a></li>
        <li><a href="<?php echo U('Public/login');?>" class="login"></a></li>
        <div class="clear"></div>
    </ul>
</div>
            </div>
        	<div class="headerA"></div>
        </div>
        <div class="content">
        	<div class="layoutDiv">
            	<div class="layoutDivA">
                	<div class="layoutDivC">
                    	<p class="layoutDivC-p"></p>
                        <ul id="layoutDivUl">
                        	<li><a href="<?php echo U('Experience/design');?>">>超易用设计</a></li>
                            <li><a href="<?php echo U('Experience/performance');?>">>性能对比</a></li>
                            <li><a href="<?php echo U('Experience/functions');?>" class="hover">>其他功能</a></li>
                        </ul>
                    </div>
                </div>
                <div class="layoutDivB">
                	<div class="layoutDivD">
                    	<p class="layoutDivD-pC"></p>
                        <div class="layoutDivOther">
                        	<p><img src="__PUBLIC__/images/img16.jpg" /></p>
                            <p><img src="__PUBLIC__/images/img17.jpg" /></p>
                            <p><img src="__PUBLIC__/images/img18.jpg" /></p>
                            <p><img src="__PUBLIC__/images/img19.jpg" /></p>
                            <p><img src="__PUBLIC__/images/img20.jpg" /></p>
                            <p class="layoutDivOtherP"><img src="__PUBLIC__/images/img21.jpg" /></p>
                        </div>
                    </div>
                </div>
                <div class="clear"></div>
            </div>
            <div><img src="__PUBLIC__/images/layout1.jpg" /></div>
        </div>
        <div class="footer">
        	<p>版权所有:2009-2010 青牛(北京)技术有限公司 京ICP备10016421号-2</p>
        </div>
    </div>
</body>
</html>
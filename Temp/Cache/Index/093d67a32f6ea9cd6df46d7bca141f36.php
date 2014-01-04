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
        	<div class="headerBus">
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
        	<div class="mall">
            	<div class="mallDiv"><a href="#"><img src="__PUBLIC__/images/img24.jpg" /></a></div>
                <div class="mallMap">
                	<img src="__PUBLIC__/images/img2.png" border="0" usemap="#planetmap" alt="Planets" />
                    <map name="planetmap" id="planetmap">
                      <area shape="circle" coords="0,0,256,256" href ="taobao.html" alt="Venus" />
                      <area shape="circle" coords="256,256,300,300" href ="jd.html" alt="Venus" />
                      <area shape="circle" coords="300,300,480,480" href ="guomei.html" alt="Venus" />
                      <area shape="circle" coords="710,710,980,980" href ="suning.html" alt="Venus" />
                    </map>
                </div>
            </div>
            <div><img src="__PUBLIC__/images/layout1.jpg" /></div>
        </div>
        <div class="footer">
        	<p>版权所有:2009-2010 青牛(北京)技术有限公司 京ICP备10016421号-2</p>
        </div>
    </div>
</body>
</html>
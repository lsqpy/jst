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
        	<div class="header">
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
        	<div class="layout">
            	<div class="layoutInstr">
                	<p class="layoutTit">>关于家视通</p>
                    <div>
                    	<a href="#" class="layoutContA"><img src="__PUBLIC__/images/img.png" /></a>
                        <div class="layoutInstrDiv">
                        	家视通是全球首款家庭视频电话，它以运营级的视频通讯专用网络技术，结合老人、小孩都能便捷使用的专用终端，为广大家庭提供了绝对易用、高清晰、不卡的视频通讯服务。让千万家庭用户，以千元级的投入轻松享
                            受百万级的企业专网视频通讯服务，彻底颠覆现有网络视频聊天画面声音质量无法保障、老人小孩不会使用的局面，让亲情的沟通不因距离而遥远，让世界因“看见”而改变。
                        </div>
                        <div class="clear"></div>
                    </div>
                </div>
                <div class="layoutInstrA">
                	<p class="layoutTit">>产品演示</p>
                    <img src="__PUBLIC__/images/img1.jpg" />
                </div>
            </div>
            <div><img src="__PUBLIC__/images/layout.png" /></div>
            <div><img src="__PUBLIC__/images/layout1.jpg" /></div>
        </div>
        <div class="footer">
        	<p>版权所有:2009-2010 青牛(北京)技术有限公司 京ICP备10016421号-2</p>
        </div>
    </div>
</body>
</html>
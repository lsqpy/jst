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
        	<div class="headerUs">
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
                    	<p class="layoutDivUs-p"></p>
                        <ul id="layoutDivUl">
                        	<li><a href="#map1" class="hover">>青牛科技介绍</a></li>
                            <li><a href="#map2">>新闻中心</a></li>
                            <li><a href="#map3">>联系我们</a></li>
                        </ul>
                    </div>
                </div>
                <div class="layoutDivB">
                	<div class="layoutDivD">
                    	<p class="layoutDivUS-pA"></p>
                        <div class="aboutUs" id="map1">
                        	<p>青牛（北京）技术有限公司是国内领先的企业云服务提供商，具有13年的通讯及互联网核心技术积累和商业应用经验。凭借首屈一指的解决方案提供能力与
                            服务运营能力，青牛在视频会议、视频通讯、视频呼叫中心领域赢得了广泛赞誉，是有目共睹的行业领军</p>
                            <p>凭借在通讯、视频领域的积累以及行业领先的技术解决方案，青牛将大中型企业青睐的专业视频服务成功引入家庭，为普通消费者提供了非常易用、高清晰
                            、高可靠的家庭视频电话，使用户能够以千元级的投入轻松享受百万级的企业专网视频通讯服务，彻底颠覆了现有网络视频聊天画面声音质量无法保障、老人小孩
                            不会使用的局面，让千万家庭的沟通方式因“看见”而改变。 </p>
                        </div>
                        <p class="layoutDivUS-pB"></p>
                        <div class="aboutUsDiv" id="map2">
                        	<ul>
                                <?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li>
                                	<span class="aboutUsSpan">></span><span class="aboutUsSpanA"><?php echo getArticleColumn($vo['cid']);?></span>
                                    <span class="aboutUsSpanB">
                                        <a href="<?php echo U('News/content',array('id'=>$vo['id']));?>" target="_blank" style="color: <?php echo ($vo["color"]); ?>;"><?php if($vo[brieftitle]): echo ($vo["brieftitle"]); else: echo ($vo["title"]); endif; ?></a>
                                    </span>
                                    <span class="aboutusSpanC"> <?php echo (date('Y/ m/d',$vo["addtime"])); ?></span>
                                </li><?php endforeach; endif; else: echo "" ;endif; ?>
                                
                                <div class="clear"></div>
                            </ul>
                            <div class="clear"></div>
                            <p class="aboutusSpanA"><a href="<?php echo U('About/index');?>">更多>></a></p>
                            <div class="clear"></div>
                        </div>
                        <p class="layoutDivUS-pC"></p>
                        <div class="aboutUsDivA" id="map3">
                        	<p>客服邮箱:<?php echo ($info["email"]); ?></p>
                            <p>地址: <?php echo ($info["address"]); ?></p>
                            <p>邮政编码:<?php echo ($info["zipcode"]); ?></p>
                            <p>电话:<?php echo ($info["tel"]); ?></p>
                            <p>传真:<?php echo ($info["fax"]); ?> </p>
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
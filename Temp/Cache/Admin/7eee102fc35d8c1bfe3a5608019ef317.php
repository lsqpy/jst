<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
<link href="../Public/css/public.css" rel="stylesheet" type="text/css" />
<link href="../Public/css/style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="__PUBLIC__/Common/js/jquery-1.4.2.js"></script>
<script type="text/javascript" src="../Public/js/left.js"></script>
</head>
<!---->
<body style="background-color:#e5e8eb;" onload="parent.main.location='?g=<?php echo ($leftlist[0]['group']); ?>&m=<?php echo ($leftlist[0]['module']); ?>&a=<?php echo ($leftlist[0]['action']); ?>'">
    <!--中间内容左边内容-->
     <table width="100%" height="100%" cellpadding="0" cellspacing="0" border="0">
     	<tr>
        	<td valign="top">
            	<div class="leftCon">
                	<div id="leftCont">
                    	<div class="leftCon01"></div>
                        <div class="leftCon01">
                            <ul>
                                <li><p>常用操作</p></li>
                                <li id="topBtn"><img src="../Public/images/top.jpg" /></li>
                                <div class="clear"></div>
                            </ul>
                            <div class="clear"></div>
                        </div>
                        <div class="leftCon02" id="showDiv">
                            <ul>
                            <?php if(is_array($leftlist)): $i = 0; $__LIST__ = $leftlist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li><a href="<?php echo U("$vo[group]/$vo[module]/$vo[action]");?>" target='main'><?php echo ($vo["title"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
                            <!--li><a href="<?php echo U("Deal/index");?>" target='main'>成交</a></li-->
                            </ul>
                        </div>
                    </div>
                    <div class="left" id="showLeft"><img src="../Public/images/left.jpg" /></div>
                </div>
            </td>
        </tr>
     </table>
</body>
</html>
<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
<link href="../Public/css/public.css" rel="stylesheet" type="text/css" />
<link href="../Public/css/style.css" rel="stylesheet" type="text/css" />

</head>

<body topmargin="10" leftmargin="10">
    <!--中间内容左边内容-->
     <table width="98%" height="100%" cellpadding="0" cellspacing="0" border="0" align="center" style="margin:0 auto;">
     	<tr>
        	<td>
            	<div class="right"><p style="background:url(../Public/images/weizhi.jpg) no-repeat 0px 14px;"> 当前位置： &nbsp;>&nbsp;编辑&nbsp;>&nbsp;</p></div>
            </td>
        </tr>
     </table>
     <form action="<?php echo U('Urlset/doEdit');?>" method="post" enctype="multipart/form-data">
     
     <table width="98%" height="100%" cellpadding="0" cellspacing="0" align="center" class="rightCon">
     	<tr>
        	<td class="right02" colspan="2" style="text-align:left; border-bottom:#b9c8d6 1px solid;"><span>URL配置</span></td>
        </tr>
 
        <tr>
        	<td width="15%" align="center">URL模式</td>
            <td width="85%">
                <input type="radio" <?php if(($info["URL_MODEL"]) == "0"): ?>checked="checked"<?php endif; ?> value="0" name="URL_MODEL" />普通模式
                <input type="radio" <?php if(($info["URL_MODEL"]) == "1"): ?>checked="checked"<?php endif; ?> value="1" name="URL_MODEL" />PATHINFO模式
                <input type="radio" <?php if(($info["URL_MODEL"]) == "2"): ?>checked="checked"<?php endif; ?> value="2" name="URL_MODEL" />REWRITE模式
                <input type="radio" <?php if(($info["URL_MODEL"]) == "3"): ?>checked="checked"<?php endif; ?> value="3" name="URL_MODEL" />兼容模式
                <!--
                <br />
                &nbsp;普通模式:http://serverName/appName/?m=module&a=action&id=1
                <br />
                &nbsp;PATHINFO模式:http://serverName/appName/module/action/id/1/
                <br />
                &nbsp;REWRITE模式:http://serverName/appName/module-action-id-1/
                <br />
                &nbsp;兼容模式:http://serverName/appName/?s=/module/action/id/1/
                -->
            </td>
        </tr>
        <tr>
        	<td width="15%" align="center">URL不区分大小写 </td>
            <td width="85%">
                <input type="radio" <?php if(($info["URL_CASE_INSENSITIVE"]) == "true"): ?>checked="checked"<?php endif; ?> value="true" name="URL_CASE_INSENSITIVE"/>是
                <input type="radio" <?php if(($info["URL_CASE_INSENSITIVE"]) == "false"): ?>checked="checked"<?php endif; ?> value="false" name="URL_CASE_INSENSITIVE"/>否
            </td>
        </tr>
        <tr>
        	<td width="15%" align="center">URL伪静态后缀</td>
            <td width="85%">
                <input type="text" value="<?php echo ($info["URL_HTML_SUFFIX"]); ?>" name="URL_HTML_SUFFIX" class="rightCon02" />
            </td>
        </tr>
        
        <tr>
        	<td colspan="2" align="center" style="background-color:#eef1f3; height:29px; line-height:29px; vertical-align:middle;"><input type="image" src="../Public/images/sub.jpg" /></td>
        </tr>
     </table>
     </form>
     
     
     
     <table id="table_form" width="98%" height="100%" cellpadding="0" cellspacing="0" align="center" class="rightList03">
     	<tr>
        	<td class="right02" colspan="14" style="text-align:left; border-bottom:#b9c8d6 1px solid;"><span></span></td>
        </tr>
        <tr>
        
            <td width="10%" style="background-color:#eef1f3; border:none;">路由规则</td>
            <td width="10%" style="background-color:#eef1f3; border:none;">路由参数</td>
            <td width="10%" style="background-color:#eef1f3; border:none;">操作</td>
        </tr>
        <?php if(is_array($route)): foreach($route as $key=>$v): ?><tr>
        
            <td><?php echo ($key); ?></td>
            <td><?php echo ($v); ?></td>
            <td align="center">
                <a href="<?php echo U('Urlset/routedel',array('key'=>$key));?>" >[删除]</a> 
                <div class="clear"></div>
            </td>
        </tr><?php endforeach; endif; ?>
        
     </table>
     <form action="<?php echo U('Urlset/urlEdit');?>" method="post" enctype="multipart/form-data">
     <table width="98%" height="100%" cellpadding="0" cellspacing="0" align="center" class="rightCon">
     	<tr>
        	<td class="right02" colspan="2" style="text-align:left; border-bottom:#b9c8d6 1px solid;"><span>URL路由配置</span></td>
        </tr>
 
        <tr>
        	<td width="15%" align="center">路由规则 </td>
            <td width="85%">
                <input type="text"  name="rule" class="rightCon01" />
            </td>
        </tr>
        <tr>
        	<td width="15%" align="center">路由参数</td>
            <td width="85%">
                <input type="text"  name="parameters" class="rightCon01" />
            </td>
        </tr>
        
        <tr>
        	<td colspan="2" align="center" style="background-color:#eef1f3; height:29px; line-height:29px; vertical-align:middle;"><input type="image" src="../Public/images/sub.jpg" /></td>
        </tr>
     </table>
     </form>
</body>
</html>
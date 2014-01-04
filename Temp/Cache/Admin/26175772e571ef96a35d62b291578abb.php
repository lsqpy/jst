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
            	<div class="right"><p style="background:url(../Public/images/weizhi.jpg) no-repeat 0px 14px;"> 当前位置：<?php if(isset($info["id"])): ?><input type="hidden" name="id" value="<?php echo ($info["id"]); ?>" /><?php echo ($node["name"]); else: echo (str_replace('修改','添加',$node["name"])); endif; ?>&nbsp;>&nbsp;<?php if(isset($info["id"])): ?>修改<?php else: ?>添加<?php endif; ?>&nbsp;>&nbsp;<?php echo ($info["name"]); ?></p></div>
            </td>
        </tr>
     </table>
     <form action="<?php echo U('Articlecolumn/doAdd');?>" method="post" enctype="multipart/form-data">
     
     <table width="98%" height="100%" cellpadding="0" cellspacing="0" align="center" class="rightCon">
     	<tr>
        	<td class="right02" colspan="2" style="text-align:left; border-bottom:#b9c8d6 1px solid;"><span>添加</span></td>
        </tr>
        
        <tr>
        	<td width="15%" align="center">栏目分类：</td>
            <td width="85%">
                <select name="pid" class="rightCon02" style="width:auto;padding:2px;">
                    <option value="0">TOP、顶级分类</option>
                    <?php if(is_array($cate)): $i = 0; $__LIST__ = $cate;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value="<?php echo ($vo["id"]); ?>"><?php echo ($vo["level"]); ?>、<?php echo ($vo["html"]); echo ($vo["name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
                </select>
            </td>
        </tr>
        <tr>
        	<td width="15%" align="center">栏目名称：</td>
            <td width="85%"><input type="text" value="<?php echo ($info["name"]); ?>" name="name" class="rightCon01" /></td>
        </tr>
        <tr>
        	<td width="15%" align="center">显示：</td>
            <td width="85%">
            
                &nbsp;显示&nbsp;<input name="isshow" <?php if(!isset($info["isshow"])): ?>checked="checked"<?php endif; if(($info["isshow"]) == "1"): ?>checked="checked"<?php endif; ?> type="radio" value="1"/>
                &nbsp;隐藏&nbsp;<input name="isshow" <?php if(($info["isshow"]) == "0"): ?>checked="checked"<?php endif; ?> type="radio" value="0"/>
            
            </td>
        </tr>
        
        <tr>
        	<td width="15%" align="center">排序：</td>
            <td width="85%"><input type="text" value="<?php echo ($info["sort"]); ?>" name="sort" class="rightCon02" /></td>
        </tr>

        <tr>
        	<td width="15%" align="center">状态：</td>
            <td width="85%">
            
                &nbsp;审核&nbsp;<input name="status" <?php if(!isset($info["status"])): ?>checked="checked"<?php endif; if(($info["status"]) == "1"): ?>checked="checked"<?php endif; ?> type="radio" value="1"/>
                &nbsp;屏蔽&nbsp;<input name="status" <?php if(($info["status"]) == "0"): ?>checked="checked"<?php endif; ?> type="radio" value="0"/>
            
            </td>
        </tr>
        
        <tr>
        	<td colspan="2" align="center" style="background-color:#eef1f3; height:29px; line-height:29px; vertical-align:middle;"><input type="image" src="../Public/images/sub.jpg" /></td>
        </tr>
     </table>
     </form>
</body>
</html>
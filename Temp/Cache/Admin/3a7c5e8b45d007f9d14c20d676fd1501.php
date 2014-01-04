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
            	<div class="right"><p style="background:url(../Public/images/weizhi.jpg) no-repeat 0px 14px;"> 当前位置：权限&nbsp;>&nbsp;</p></div>
            </td>
        </tr>
     </table>
     <form action="<?php echo U('AuthGroup/doRole');?>" method="post" enctype="multipart/form-data">
     <input type="hidden" name="id" value="<?php echo ($_GET['id']); ?>" />
     <table width="98%" height="100%" cellpadding="0" cellspacing="0" align="center" class="rightCon">
     	<tr>
        	<td class="right02" colspan="2" style="text-align:left; border-bottom:#b9c8d6 1px solid;"><span>权限</span></td>
        </tr>
        <tr>
        	<td width="15%" align="center">分配权限</td>
            <td width="85%">
                
                <?php if(is_array($data)): foreach($data as $key=>$value): ?><dl id="tp1" style="background: blue;">
                    &nbsp;<input type="checkbox" value="<?php echo ($value["id"]); ?>" name="access[]" <?php if($value["access"] == 1): ?>checked="checked"<?php endif; ?> /><?php echo ($value["title"]); ?>-(<?php echo ($value["group"]); ?>)
                </dl>
                    <?php if(is_array($value["child"])): foreach($value["child"] as $key=>$val): ?><dt id="tp2" style="background:lime;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" value="<?php echo ($val["id"]); ?>" name="access[]" <?php if($val["access"] == 1): ?>checked="checked"<?php endif; ?> /><?php echo ($val["title"]); ?>-(<?php echo ($val["group"]); ?>-<?php echo ($val["module"]); ?>)</li>
                        
                        <?php if(is_array($val["child"])): foreach($val["child"] as $key=>$v): ?><dd id="tp3" style="background:silver;">
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <input type="checkbox" value="<?php echo ($v["id"]); ?>" name="access[]" <?php if($v["access"] == 1): ?>checked="checked"<?php endif; ?> /><?php echo ($v["title"]); ?>-(<?php echo ($v["group"]); ?>-<?php echo ($v["module"]); ?>-<?php echo ($v["action"]); ?>)
                           
                        </dd><?php endforeach; endif; ?>
                        </dt><?php endforeach; endif; endforeach; endif; ?>
                
                </td>
        </tr>
        
        
        <tr>
        	<td colspan="2" align="center" style="background-color:#eef1f3; height:29px; line-height:29px; vertical-align:middle;"><input type="image" src="../Public/images/sub.jpg" /></td>
        </tr>
     </table>
     
     </form>
     
</body>
</html>
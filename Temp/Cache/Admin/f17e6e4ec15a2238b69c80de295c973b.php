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
            	<div class="right"><p style="background:url(../Public/images/weizhi.jpg) no-repeat 0px 14px;"> 当前位置： &nbsp;>&nbsp;添加&nbsp;>&nbsp;</p></div>
            </td>
        </tr>
     </table>
     <form action="<?php echo U('Node/doAdd');?>" method="post" enctype="multipart/form-data">
     <input type="hidden" name="pid" value="0" />
     <input type="hidden" name="level" value="1" />
     <table width="98%" height="100%" cellpadding="0" cellspacing="0" align="center" class="rightCon">
     	<tr>
        	<td class="right02" colspan="2" style="text-align:left; border-bottom:#b9c8d6 1px solid;"><span>添加</span></td>
        </tr>
 
        <tr>
        	<td width="15%" align="center">PID</td>
            <td width="85%">
            <select name="pid" class="rightCon01 select" >
                <option value="0">顶级PID - TOP</option>
                <?php if(is_array($cate)): $i = 0; $__LIST__ = $cate;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val): $mod = ($i % 2 );++$i;?><option value="<?php echo ($val["id"]); ?>">&nbsp;&nbsp;┗<?php echo ($val["title"]); ?> - <?php echo ($val["group"]); ?> - <?php echo ($val["module"]); ?></option>
           
                    <?php if(is_array($val['child'])): $i = 0; $__LIST__ = $val['child'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><option value="<?php echo ($v["id"]); ?>">&nbsp;&nbsp;&nbsp;&nbsp;┗<?php echo ($v["title"]); ?> - <?php echo ($v["group"]); ?> - <?php echo ($v["module"]); ?></option><?php endforeach; endif; else: echo "" ;endif; endforeach; endif; else: echo "" ;endif; ?>
            </select>
            </td>
        </tr>
        
        <tr>
        	<td width="15%" align="center">组ID</td>
            <td width="85%"><input type="text" value="" name="gid" class="rightCon02" /></td>
        </tr>
        <tr>
        	<td width="15%" align="center">名称</td>
            <td width="85%">
                <input type="text" value="" name="title" class="rightCon01" />
            </td>
        </tr>
        <tr>
        	<td width="15%" align="center">项目节点</td>
            <td width="85%">
                <input type="text" value="" name="group" class="rightCon01" />
            </td>
        </tr>
        <tr>
        	<td width="15%" align="center">模型节点</td>
            <td width="85%">
                <input type="text" value="" name="module" class="rightCon01" />
            </td>
        </tr>
        <tr>
        	<td width="15%" align="center">控制器节点</td>
            <td width="85%">
                <input type="text" value="" name="action" class="rightCon01" />
            </td>
        </tr>
        <tr>
        	<td width="15%" align="center">级别</td>
            <td width="85%"><input type="text" value="" name="level" class="rightCon01" /></td>
        </tr>
        <tr>
        	<td width="15%" align="center">显示导航栏</td>
            <td width="85%">
            &nbsp;是 <input type="radio" value="1" name="show"/>
            &nbsp;否 <input type="radio" value="0" name="show" checked="checked"/>
            </td>
        </tr>
        <tr>
        	<td width="15%" align="center">备注</td>
            <td width="85%">
                <div style="margin: 5px;">
                    <textarea name="remark" style="width: 322px; height:70px;font-size:12px;"></textarea>
                </div>
            </td>
        </tr>
        
        <tr>
        	<td width="15%" align="center">排序</td>
            <td width="85%">
                <input type="text" value="" name="sort" class="rightCon02" style="width: 50px;" />
            </td>
        </tr>
        <tr>
        	<td width="15%" align="center">状态：</td>
            <td width="85%">
            
                &nbsp;启动&nbsp;<input name="status" type="radio" value="1" checked="checked" />
                &nbsp;关闭&nbsp;<input name="status" type="radio" value="0"/>
            
            </td>
        </tr>
        
        <tr>
        	<td colspan="2" align="center" style="background-color:#eef1f3; height:29px; line-height:29px; vertical-align:middle;"><input type="image" src="../Public/images/sub.jpg" /></td>
        </tr>
     </table>
     </form>
</body>
</html>
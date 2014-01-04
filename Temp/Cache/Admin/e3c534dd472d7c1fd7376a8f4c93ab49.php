<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
<link href="../Public/css/public.css" rel="stylesheet" type="text/css" />
<link href="../Public/css/style.css" rel="stylesheet" type="text/css" />

<script src="__PUBLIC__/js/jquery-1.4.2.js" type="text/javascript"></script>
<script type="text/javascript">
    URL= window.UEDITOR_HOME_URL = "../Public/ueditor/";
    window.onload=function(){
        window.UEDITOR_CONFIG.imageUrl = "<?php echo U('Article/upload');?>";         //图片上传提交地址
        window.UEDITOR_CONFIG.imagePath = "/uploads/";                     //图片修正地址，引用了fixedImagePath,如有特殊需求，可自行配置
    
        UE.getEditor('myEditor');
    }
</script> 
<script type="text/javascript" src="../Public/ueditor/ueditor.config.js"></script>
<script type="text/javascript" src="../Public/ueditor/ueditor.all.min.js"></script> 

</head>

<body topmargin="10" leftmargin="10">
    <!--中间内容左边内容-->
     <table width="98%" height="100%" cellpadding="0" cellspacing="0" border="0" align="center" style="margin:0 auto;">
     	<tr>
        	<td>
            	<div class="right"><p style="background:url(../Public/images/weizhi.jpg) no-repeat 0px 14px;"> 当前位置：添加&nbsp;>&nbsp;</p></div>
            </td>
        </tr>
     </table>
     
     <form action="<?php echo U('Article/doAdd');?>" method="post" enctype="multipart/form-data">
     <?php if(isset($info["id"])): ?><input type="hidden" name="id" value="<?php echo ($info["id"]); ?>" /><?php endif; ?>
     <table width="98%" height="100%" cellpadding="0" cellspacing="0" align="center" class="rightCon">
     	<tr>
        	<td class="right02" colspan="2" style="text-align:left; border-bottom:#b9c8d6 1px solid;">
                <span>添加</span>
                &nbsp;&nbsp;
                
            </td>
        </tr>
        
        <tr>
        	<td width="15%" align="center">文章标题</td>
            <td width="85%">
                <input type="text" value="<?php echo ($info["title"]); ?>" name="title" class="rightCon01" style="color:<?php echo ($info["color"]); ?>" />
                <input name="color" id="color" type="hidden" value="<?php echo ($info["color"]); ?>"/>
                <img border='0' src="../Public/images/Rect.gif" style="cursor:pointer;" title="选取标题颜色" align="absmiddle" id="colorpicker">&nbsp;
                <span class="note">注：最多90个字符</span>
                &nbsp;
                &nbsp;短标题&nbsp;
                <input type="text" value="<?php echo ($info["brieftitle"]); ?>" name="brieftitle" class="rightCon02" style="width:200px;"/>
            </td>
        </tr>
        <tr>
        	<td width="15%" align="center">属性</td>
            <td width="85%">
                &nbsp;推荐<input type="checkbox" value="1" name="aid[]"/>
                &nbsp;精华<input type="checkbox" value="2" name="aid[]"/>
                &nbsp;置顶<input type="checkbox" value="3" name="aid[]"/>
            </td>
        </tr>
        <tr>
        	<td width="15%" align="center">URL外链地址</td>
            <td width="85%">
                <input type="text" value="<?php echo ($info["redirecturl"]); ?>" class="rightCon01" name="redirecturl"/>&nbsp;如无请空
            </td>
        </tr>
        <tr>
        	<td width="15%" align="center">文章栏目</td>
            <td width="85%">
                <select name="cid" class="rightCon02" style="width:200px;" >
                <option value="0">请选择栏目</option>
                <?php if(is_array($cate)): $i = 0; $__LIST__ = $cate;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value="<?php echo ($vo["id"]); ?>"><?php echo ($vo["level"]); ?>、<?php echo ($vo["html"]); echo ($vo["name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
                </select>
            </td>
        </tr>
        <tr>
        	<td width="15%" align="center">缩略图</td>
            <td width="85%">
                <input name="litpic" type="file" class="rightCon02" value="<?php echo ($info["litpic"]); ?>"/>
            </td>
        </tr>
        <tr>
        	<td width="15%" align="center">关键字</td>
            <td width="85%">
                <input name="keywords" type="text" class="rightCon01" value="<?php echo ($info["keywords"]); ?>"/>
            </td>
        </tr>
        <tr>
        	<td width="15%" align="center">文章摘要</td>
            <td width="85%">
                <div style="margin: 5px;"><textarea name="description" style="width:50%;height:50px;font-size:12px;"><?php echo ($info["description"]); ?></textarea></div>
            </td>
        </tr>
        <tr>
        	<td width="15%" align="center">内容</td>
            <td width="85%">
                <div style="margin: 5px;" ><textarea id="myEditor" name="content" style="width:99%;height:300px;"><?php echo ($info["content"]); ?></textarea></div>
 
            </td>
        </tr>
        <tr>
        	<td width="15%" align="center">点击数</td>
            <td width="85%"><input type="text" value="<?php echo ($info["hits"]); ?>" name="hits" class="rightCon02" /></td>
        </tr>
        <tr>
        	<td width="15%" align="center">审核：</td>
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
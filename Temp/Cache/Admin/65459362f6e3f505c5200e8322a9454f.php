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
        window.UEDITOR_CONFIG.imagePath = "/uploads";                //图片修正地址，引用了fixedImagePath,如有特殊需求，可自行配置
    
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
            	<div class="right"><p style="background:url(../Public/images/weizhi.jpg) no-repeat 0px 14px;"> 当前位置： &nbsp;>&nbsp;编辑&nbsp;>&nbsp;</p></div>
            </td>
        </tr>
     </table>
     <form action="<?php echo U('Emailset/doEdit');?>" method="post" enctype="multipart/form-data">
     
     <table width="98%" height="100%" cellpadding="0" cellspacing="0" align="center" class="rightCon">
     	<tr>
        	<td class="right02" colspan="2" style="text-align:left; border-bottom:#b9c8d6 1px solid;"><span>Email配置</span></td>
        </tr>
 
        <tr>
        	<td width="15%" align="center">邮局域名</td>
            <td width="85%">
                <input type="text" value="<?php echo ($info["host"]); ?>" name="host" class="rightCon01" />
                &nbsp;例：smtp.qq.com
            </td>
        </tr>
        <tr>
        	<td width="15%" align="center">端口号</td>
            <td width="85%">
                <input type="text" value="<?php echo ($info["port"]); ?>" name="port" class="rightCon02" />
                &nbsp;默认：25
            </td>
        </tr>
        <tr>
        	<td width="15%" align="center">邮局用户名</td>
            <td width="85%">
                <input type="text" value="<?php echo ($info["username"]); ?>" name="username" class="rightCon01" />
                &nbsp;您的邮箱，例：121212@qq.com
            </td>
        </tr>
        <tr>
        	<td width="15%" align="center">邮局密码</td>
            <td width="85%">
                <input type="password" value="<?php echo ($info["password"]); ?>" name="password" class="rightCon01" />
                &nbsp;您的密码
            </td>
        </tr>
        
        <tr>
        	<td colspan="2" align="center" style="background-color:#eef1f3; height:29px; line-height:29px; vertical-align:middle;"><input type="image" src="../Public/images/sub.jpg" /></td>
        </tr>
     </table>
     </form>
     
     <form action="<?php echo U('Emailset/send');?>" method="post" enctype="multipart/form-data">
     
     <table width="98%" height="100%" cellpadding="0" cellspacing="0" align="center" class="rightCon">
     	<tr>
        	<td class="right02" colspan="2" style="text-align:left; border-bottom:#b9c8d6 1px solid;"><span>发送Email</span></td>
        </tr>
 
        <tr>
        	<td width="15%" align="center">收件人</td>
            <td width="85%">
                <input type="text" value="<?php echo ($info["mailto"]); ?>" name="mailto" class="rightCon01" />
                &nbsp;发送多人时请用英文“,”隔开
            </td>
        </tr>
        <tr>
        	<td width="15%" align="center">主题</td>
            <td width="85%">
                <input type="text" value="<?php echo ($info["subject"]); ?>" name="subject" class="rightCon01" />
            </td>
        </tr>
        <tr>
        	<td width="15%" align="center">内容</td>
            <td width="85%">
                <div style="margin: 5px;" ><textarea id="myEditor" name="body" style="width:99%;height:300px;"><?php echo ($info["body"]); ?></textarea></div>
            </td>
        </tr>
        <tr>
        	<td width="15%" align="center">格式</td>
            <td width="85%">
                
                &nbsp;HTML&nbsp;<input name="type" checked="checked" type="radio" value="HTML"/>
                &nbsp;TXT&nbsp;<input name="type" type="radio" value="TXT"/>
            
            </td>
        </tr>
        
        <tr>
        	<td colspan="2" align="center" style="background-color:#eef1f3; height:29px; line-height:29px; vertical-align:middle;"><input type="image" src="../Public/images/sub.jpg" /></td>
        </tr>
     </table>
     </form>
</body>
</html>
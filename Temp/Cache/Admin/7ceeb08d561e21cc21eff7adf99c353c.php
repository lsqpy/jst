<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
<link href="../Public/css/public.css" rel="stylesheet" type="text/css" />
<link href="../Public/css/style.css" rel="stylesheet" type="text/css" />
<script src="__PUBLIC__/js/jquery-1.4.2.js" type="text/javascript"></script>
<script>
$(function(){
    $("#province").change(function(){
        var pid = $(this).val();
        var url = '<?php echo U("Member/area");?>';
        $.post(url,{'pid':pid},function(data){
            $("#city").html("<option>请选择</option>");
            $("#area").html("<option>请选择</option>");
            $("#city").append(data);
        });
    }); 
    
    $("#city").change(function(){
        var pid = $(this).val();
        var url = '<?php echo U("Member/area");?>';
        $.post(url,{'pid':pid},function(data){
            $("#area").html("<option>请选择</option>");
            $("#area").append(data);
        });
    });
});
</script>
</head>

<body topmargin="10" leftmargin="10">
    <!--中间内容左边内容-->
     <table width="98%" height="100%" cellpadding="0" cellspacing="0" border="0" align="center" style="margin:0 auto;">
     	<tr>
        	<td>
            	<div class="right"><p style="background:url(../Public/images/weizhi.jpg) no-repeat 0px 14px;"> 当前位置：<?php echo ($node["name"]); ?> &nbsp;>&nbsp;添加&nbsp;>&nbsp;<?php echo ($info["username"]); ?></p></div>
            </td>
        </tr>
     </table>
     <form action="<?php echo U('Member/doEdit');?>" method="post" enctype="multipart/form-data">
     <input type="hidden" name="id" value="<?php echo ($info["id"]); ?>"/>
     <table width="98%" height="100%" cellpadding="0" cellspacing="0" align="center" class="rightCon">
     	<tr>
        	<td class="right02" colspan="2" style="text-align:left; border-bottom:#b9c8d6 1px solid;"><span><?php if(isset($info["id"])): ?><input type="hidden" name="id" value="<?php echo ($info["id"]); ?>" /><?php echo ($node["name"]); else: echo (str_replace('修改','添加',$node["name"])); endif; ?></span></td>
        </tr>
        <tr>
        	<td width="15%" align="center">用户名</td>
            <td width="85%"><input type="text" value="<?php echo ($info["username"]); ?>" name="username" class="rightCon02"/></td>
        </tr>
        <tr>
        	<td width="15%" align="center">密码</td>
            <td width="85%">
                <input type="text" value="<?php echo ($info["password"]); ?>" name="password" class="rightCon02" style="width:200px;" />
            </td>
        </tr>
        
        <tr>
        	<td width="15%" align="center">联系人</td>
            <td width="85%">
                <input type="text" value="<?php echo ($info["contact"]); ?>" name="contact" class="rightCon02" />
            </td>
        </tr>
        <tr>
        	<td width="15%" align="center">手机号</td>
            <td width="85%">
                <input type="text" value="<?php echo ($info["phone"]); ?>" name="phone" class="rightCon02" />
            </td>
        </tr>
        <tr>
        	<td width="15%" align="center">电子邮件</td>
            <td width="85%">
                <input type="text" value="<?php echo ($info["email"]); ?>" name="email" class="rightCon01" />
            </td>
        </tr>
        <tr>
        	<td width="15%" align="center">所在地</td>
            <td width="85%">
                <select name="province" id="province">
                    <option>请选择</option>
                    <?php echo W('Area',array('pid'=>0,'id'=>$info['province']));?>
                </select>
                
                <select name="city" id="city">
                    <option>请选择</option>
                    <?php echo W('Area',array('pid'=>$info['province'],'id'=>$info['city']));?>
                </select>
                
                <select name="area" id="area">
                    <option>请选择</option>
                    <?php echo W('Area',array('pid'=>$info['city'],'id'=>$info['area']));?>
                </select>
            </td>
        </tr>
        <tr>
        	<td width="15%" align="center">详细地址</td>
            <td width="85%">
                <input type="text" value="<?php echo ($info["address"]); ?>" name="address" class="rightCon01" />
            </td>
        </tr>
        <tr>
        	<td width="15%" align="center">状态：</td>
            <td width="85%">
            
                &nbsp;审核&nbsp;<input name="status" checked="checked" type="radio" value="1"/>
                &nbsp;屏蔽&nbsp;<input name="status" type="radio" value="0"/>
            
            </td>
        </tr>
        <tr>
        	<td width="15%" align="center">注册时间：</td>
            <td width="85%">
            &nbsp;<?php echo (date("Y-m-d H:i:s",$info["regtime"])); ?>
            </td>
        </tr>
        <tr>
        	<td width="15%" align="center">最后登录时间：</td>
            <td width="85%">
            &nbsp;<?php echo (date("Y-m-d H:i:s",$info["lasttime"])); ?>
            </td>
        </tr>
        
        <tr>
        	<td colspan="2" align="center" style="background-color:#eef1f3; height:29px; line-height:29px; vertical-align:middle;"><input type="image" src="../Public/images/sub.jpg" /></td>
        </tr>
     </table>
     </form>
</body>
</html>
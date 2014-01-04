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
            	<div class="right"><p> 欢迎使用CMS内容管理系统。</p></div>
            </td>
        </tr>
     </table>
     <table width="98%" height="100%" cellpadding="0" cellspacing="0" border="0" align="center" class="right01" style="margin:0 auto;">
     	<tr>
        	<td colspan="3" class="right02"><span>系统信息统计</span></td>
        </tr>
        <tr>
        	<td width="40%">服务器系统：<?php echo PHP_OS;?></td>
            <td width="40%">站点环境：<?php echo $_SERVER["SERVER_SOFTWARE"];?></td>
            <td width="20%">mysql数据库版本：<?php echo mysql_get_server_info();?></td>
        </tr>
        <tr>
            <td width="40%">服务器IP：<?php echo $_SERVER["SERVER_ADDR"];?></td>
            <td width="40%">剩余空间：<?php echo round((@disk_free_space(".") / (1024 * 1024)),2);?>M</td>
            <td width="20%">magic_quotes_runtime：<?php echo get_magic_quotes_runtime() === 1 ?'YES':'NO';?></td>
        </tr>
        <tr>
        	<td width="40%">PHP运行方式：<?php echo php_sapi_name();?></td>
            <td width="40%">项目名称：<?php echo (APP_NAME); ?></td>
            <td width="20%">项目路径：<?php echo ($_SERVER['DOCUMENT_ROOT']); ?></td>
        </tr>
        <tr>
        	<td width="40%">服务器时间：<?php echo date("Y年n月j日 H:i:s");?></td>
            <td width="40%">上传附件限制：<?php echo ini_get('upload_max_filesize');?></td>
            <td width="20%">执行时间限制：<?php echo ini_get('max_execution_time');?>秒</td>
        </tr>
        
     </table>
     <table width="98%" height="100%" cellpadding="0" cellspacing="0" border="0" align="center" class="right03" style="margin:0 auto;">
     	<tr>
        	<td>
                <table width="49%" cellpadding="0" cellspacing="0" border="0" align="left" class="right01">
                    <tr>
                    	<td class="right02">
                        	<span style="width:200px; float:left; display:block;">消息</span>
                            <div class="right04"><a href="#">[更多]</a></div>
                            <div class="clear"></div>
                        </td>
                    </tr>
                    <tr>
                    	<td><p class="right05">暂无消息</p></td>
                    </tr>
                </table>
                <table width="49%" cellpadding="0" cellspacing="0" border="0" align="right" class="right01">
                    <tr>
                    	<td class="right02">
                        	<span style="width:200px; float:left; display:block;">快捷操作</span>
                            <div class="right04">
                            	<ul>
                                	<li><a href="#">[新增]</a></li>
                                    <li><a href="#">[管理]</a></li>
                                    <div class="clear"></div>
                                </ul>
                                <div class="clear"></div>
                            </div>
                            <div class="clear"></div>
                        </td>
                    </tr>
                    <tr>
                    	<td>
                        	<ul class="right05">
                            	<li><a href="#" class="wendang">文档列表</a></li>
                                <li><a href="#" class="pinglun">评论管理</a></li>
                                <li><a href="#" class="neirong">内容发布</a></li>
                                <li><a href="#" class="lanmu">栏目管理</a></li>
                                <li><a href="#" class="xiugai">修改参数</a></li>
                                <div class="clear"></div>
                            </ul>
                            <div class="clear"></div>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
     <table width="98%" height="100%" cellpadding="0" cellspacing="0" border="0" align="center" class="right03" style="margin:0 auto;">
        <tr>
            <td>
                <table width="49%" cellpadding="0" cellspacing="0" border="0" align="left" class="right01">
                    <tr>
                        <td class="right02">
                            <span style="width:200px; float:left; display:block;">系统基本信息</span>
                            <div class="right04"><a href="#">[更多]</a></div>
                            <div class="clear"></div>
                        </td>
                    </tr>
                    <tr>
                        <td>您的级别：<?php echo ($level); ?></td>
                    </tr>
                    <tr>
                        <td>软件版本信息：Cms_2013_UTF8</td>
                    </tr>
                </table>
                <table width="49%" cellpadding="0" cellspacing="0" border="0" align="right" class="right01">
                    <tr>
                        <td class="right02">
                            <span style="width:200px; float:left; display:block;">最新文档</span>
                            <div class="right04"><a href="#">[更多]</a></div>
                            <div class="clear"></div>
                        </td>
                    </tr>
                    <tr>
                        <td><p class="right05">暂无消息</p></td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
   
</body>
</html>
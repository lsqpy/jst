<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
<link href="../Public/css/public.css" rel="stylesheet" type="text/css" />
<link href="../Public/css/style.css" rel="stylesheet" type="text/css" />
<script src="__PUBLIC__/js/jquery-1.4.2.js" type="text/javascript"></script>
<script src="../Public/js/common.js" type="text/javascript"></script>
</head>

<body topmargin="10" leftmargin="10">
    <!--中间内容左边内容-->
     <table width="98%" height="100%" cellpadding="0" cellspacing="0" border="0" align="center" style="margin:0 auto;">
     	<tr>
        	<td>
            	<div class="right"><p style="background:url(../Public/images/weizhi.jpg) no-repeat 0px 14px;"> 当前位置： > 列表</p></div>
            </td>
        </tr>
     </table>
     <table width="98%" height="100%" cellpadding="0" cellspacing="0" align="center" style="margin:0 auto; border:#c1e0f4 1px solid; margin-top:11px;">
     	<tr>
        	<td class="rightList02">
            	<div class="rightList">
                	<ul>
                    	<li><input type="checkbox" id="checkAll01"/>&nbsp;全选</li>
                        <?php echo getAuthCheck(MODULE_NAME.'-add',"<li><a href=".U('Shop/add')." class='add'>添加</a></li>");?>
                        <!--li><a href="#" class="update">修改</a></li-->
                        <?php echo getAuthCheck(MODULE_NAME.'-del',"<li><a href='javascript:void(0);' onClick='delAll();' class='delete'>删除</a></li>");?>
                        <?php echo getAuthCheck(MODULE_NAME.'-search',"<li  id='search01'><img src='../Public/images/search.jpg' style='padding-top:3px;' /></li>");?>
                        <div class="clear"></div>
                    </ul>
                    <div class="clear"></div>
                </div>
                <div class="rightList01"><?php echo ($html); ?></div>
                <div class="clear"></div>
            </td>
        </tr>
     </table>
     <div id="search" style="display:none;">
      <form action="<?php echo U('Shop/search');?>" method="get" enctype="multipart/form-data">
     	<table width="98%" height="100%" cellpadding="0" cellspacing="0" align="center" style="margin:0 auto; border:#c1e0f4 1px solid; margin-top:11px;">
        	<tr>
            	<td style="background-color:#edf2f5; border:#b9c8d6 1px solid; height:29px;" align="center">
                	<table cellspacing="0" cellpadding="0" border="0">
                        <tr>
                            <td width="90" align="center" height="25">编号：</td>
                            <td width="160">
                                <input type="text" id="keyword" style="width:150px;border:1px solid #D1D1D1" name="id">
                            </td>
                            <td>按编号搜索</td>
                        </tr>
                        <tr>
                            <td width="90" align="center" height="25">名称：</td>
                            <td width="160">
                                <input type="text" id="keyword" style="width:150px;border:1px solid #D1D1D1" name="title">
                            </td>
                            <td>按标题搜索</td>
                        </tr>
                        
                       
                        <tr>
                            <td colspan="3" align=center><input width="45" type="image" height="21" border="0" class="np" src="../Public/images/search.jpg" name="imageField"></td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
     </form>
     </div>
     <table id="table_form" width="98%" height="100%" cellpadding="0" cellspacing="0" align="center" class="rightList03">
     	<tr>
        	<td class="right02" colspan="10" style="text-align:left; border-bottom:#b9c8d6 1px solid;"><span></span></td>
        </tr>
        <tr>
        	<td width="5%" style="background-color:#eef1f3; border:none;">选择</td>
            <td width="5%" style="background-color:#eef1f3; border:none;">ID</td>
            <td width="20%" style="background-color:#eef1f3; border:none;">名称</td>
            <td width="5%" style="background-color:#eef1f3; border:none;">价格</td>
            <td width="5%" style="background-color:#eef1f3; border:none;">点击</td>
            <td width="5%" style="background-color:#eef1f3; border:none;">添加时间</td>
            <td width="5%" style="background-color:#eef1f3; border:none;">状态</td>
            <?php echo getAuthCheckAll(MODULE_NAME.'-add,'.MODULE_NAME.'-del',"<td width='12%' style='background-color:#eef1f3; border:none;'>操作</td>");?>
            
        </tr>
        <?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
        	<td><input name='id[]' class="checkThis" type="checkbox" value="<?php echo ($vo["id"]); ?>" /></td>
            <td><?php echo ($vo["id"]); ?></td>
            <td style="color:#7b7b8d;"><?php echo ($vo["name"]); ?></td>
            <td style="color:#7b7b8d;"><?php echo ($vo["price"]); ?></td>
            <td style="color:#7b7b8d;"><?php echo ($vo["hits"]); ?></td>
            <td style="color:#7b7b8d;"><?php echo (date("Y-m-d",$vo["addtime"])); ?></td>
            <td style="color:#7b7b8d;"><?php if(($vo["status"]) == "1"): ?>审核<?php else: ?><font color=blue>屏蔽</font><?php endif; ?></td>
            <td align="center">
                <?php echo getAuthCheck(MODULE_NAME.'-edit',"<a href=".U('Shop/edit',array('id'=>$vo['id'])).">[编辑]</a>");?>
                <?php echo getAuthCheck(MODULE_NAME.'-del',"<a href='javascript:void(0);' onclick='del(this,$vo[id],\"".$vo['name']."\")'>[删除]</a> ");?>
                <div class="clear"></div>
                
            </td>
        </tr><?php endforeach; endif; else: echo "" ;endif; ?>
        
     </table>
     <table width="98%" height="100%" cellpadding="0" cellspacing="0" align="center" style="margin:0 auto; border:#c1e0f4 1px solid; margin-top:11px;">
     	<tr>
        	<td class="rightList02">
            	<div class="rightList">
                	<ul>
                    	<li><input type="checkbox" id="checkAll01"/>&nbsp;全选</li>
                        <?php echo getAuthCheck(MODULE_NAME.'-add',"<li><a href=".U('Shop/add')." class='add'>添加</a></li>");?>
                        <!--li><a href="#" class="update">修改</a></li-->
                        <?php echo getAuthCheck(MODULE_NAME.'-del',"<li><a href='javascript:void(0);' onClick='delAll();' class='delete'>删除</a></li>");?>
                        <?php echo getAuthCheck(MODULE_NAME.'-search',"<li  id='search01'><img src='../Public/images/search.jpg' style='padding-top:3px;' /></li>");?>
                        <div class="clear"></div>
                    </ul>
                    <div class="clear"></div>
                </div>
                <div class="rightList01"><?php echo ($html); ?></div>
                <div class="clear"></div>
            </td>
        </tr>
     </table>
<script>
    //排序
    function sort(name,value){
        var url = "<?php echo U('Shop/sort');?>";
        $.post(url,{name:name,value:value},function(data){
            
        },'json');  
        
    }
    //删除
    function del(obj,id,name){
        if(confirm('您确定删除'+name+'？')){
            var url = "<?php echo U('Shop/del');?>";
            var objnode = obj.parentNode.parentNode;
             $.post(url,{id:id},function(data){
                    objnode.parentNode.removeChild(objnode);
                },'json');  
        }
    }
    //选择删除
    function delAll(){
        var id;
        var arr = [];
        var obj = [];
        $("input[name='id[]']").each(
            function(i){
                if(this.checked==true){
                    arr.push(this.value);
                    obj.push(this);
                }
            }
        );
   
        var url = "<?php echo U('Shop/del');?>";
        id = arr.join(",");
        if(confirm('您确定删除编号：'+id+'？')){
            $.post(url,{id:id},function(data){
                //循环删除节点
                for(var i=0;i<obj.length;i++){
                    obj[i].parentNode.parentNode.parentNode.removeChild(obj[i].parentNode.parentNode);
                }
            },'json');  
        }
    }

    //TableColor("名称","奇数行背景","偶数行背景","鼠标经过背景","点击后背景");
    TableColor("table_form","#f3faff","#ffffff","#e9f6ff","#d0dae2");

</script>
</body>
</html>
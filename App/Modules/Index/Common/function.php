<?php
/**
 *    @title 获取文章栏目数据
 *    @param array 数组
 *    @return array
 * 
 */
 function getArticleColumn($cid,$name=''){
     
     //栏目数据
     $map['status'] = 1;
     $map['id'] = $cid;
     $data = M('Articlecolumn')->where($map)->find();
        
     return $data['name'];
 
 }

?>
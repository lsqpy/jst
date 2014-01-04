<?php
/**
 *      @title  节点模型
 */
class ArticlecolumnModel extends Model {
   
    //自动验证
    protected $_validate = array(

        array('name','require','名称必填！'), //默认情况下用正则进行验证
    
    );
     
    //自动完成
    protected $_auto = array ( 

        array('sort','getSort',1,'callback'), // 对sort字段在新增的时候回调getSort方法
        
    );
   
    //获取排序
    protected function getSort(){
   
        $mapsort['pid'] = intval($_POST['pid']);
        $result = $this->where($mapsort)->order('sort DESC')->getField('sort');     
        $result++;
        return $result;
    }

    
}
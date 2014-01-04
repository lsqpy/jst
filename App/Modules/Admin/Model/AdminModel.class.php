<?php
/**
 *      @title  节点模型
 */

class AdminModel extends Model {
         
    //自动验证
    protected $_validate = array(

        array('username','require','名称必填！'), //默认情况下用正则进行验证
        array('password','require','密码必填！'), 
    
    );
     
    //自动完成
    protected $_auto = array ( 

        array('password','md5Tomd5',3,'callback'), // 对regtime字段在新增的时候
        
        array('regtime','time',1,'function'), // 对regtime字段在新增的时候
        
        array('lasttime','time',1,'function'), // 对regtime字段在新增的时候
            
    );
        
    protected function md5Tomd5($string){
        return md5(md5($string));
    }
    
}
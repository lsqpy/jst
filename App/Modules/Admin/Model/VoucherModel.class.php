<?php
/**
 *      @title  会员模型
 */

class VoucherModel extends Model {
         
    //自动验证
    protected $_validate = array(

        array('price','number','金额必须为数字！'), //默认情况下用正则进行验证
        array('overtime','require','到期时间必填！'), 
    
    );
     
    //自动完成
    protected $_auto = array ( 

        array('overtime','toTime',1,'callback'),
        
        array('addtime','time',1,'function'), 
            
    );
        
    protected function toTime(){
        return strtotime($_POST['overtime']);
    }
    
}
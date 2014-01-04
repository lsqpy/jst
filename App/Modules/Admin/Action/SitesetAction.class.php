<?php
/**
 *      @title 站点配置信息
 *      @author Lsq <lsqpy@163.com>
 *      @date   2013-12-03
 */
class SitesetAction extends CommonAction {

    public function _initialize(){
        parent::_initialize();
    }
    
    public function index(){
        $this->assign('info',F('webconfig','','./App/Conf/'));
        $this->display();
    }

    public function doEdit(){
        
        unset($_POST['x']);
        unset($_POST['y']);
        F('webconfig',$_POST,'./App/Conf/');
        $this->success("提交成功！",U('index'));   
    
    }

}
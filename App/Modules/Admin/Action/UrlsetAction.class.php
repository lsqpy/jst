<?php
/**
 *      @title URL配置信息，URL路由配置信息
 *      @author Lsq <lsqpy@163.com>
 *      @date   2013-12-03
 */
class UrlsetAction extends CommonAction {

    public function _initialize(){
        parent::_initialize();
    }
    
    public function index(){
        //URL设置
        $this->assign('info',F('urlconfig','','./App/Conf/'));
        
        //URL路由设置
        $routeList = F('routeconfig','','./App/Conf/');
        $this->assign('route',$routeList['URL_ROUTE_RULES']);
        
        $this->display();
    }

    public function doEdit(){
        
        unset($_POST['x']);
        unset($_POST['y']);
        F('urlconfig',$_POST,'./App/Conf/');
        $this->success("提交成功！",U('index'));   
    
    }
    
    //URL路由
    public function urlEdit(){
        
        $data['URL_ROUTER_ON'] = true; //开启路由
        
        //定义路由规则
        $data['URL_ROUTE_RULES'] = array(
            $_POST['rule'] => $_POST['parameters'],
        );
        
        $routeList = F('routeconfig','','./App/Conf/');
        $data['URL_ROUTE_RULES'] = array_merge($data['URL_ROUTE_RULES'],$routeList['URL_ROUTE_RULES']);
        
        F('routeconfig',$data,'./App/Conf/');
        $this->success("提交成功！",U('index'));
    }
    
    //删除URL路由
    public function routedel(){
        $key = $_GET['key'];
        $data = F('routeconfig','','./App/Conf/');
        unset($data['URL_ROUTE_RULES'][$key]);
        F('routeconfig',$data,'./App/Conf/');
        $this->success("提交成功！",U('index'));   
    }

}
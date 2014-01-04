<?php
// 本类由系统自动生成，仅供测试用途
class CommonAction extends Action {
    public function _initialize(){
   
       //验证用户登陆
	   if(!$this->isLogin()){
	       $this->redirect(GROUP_NAME.'/Public/login');
	   }
       
       //验证用户权限
       if(!$_SESSION[C('ADMIN_AUTH_KEY')]){
            if(!$this->authCheck()){
                exit("您没有权限！");
            }
       }
    }
    
    /**
     *   @title 判断用户权限 
     *   @return true|false   
     * 
     */ 
    protected function authCheck(){
        
        
        //无需验证的操作和方法
        $notAuth = in_array(MODULE_NAME,explode(",",C("AUTH_CONFIG.NOT_AUTH_MODULE"))) || in_array(ACTION_NAME,explode(",",C("AUTH_CONFIG.NOT_AUTH_ACTION")));
        
        //如果是无需验证的模型，直接返回true
        if($notAuth){
            return true;
        }
        
        //验证权限
        if(C("AUTH_CONFIG.AUTH_ON")){
            import('ORG.Util.Auth');//加载类库
            $auth=new Auth();
            return $auth->check(GROUP_NAME.'-'.MODULE_NAME.'-'.ACTION_NAME,getAdminUser('id'));
        }
      
    }
    
    
    
    /**
     *    @title 判断用户是否登录
     *    @return true|bool
     *
     */
    protected function isLogin(){

        if($_SESSION['adminUser']){
            return true;
        }else{
            return false;
        }
        
    }
}
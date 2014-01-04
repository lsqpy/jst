<?php
// 本类由系统自动生成，仅供测试用途
class PublicAction extends Action {
    /**
     *      @title      后台登陆
     */ 
    public function login(){
	   $this->display();
    }

    
    /**
     *      @title      检测用户登陆
     *      @author     Lsq
     *      @version    1.0
     *      @date       2013-04-05 12:19
     */
     public function checkLogin(){
        //验证码
        if($_SESSION['verify'] != md5($_POST['verify'])) {
           $this->error('验证码错误！');
        }
        
        //用户名
        if(empty($_POST['username'])) {
           $this->error('用户名必填！');
        }
        
        //密码
        if(empty($_POST['password'])) {
           $this->error('密码必填！');
        }
        
        //查找用户数据
        $adminModel = M("Admin");
        $map['username'] = $username = trim($_POST['username']);
        $data = $adminModel->field('id,username,password')->where($map)->find();
      
        //用户是否存在
        if(!is_array($data)){

            $this->error("用户不存在！");
        }
        
        //用户密码是否正确
        $password = md5(md5($_POST['password']));
        if($data['password'] != $password){
            
            $this->error("用户密码错误！");
        }
        
        $adminUserData = serialize(array("id"=>$data['id'],"username"=>$data['username'],"type"=>$data['type']));
        
        //超级管理员识别
        if($data['username'] == C("SUPERADMIN")){
            session(C("ADMIN_AUTH_KEY"),1);
        }
        
        //写入session
        session("adminUser",$adminUserData);
        
        //更新登陆地址与IP
        import('ORG.Net.IpLocation');// 导入IpLocation类
        $Ip = new IpLocation(); // 实例化类 参数表示IP地址库文件
        $loginip = get_client_ip();
        $area = $Ip->getlocation($loginip); // 获取域名服务器所在的位置
        
        $saveData = array(
            "id"=>$data['id'],
            "area"=>$area['area'],
            "country"=>$area['country'],
            "ip"=>$loginip,
            "lasttime"=>time(),
        );
        
        $adminModel->save($saveData);
        
        //调用RBAC类
        //import('ORG.Util.RBAC');
        //RBAC::saveAccessList();

        $this->success("登陆成功！",U("Index/index"));
        
     }
     
     /**
      *         @title  退出登录
      */
     public function logout(){
        session("username","");
        session("isLogin","");
        session(C("ADMIN_AUTH_KEY"),"");
        session('[destroy]'); // 销毁session
        $this->success("安全成功！",U("Public/login"));
     }
     
     
     
     /**
      *     @title      验证码
      */
     public function verify(){
        import('ORG.Util.Image');
        ob_end_clean();
        Image::buildImageVerify();
     } 
     
     
     /**
      *     @title      Top导航栏
      */
     public function top(){
        $map['status'] = 1;
        $map['level'] = 2;
        $map['show'] = 1;
        $topList = M('Node')->field('id,title')->where($map)->order("sort")->select();
        $this->assign("toplist",$topList);
        $this->display();
     } 
    
     /**
      *     @title      Left导航栏
      */
     public function left(){
        
        //通过ID查找栏目
        $model =  M('Node');
        $maps['status'] = $map['status'] = 1;
        $maps['show'] = $map['show'] = 1;
        $maps['level'] = 2;
        $map['level'] = 3;
        $map['pid'] = $_GET['id'] ? $_GET['id'] : $model->where($maps)->order('sort ASC')->getField('id');
        $leftList = $model->field('id,title,group,module,action')->where($map)->order("sort")->select();
        $this->assign("leftlist",$leftList);
        $this->display();
     }
     
     /**
     *      @title 删除(缓存))
     */
     function delCache(){
         $path = getcwd()."/temp/";
         if(delDirFile($path) !== false){
             $this->success("删除成功！");
         }else{
             $this->error("删除失败！"); 
         }
     }
}
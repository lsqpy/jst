<?php
/**
 *      @title 会员模型
 *      @author Lsq <lsqpy@163.com>
 *      @date 2013-10-24         
 */
class AdminAction extends CommonAction {

    public function _initialize(){
        parent::_initialize();
        $this->Admin = D('Admin');
    }
    
    public function index(){
        
        $data = $this->Admin->findPage();
        $this->assign($data);
        $this->display();
    }
    
    public function add(){
        //$adminGroup = M('')->select();
        //$this->assgin("admingroup",$adminGroup);
        $this->display();
    }
    
    public function doAdd(){
        //创建数据
        if(!$this->Admin->create()){
            $this->error($this->Admin->getError());
        }
 
        //写入数据
        if($this->Admin->add()){
            $this->success("提交成功！");   
        }else{
            $this->error("提交失败！");
        }
    }
    
    public function edit(){

        //详细信息
        $map['id'] = intval($_GET['id']);
        $info = $this->Admin->where($map)->find();
        $this->assign("info",$info);
        $this->display();
    }
    
    public function doEdit(){
        
        //创建数据
        if(!$data = $this->Admin->create()){
            $this->error($this->Admin->getError());
        }
      
        //写入数据
        if($this->Admin->save()){
            $this->success("提交成功！",U('index'));   
        }else{
            $this->error("提交失败！");
        }
    }
    
    public function del(){
        
        $id = !empty($_POST['id']) ? $_POST['id'] : $this->error("参数错误");
        $map['id'] = array('in',$id);
        $status = $this->Admin->where($map)->delete();
        if($status){
            $this->ajaxReturn($status,"删除ID:{$id},操作成功！",1);  
        }else{
            $this->ajaxReturn($status,"删除ID:{$id},操作失败！",0);
        }
    }
    
    public function search(){
        
        //名称
        if(!empty($_GET['title'])){
            $map['title'] = $_GET['title'];
        }
        //项目
        if(!empty($_GET['group'])){
            $map['group'] = $_GET['group'];
        }
        //模型
        if(!empty($_GET['module'])){
            $map['module'] = $_GET['module'];
        }
        //控制器
        if(!empty($_GET['action'])){
            $map['action'] = $_GET['action'];
        }
        $list = $this->Admin->where($map)->order("id DESC")->findPage(30);
        $this->assign($list);
        $this->display('index');
    }
    
    //上传文件
    public function upload(){
        import('ORG.Net.UploadFile');
        $upload = new UploadFile();// 实例化上传类
        $upload->maxSize  = 3145728 ;// 设置附件上传大小
        $upload->allowExts  = array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
        $upload->savePath =  './uploads/';// 设置附件上传目录
        if(!$upload->upload()) {// 上传错误提示错误信息
            echo '{"state":"'.$upload->getErrorMsg().'"}';
        }else{// 上传成功 获取上传文件信息
            $info =  $upload->getUploadFileInfo();
            echo '{"url":"' .$info[0][ "savename" ] . '","fileType":"' . $info[0][ "type" ] . '","original":"' . $info[0][ "name" ] . '","state":"SUCCESS"}';
            
        }

    /**
     * 向浏览器返回数据json数据
     * {
     *   'url'      :'a.rar',        //保存后的文件路径
     *   'fileType' :'.rar',         //文件描述，对图片来说在前端会添加到title属性上
     *   'original' :'编辑器.jpg',   //原始文件名
     *   'state'    :'SUCCESS'       //上传状态，成功时返回SUCCESS,其他任何值将原样返回至图片上传框中
     * }
     */
    

    }
    
    
}
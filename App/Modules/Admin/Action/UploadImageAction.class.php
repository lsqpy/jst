<?php
/**
 *      @title 上传图片信息
 *      @author Lsq <lsqpy@163.com>
 *      @date   2013-12-03
 */
class UploadImageAction extends CommonAction {

    public function _initialize(){
        parent::_initialize();
        $this->UploadImage = D('UploadImage');
    }
    
    public function index(){

        $data = $this->UploadImage->order('sort')->select();
        $this->assign('data',$data);
        $this->display();
    }
    
    public function add(){
        
        $this->display();
    }
    
    public function doAdd(){
        //创建数据
        
        if(!$this->UploadImage->create()){
            $this->error($this->UploadImage->getError());
        }
        
        //写入数据
        if($this->UploadImage->add()){
            
            $this->success("提交成功！");   
        }else{
            $this->error("提交失败！");
        }
    }
    
    public function edit(){
        
        //详细信息
        $map['id'] = intval($_GET['id']);
        $info = $this->UploadImage->where($map)->find();
        $this->assign("info",$info);
        $this->display();
    }
    
    public function doEdit(){
        
        //创建数据
        if(!$data = $this->UploadImage->create()){
            $this->error($this->UploadImage->getError());
        }
        
        //写入数据
        if($this->UploadImage->save()){
            
            $this->success("提交成功！",U('index'));   
        }else{
            $this->error("提交失败！");
        }
    }
    
    public function del(){
        
        $id = !empty($_POST['id']) ? $_POST['id'] : $this->error("参数错误");
        $map['id'] = array('in',$id);
        $status = $this->UploadImage->where($map)->delete();
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
        //编号
        if(!empty($_GET['id'])){
            $map['id'] = $_GET['id'];
        }
        
        $list = $this->UploadImage->where($map)->order("id DESC")->findPage(30);
        $this->assign($list);
        $this->display('index');
    }
    
}
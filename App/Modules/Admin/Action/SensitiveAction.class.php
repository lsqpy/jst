<?php
// 本类由系统自动生成，仅供测试用途
class SensitiveAction extends CommonAction {
    protected $Sensitive;
    //模型初始化
    public function _initialize(){
        parent::_initialize();
        $this->Sensitive = D("Sensitive");
    }
    public function index(){
	   $list = $this->Sensitive->order('id DESC')->findPage();
       $this->assign($list);
       $this->display();
    }
    
    //添加
    public function add(){
        $this->display();
    }
    public function doAdd(){
        
         //创建数据
        if(!$this->Sensitive->create()){
            $this->error($this->Sensitive->getError());
        }
        
        //写入数据
        if($this->Sensitive->add()){
            $this->success("提交成功！");   
        }else{
            $this->error("提交失败！");
        }
       
    }
    
    //修改
    public function edit(){
        
        $map['id'] = $_GET['id'];
        $info = $this->Sensitive->where($map)->find();
        $this->assign("info",$info);
        
        $this->display();
    }
    
    public function doEdit(){
        
         //创建数据
        if(!$this->Sensitive->create()){
            $this->error($this->Sensitive->getError());
        }
        
        //写入数据
        if($this->Sensitive->save()){
            $this->success("提交成功！");   
        }else{
            $this->error("提交失败！");
        }
        
        
    }

    public function del(){
        $id = !empty($_POST['id']) ? $_POST['id'] : '';
        $map['id'] = array('in',$id);
        $status = $this->Sensitive->where($map)->delete();
        if($status){
            $this->ajaxReturn($status,"删除ID:{$id},操作成功！",1);  
        }else{
            $this->ajaxReturn($status,"删除ID:{$id},操作失败！",0);
        }
    }
    
    /**
     *      @title  搜索
     *      @param  $_GET['condition'] = array(1=>标题,2=>ID);
     */
    public function search(){
        
        switch($_REQUEST['condition']){
            case 1:
                $map['name'] = array("like","%".$_REQUEST['keyword']."%");
                break;
            case 2:
                $map['id'] = $_REQUEST['keyword'];
                break;
        }
        $list = $this->Sensitive->where($map)->select();

        $this->assign("data",$list);
        $this->display("index");
    }
    
   
}
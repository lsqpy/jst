<?php
/**
 *      @title 会员模型
 *      @author Lsq <lsqpy@163.com>
 *      @date 2013-10-24         
 */
class MemberAction extends CommonAction {

    public function _initialize(){
        parent::_initialize();
        $this->Member = D('Member');
    }
    
    public function index(){
        
        $data = $this->Member->findPage();
        $this->assign($data);
        $this->display();
    }
    
    public function add(){

        $this->assign('cate',$cate);
        $this->display();
    }
    
    public function doAdd(){
        //创建数据
        if(!$this->Member->create()){
            $this->error($this->Member->getError());
        }
 
        //写入数据
        if($this->Member->add()){
            $this->success("提交成功！",U('index'));   
        }else{
            $this->error("提交失败！");
        }
    }
    
    public function edit(){

        //详细信息
        $map['id'] = intval($_GET['id']);
        $info = $this->Member->where($map)->find();
        $this->assign("info",$info);
        $this->display();
    }
    
    public function doEdit(){
        
        //创建数据
        if(!$data = $this->Member->create()){
            $this->error($this->Member->getError());
        }
       
        //写入数据
        if($this->Member->save()){
            $this->success("提交成功！",U('index'));   
        }else{
            $this->error("提交失败！");
        }
    }
    
    public function del(){
        
        $id = !empty($_POST['id']) ? $_POST['id'] : $this->error("参数错误");
        $map['id'] = array('in',$id);
        $status = $this->Member->where($map)->delete();
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
        $list = $this->Member->where($map)->order("id DESC")->findPage(30);
        $this->assign($list);
        $this->display('index');
    }
    
    //市
    public function area(){
        $pid = $_POST['pid'];
        $area = W('Area',array('pid'=>$pid));
        return $area;
    }
    
}
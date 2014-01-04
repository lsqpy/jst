<?php
// 本类由系统自动生成，仅供测试用途
class AuthGroupAction extends CommonAction {
    protected $AuthGroup;
    //模型初始化
    public function _initialize(){
        parent::_initialize();
        $this->AuthGroup = D("AuthGroup");
    }
    public function index(){
	   $list = $this->AuthGroup->order('id DESC')->findPage();
       $this->assign($list);
       $this->display();
    }
    
    //添加
    public function add(){
        $this->display();
    }
    public function doAdd(){
        
         //创建数据
        if(!$this->AuthGroup->create()){
            $this->error($this->AuthGroup->getError());
        }
        
        //写入数据
        if($this->AuthGroup->add()){
            $this->success("提交成功！");   
        }else{
            $this->error("提交失败！");
        }
       
    }
    
    //修改
    public function edit(){
        
        $map['id'] = $_GET['id'];
        $info = $this->AuthGroup->where($map)->find();
        $this->assign("info",$info);
        
        $this->display();
    }
    
    public function doEdit(){
        
         //创建数据
        if(!$this->AuthGroup->create()){
            $this->error($this->AuthGroup->getError());
        }
        
        //写入数据
        if($this->AuthGroup->save()){
            $this->success("提交成功！");   
        }else{
            $this->error("提交失败！");
        }
        
        
    }

    public function del(){
        $id = !empty($_POST['id']) ? $_POST['id'] : '';
        $map['id'] = array('in',$id);
        $status = $this->AuthGroup->where($map)->delete();
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
        $list = $this->AuthGroup->where($map)->select();

        $this->assign("data",$list);
        $this->display("index");
    }
    
     //权限
    public function role(){
        $maps['id'] = $_GET['id'];
        
        //权限
        $access = $this->AuthGroup->where($maps)->getField('rules');
        $access = explode(',',$access);
        
        //所有节点
        Vendor('Class.Cate','','.class.php');
        $fields = array('id','pid','title','group','module','action');
        $map['status'] = 1;
        $cate = D('Node')->where($map)->field($fields)->order('sort')->select();
        $data = Cate::getCateChildAccess($cate,$access);      
        $this->assign('data',$data);
        $this->display();
    }
    
    public function doRole(){
        $map['id'] = $_POST['id'];
        $access = implode(',',$_POST['access']);
        //更新用后权限
        $status = $this->AuthGroup->where($map)->setField('rules',$access);
        
        if($status){
            $this->success("提交成功",U('index'));
        }else{
            $this->error("提交失败");
        } 
    }
}
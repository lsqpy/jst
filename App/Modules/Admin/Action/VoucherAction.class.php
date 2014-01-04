<?php
/**
 *      @title 代金券模型
 *      @author Lsq <lsqpy@163.com>
 *      @date 2013-10-24         
 */
class VoucherAction extends CommonAction {

    public function _initialize(){
        parent::_initialize();
        $this->Voucher = D('Voucher');
    }
    
    public function index(){
        
        $data = $this->Voucher->findPage();
        $this->assign($data);
        $this->display();
    }
    
    public function add(){

        $this->assign('cate',$cate);
        $this->display();
    }
    
    public function doAdd(){
        //创建数据
        if(!$data = $this->Voucher->create()){
            $this->error($this->Voucher->getError());
        }
        
        $number = $_POST['number'] ? $_POST['number'] : 1;
        $array = array();
        for($i=0;$i<$number;$i++){
            $array[] = $data;
        }
       
        //写入数据
        if($this->Voucher->addAll($array)){
            $this->success("提交成功！",U('index'));   
        }else{
            $this->error("提交失败！");
        }
    }

    public function del(){
        
        $id = !empty($_POST['id']) ? $_POST['id'] : $this->error("参数错误");
        $map['id'] = array('in',$id);
        $status = $this->Voucher->where($map)->delete();
        if($status){
            $this->ajaxReturn($status,"删除ID:{$id},操作成功！",1);  
        }else{
            $this->ajaxReturn($status,"删除ID:{$id},操作失败！",0);
        }
    }
    
    public function search(){
        
        //名称
        if($_GET['condition'] == 1){
            $map['useusername'] = $_GET['keyword'];
        }
        
        //名称
        if($_GET['condition'] == 2){
            $map['id'] = $_GET['keyword'];
        }
        
        $list = $this->Voucher->where($map)->order("id DESC")->findPage(30);
        $this->assign($list);
        $this->display('index');
    }
    
}
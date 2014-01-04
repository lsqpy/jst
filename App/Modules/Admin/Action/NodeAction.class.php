<?php
/**
 *      @title 导航菜单节点信息
 *      @author Lsq <lsqpy@163.com>
 */
class NodeAction extends CommonAction {

    public function _initialize(){
        parent::_initialize();
        $this->Node = D('Node');
    }
    
    public function index(){
        Vendor('Class.Cate','','.class.php');
        $cate = $this->Node->order('sort')->select();
        //$this->data = Cate::getListCate($cate,'|-');
        $this->data = Cate::getListCate($cate,array('├─','│','└─'));
        $this->display();
    }
    
    public function add(){
        
        //缓存栏目列表
        if(!$cate = S("CATE")){
            //字段
            $fileds = array('id','pid','title','group','module');
            
            //顶级分类
            $map['pid'] = 0;
            $map['status'] = $maps['status'] = 1;
            $cate = $this->Node->field($fileds)->where($map)->order('sort')->select();
            
            //子类
            foreach($cate as $k=>$v){
                $maps['pid'] = $v['id'];
                $cate[$k]['child'] = $this->Node->field($fileds)->where($maps)->order('sort')->select();
            }
            S("CATE",$cate);
        }
        $this->assign('cate',$cate);
        $this->display();
    }
    
    public function doAdd(){
        //创建数据
        if(!$this->Node->create()){
            $this->error($this->Node->getError());
        }
        
        //写入数据
        if($this->Node->add()){
            
            // 删除缓存数据
            S('CATE',NULL);

            $this->success("提交成功！");   
        }else{
            $this->error("提交失败！");
        }
    }
    
    public function edit(){
        
        //缓存栏目列表
        if(!$cate = S("CATE")){
            //字段
            $fileds = array('id','pid','title','group','module');
            
            //顶级分类
            $map['pid'] = 0;
            $map['status'] = $maps['status'] = 1;
            $cate = $this->Node->field($fileds)->where($map)->order('sort')->select();
            
            //子类
            foreach($cate as $k=>$v){
                $maps['pid'] = $v['id'];
                $cate[$k]['child'] = $this->Node->field($fileds)->where($maps)->order('sort')->select();
            }
            S("CATE",$cate);
        }
        $this->assign('cate',$cate);
        
        //详细信息
        $map['id'] = intval($_GET['id']);
        $info = $this->Node->where($map)->find();
        $this->assign("info",$info);
        $this->display();
    }
    
    public function doEdit(){
        
        //创建数据
        if(!$data = $this->Node->create()){
            $this->error($this->Node->getError());
        }
        
        //写入数据
        if($this->Node->save()){
            
            // 删除缓存数据
            S('CATE',NULL);

            $this->success("提交成功！",U('index'));   
        }else{
            $this->error("提交失败！");
        }
    }
    
    public function del(){
        
        $id = !empty($_POST['id']) ? $_POST['id'] : $this->error("参数错误");
        $map['id'] = array('in',$id);
        $status = $this->Node->where($map)->delete();
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
        $list = $this->Node->where($map)->order("id DESC")->findPage(30);
        $this->assign($list);
        $this->display('index');
    }
    
}
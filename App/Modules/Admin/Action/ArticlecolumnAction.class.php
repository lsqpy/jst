<?php
/**
 *      @title 文档栏目
 *      @author Lsq <lsqpy@163.com>
 *      @date 2013-10-24         
 */
class ArticlecolumnAction extends CommonAction {

    public function _initialize(){
        parent::_initialize();
        $this->Articlecolumn = D('Articlecolumn');
    }
    
    public function index(){
        Vendor('Class.Cate','','.class.php');
        $cate = $this->Articlecolumn->field('id,pid,name,sort,isshow,status')->order('sort')->select();
        $this->data = Cate::getListCate($cate,array('├─','│','└─'));
   
        $this->display();
    }
    
    public function add(){
        
        //缓存栏目列表
        if(!$cate = S("ARTICLECOLUMN")){
                        
            //所有分类
            $cate = $this->Articlecolumn->where($map)->order('sort')->select();
        
            Vendor('Class.Cate','','.class.php');
            $cate = Cate::getListCate($cate,'&nbsp;&nbsp;');
            
            //缓存分类
            S("ARTICLECOLUMN",$cate);
        }
        $this->assign('cate',$cate);
        $this->display();
    }
    
    public function doAdd(){
        //创建数据
        if(!$this->Articlecolumn->create()){
            $this->error($this->Articlecolumn->getError());
        }
        
        //写入数据
        if($this->Articlecolumn->add()){
            
            // 删除缓存数据
            S('ARTICLECOLUMN',NULL);        //栏目缓存数据
            S('ARTICLECOLUMNSTATUS',NULL);  //文章栏目缓存数据

            $this->success("提交成功！");   
        }else{
            $this->error("提交失败！");
        }
    }
    
    public function edit(){
        
        //缓存栏目列表
        if(!$cate = S("ARTICLECOLUMN")){
                        
            //所有分类
            $cate = $this->Articlecolumn->where($map)->order('sort')->select();
        
            Vendor('Class.Cate','','.class.php');
            $cate = Cate::getListCate($cate,'&nbsp;&nbsp;');
            
            //缓存分类
            S("ARTICLECOLUMN",$cate);
        }
        $this->assign('cate',$cate);
        
        //详细信息
        $maps['id'] = intval($_GET['id']);
        $info = $this->Articlecolumn->where($maps)->find();
     
        $this->assign("info",$info);
        $this->display();
    }
    
    public function doEdit(){
        
        //创建数据
        if(!$data = $this->Articlecolumn->create()){
            $this->error($this->Articlecolumn->getError());
        }
        
        //写入数据
        if($this->Articlecolumn->save()){
            
            // 删除缓存数据
            S('ARTICLECOLUMN',NULL);        //栏目缓存数据
            S('ARTICLECOLUMNSTATUS',NULL);  //文章栏目缓存数据

            $this->success("提交成功！",U('index'));   
        }else{
            $this->error("提交失败！");
        }
    }
    
    public function del(){
        
        $id = !empty($_POST['id']) ? $_POST['id'] : $this->error("参数错误");
        $map['id'] = array('in',$id);
        $status = $this->Articlecolumn->where($map)->delete();
        if($status){
            $this->ajaxReturn($status,"删除ID:{$id},操作成功！",1);  
        }else{
            $this->ajaxReturn($status,"删除ID:{$id},操作失败！",0);
        }
    }
    
    public function search(){
        
        //名称
        if(!empty($_GET['name'])){
            $map['name'] = $_GET['name'];
        }
        //编号
        if(!empty($_GET['id'])){
            $map['id'] = $_GET['id'];
        }
        
        $list = $this->Articlecolumn->where($map)->order("id DESC")->findPage(30);
        
        $this->assign($list);
        $this->display('index');
    }
    
}
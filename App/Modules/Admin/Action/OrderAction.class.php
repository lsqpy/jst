<?php
/**
 *      @title 订单模型
 *      @author Lsq <lsqpy@163.com>
 *      @date 2013-12-29         
 */
class OrderAction extends CommonAction {

    public function _initialize(){
        parent::_initialize();
        $this->Order = D('Order');
    }
    
    public function index(){
        
        //如果指定栏目ID，显示栏目ID下的内容
        if(!empty($_GET['pid'])){
            $map['cid'] = intval($_GET['pid']);
        }
        $map['type'] = 2;   //多篇文章
        $fields = array('id','color','title','cid','sort','hits','status','addtime');
        $data = $this->Order->field($fields)->where($map)->order('sort')->findPage();
        $this->assign($data);
        $this->display();
    }
    
    public function add(){
   
        //缓存栏目列表
        if(!$cate = S("ARTICLECOLUMNSTATUS")){
                        
            //所有分类
            $map['status'] = 1;
            $cate = M('Articlecolumn')->where($map)->order('sort')->select();
        
            Vendor('Class.Cate','','.class.php');
            $cate = Cate::getListCate($cate,'&nbsp;&nbsp;');
            
            //缓存分类
            S("ARTICLECOLUMNSTATUS",$cate);
            
        }
        $this->assign('cate',$cate);
        $this->display();
    }
    
    public function doAdd(){
        //创建数据
        if(!$this->Order->create()){
            $this->error($this->Order->getError());
        }
        
        //写入数据
        if($aid = $this->Order->add()){
            
            //属性
            $attr = array();
            if(isset($_POST['aid'])){
                foreach($_POST['aid'] as $v){
                    $attr[] = array('aid'=>$aid,'bid'=>$v);    
                }
            }
            
            M('ArticleAttr')->addAll($attr);
            
            // 删除缓存数据
            S('CATE',NULL);

            $this->success("提交成功！");   
        }else{
            $this->error("提交失败！");
        }
    }
    
    public function edit(){

        //缓存栏目列表
        if(!$cate = S("ARTICLECOLUMNSTATUS")){
                        
            //所有分类
            $map['status'] = 1;
            $cate = M('Articlecolumn')->where($map)->order('sort')->select();
        
            Vendor('Class.Cate','','.class.php');
            $cate = Cate::getListCate($cate,'&nbsp;&nbsp;');
            
            //缓存分类
            S("ARTICLECOLUMNSTATUS",$cate);
        }
        
        $this->assign('cate',$cate);

        //详细信息
        $map['id'] = intval($_GET['id']);
        $info = $this->Order->where($map)->find();
        $info['attr'] = M('article_attr')->where(array('aid'=>$info['id']))->getField('bid',true);
        $this->assign("info",$info);
     
        $this->display();
    }
    
    public function doEdit(){
        
        //创建数据
        if(!$data = $this->Order->create()){
            $this->error($this->Order->getError());
        }
       
        //写入数据
        if($this->Order->save()){
            
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
        $status = $this->Order->where($map)->delete();
        if($status){
            $this->ajaxReturn($status,"删除ID:{$id},操作成功！",1);  
        }else{
            $this->ajaxReturn($status,"删除ID:{$id},操作失败！",0);
        }
    }
    
    public function search(){
        
        //标题
        if(!empty($_GET['id'])){
            $map['id'] = $_GET['id'];
        }
        
        //标题
        if(!empty($_GET['title'])){
            $map['title'] = array('like',"%".$_GET['title']."%");
        }
        
        $list = $this->Order->where($map)->order("id DESC")->findPage(30);
        $this->assign($list);
        $this->display('index');
    }

}
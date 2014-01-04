<?php
/**
 *      @title 文档模型
 *      @author Lsq <lsqpy@163.com>
 *      @date 2013-10-24         
 */
class ArticleAction extends CommonAction {

    public function _initialize(){
        parent::_initialize();
        $this->Article = D('Article');
    }
    
    public function index(){
        
        //如果指定栏目ID，显示栏目ID下的内容
        if(!empty($_GET['pid'])){
            $map['cid'] = intval($_GET['pid']);
        }
        $map['type'] = 2;   //多篇文章
        $fields = array('id','color','title','cid','sort','hits','status','addtime');
        $data = $this->Article->field($fields)->where($map)->order('sort')->findPage();
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
        if(!$this->Article->create()){
            $this->error($this->Article->getError());
        }
        
        //写入数据
        if($aid = $this->Article->add()){
            
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
        $info = $this->Article->where($map)->find();
        $info['attr'] = M('article_attr')->where(array('aid'=>$info['id']))->getField('bid',true);
        $this->assign("info",$info);
     
        $this->display();
    }
    
    public function doEdit(){
        
        //创建数据
        if(!$data = $this->Article->create()){
            $this->error($this->Article->getError());
        }
       
        //写入数据
        if($this->Article->save()){
            
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
        $status = $this->Article->where($map)->delete();
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
        
        $list = $this->Article->where($map)->order("id DESC")->findPage(30);
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
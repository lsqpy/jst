<?php
/**
 *      @title  文档模型
 */

class ArticleModel extends Model {
   
    //一对多关联模型
    /*
    protected $_link = array(
        'Profile'=>array(
        'mapping_type'    =>HAS_MANY,
             'class_name'    => 'article_attr',
             'mapping_name'  => 'attr',
             'foreign_key'  => 'aid',
             'mapping_fields'  => 'bid',
             
         ),
     );
    */
   
    //自动验证
    protected $_validate = array(

        array('title','require','名称必填！'), //默认情况下用正则进行验证
        
        array('cid','require','名称必填！'),
    
    );
     
    //自动完成
    protected $_auto = array ( 
        
        array('sort','getSort',1,'callback'), // 对sort字段在新增的时候回调getSort方法
            
        array('sort','addAttr',2,'callback'),
        
        array('addtime','time',1,'function'),    //添加时间
        
        array('uptime','time',3,'function'),    //更新时间
        
        array('type','upType',1,'callback'),    //单篇多篇
        
        array('litpic','upFile',3,'callback'),   //上传图片
        
    );
        
    //上传图片
    protected function upFile(){
        
        if($_FILES){
            
            import('ORG.Net.UploadFile');
            $upload = new UploadFile();// 实例化上传类
            $upload->maxSize  = 3145728 ;// 设置附件上传大小
            $upload->allowExts  = array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
            $upload->savePath =  './uploads/article/';// 设置附件上传目录
            $upload->autoSub = true;
            $upload->subType = 'date';
            
            if($upload->upload()) {
                $info =  $upload->getUploadFileInfo();
                return $info[0]['savename'];
            }
        }
        
        if(isset($_POST['litpic_name'])){
            return $_POST['litpic_name'];
        }
        
    }
    
    //更新文档类型
    protected function upType(){
 
        if(MODULE_NAME == "Article"){
            $type = 2;
        }elseif(MODULE_NAME == "ArticleOne"){
            $type = 1;
        }
        return $type;
    }
    
      
    //添加属性
    protected function addAttr(){
        $attr = array();
        $model = M('ArticleAttr');
        if(isset($_POST['aid'])){
            
            //清除原属性
            $map['aid'] = $_POST['id'];
            $model->where($map)->delete();
            
            foreach($_POST['aid'] as $v){
                $attr[] = array('aid'=>$_POST['id'],'bid'=>$v);    
            }
        }
        
        $model->addAll($attr);
    }   
    
       
    //获取排序
    protected function getSort(){
   
        $mapsort['pid'] = intval($_POST['pid']);
        $result = $this->where($mapsort)->order('sort DESC')->getField('sort');     
        $result++;
        return $result;
    }

    
}
<?php
/**
 *      @title  上传图片模型
 */

class UploadImageModel extends Model {
   
    
    //自动验证
    protected $_validate = array(

        array('title','require','名称必填！'), //默认情况下用正则进行验证
        
    );
     
    //自动完成
    protected $_auto = array ( 
        
        array('sort','getSort',1,'callback'), // 对sort字段在新增的时候回调getSort方法
        
        array('addtime','time',1,'function'),    //添加时间
        
        array('uptime','time',3,'function'),    //更新时间
        
        array('litpic','upFile',3,'callback'),   
       
    );
        
    protected function upFile(){
        
        if($_FILES){
            
            import('ORG.Net.UploadFile');
            $upload = new UploadFile();// 实例化上传类
            $upload->maxSize  = 3145728 ;// 设置附件上传大小
            $upload->allowExts  = array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
            $upload->savePath =  './uploads/upimg/';// 设置附件上传目录
            
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
    
      
    //获取排序
    protected function getSort(){
   
        $mapsort['id'] = intval($_POST['id']);
        $result = $this->where($mapsort)->order('sort DESC')->getField('sort');     
        $result++;
        return $result;
    }

    
}
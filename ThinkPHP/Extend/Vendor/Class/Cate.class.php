<?php
class Cate{
    //传递一个父级ID，获取所有子级分类
    static  public function getParents($cate,$id){
        $data = array();
        foreach($cate as $v){
            if($v['pid'] == $id){
                $data[] = $v['id'];
                self::getParents($cate,$v['id']);
            }
        }
        return $data;
    }
    
    //传递一个子类ID，获取所有父类数据
    static  public function getChilds($cate,$id){
        $data = array();
        foreach($cate as $v){
            if($v['area_id'] == $id){
                $data[] = $v;
                $data = array_merge(self::getChilds($cate,$v['pid']),$data);
            }
        }
        return $data;
    }
    //返回列表分类，包含子类
    static public function getListCate($cate,$html='&nbsp;&nbsp;',$level=0,$pid=0){
        $data = array();
        if(!$cate) return $data;
    
        foreach($cate as $v){
            if($v['pid'] == $pid){
                $v['level'] = $level+1;
          
                if(is_array($html)){//array('├─','│','└─')
                    
                    $v['html'] = self::mergeTag("&nbsp;&nbsp;",$html,$level);
                }else{
                    $v['html'] = str_repeat($html,$level);    
                }
                
                $data[] = $v;
                $data = array_merge($data,self::getListCate($cate,$html,$level+1,$v['id']));
            }
        }
        return $data;
    }
    
    static public function mergeTag($str,$arr,$num){
        $html = '';
        for($i=0;$i<$num;$i++){
            if($num == 1 || $i == $num-1){
                $html .= $arr[0];  
            }else{
                $html .= $arr[1].$str;    
            }
              
        }
        return $html;
    }
    
    //返回列表分类，包含子类
    static public function getCateChild($cate,$pid=0){
        $data = array();
        if(!$cate) return $data;
   
        foreach($cate as $v){
            if($v['pid'] == $pid){
                $v['child'] = self::getCateChild($cate,$v['id']);
                $data[] = $v;
            }
        }
        return $data;
    }
    
    //返回列表分类，包含子类
    static public function getCateChildAccess($cate,$access=null,$pid=0){
        $data = array();
        if(!$cate) return $data;

        foreach($cate as $v){
            
            if(is_array($access)){
                $v['access'] = in_array($v['id'],$access) ? 1 : 0;
            }
            
            if($v['pid'] == $pid){ 
                $v['child'] = self::getCateChildAccess($cate,$access,$v['id']);
                $data[] = $v;
            }
        }

        return $data;
    }
   
}

?>
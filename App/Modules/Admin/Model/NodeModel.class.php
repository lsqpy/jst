<?php
/**
 *      @title  节点模型
 */
class NodeModel extends Model {
   
    //自动验证
    protected $_validate = array(

        array('gid','require','组ID必填！'), //默认情况下用正则进行验证
        
        array('title','require','名称必填！'), 
        
        array('group','require','项目节点必填！'), 
        
        array('level','require','级别必填！'), 
    
    );
     
    //自动完成
    protected $_auto = array ( 

        array('sort','getSort',1,'callback'), // 对name字段在新增的时候回调getName方法
        
        array('name','mergeGMA',3,'callback'), 
        //$this->Node->name = $_POST['group']."-".$_POST['module']."-".$_POST['action'];
    );
        
       
    //组合 group-module-action
    protected function mergeGMA(){
        
        $str = '';
        if(!empty($_POST['group'])){
            $str .= $_POST['group'];
        }
        
        if(!empty($_POST['module'])){
            $str .= '-'.$_POST['module'];
        }
        
        if(!empty($_POST['action'])){
            $str .= '-'.$_POST['action'];
        }
        
        return $str;
    }
    //获取排序
    protected function getSort(){
   
        $mapsort['pid'] = intval($_POST['pid']);
        $result = $this->where($mapsort)->order('sort DESC')->getField('sort');     
        $result++;
        return $result;
    }
    
    //获取权限
    public function getAccess($data=null,$pid=0){
        
        $map['status'] = 1;
        $fields = array('id','pid','title');
        $data = $this->field($fields)->where($map)->order('sort')->select();
        
        foreach($data as $v){

            if($v['pid'] == $pid){
                
                $v['child'] = $v;dump($v);
                //$data[] = $this->getAccess($data,$v['id']);
            }
        }
        return $data;
    }

    
}
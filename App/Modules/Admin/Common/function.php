<?php
/**
 *    @title 缓存数组中的ID变更为主键ID
 *    @param array 数组
 *    @return array
 * 
 */
 function arrayMergeId($id='',$name=''){
     
     $arr = S("ARTICLECOLUMNSTATUS");
     
     $data = array();
     foreach( $arr as $v ){
        
        if($id == $v['id']){
            $newName = $v[$name];
        }        
        $data[$v['id']] = $v;
     }
     if(isset($id) && $newName){
        return $newName;
     }elseif(isset($id)){
        return "暂无数据";
     }else{
        return $data;
     }
     
 }
/**
 *    @title 获取后台SESSION信息
 *    @param name 字段参数
 *    @return bool|true&false || @param value
 * 
 */
 function getAdminUser($name=''){
    $data = unserialize($_SESSION['adminUser']);
    
    //判断SESSION数据是否存在
    if($data){
        
        //判断如果param有参数并且$data数据中存在这个字段，返回$data数据中的值,否则返回bool
        if(!empty($name) && !empty($data[$name])){
            return $data[$name];
        }else{
            return true;
        }    
    }else{
        return false;
    }
    
 }
 
 /**
  *     @title 自定义验证AUTH规则
  *     @param name 需要验证的字符串
  *     @return bool|true&false
  */
 function getAuthCheck($rule,$string,$relation='or'){
    
    //如果是超级管理员无需验证
    if($_SESSION[C('ADMIN_AUTH_KEY')]){
        return $string;
    }
    
    $tmp = explode('-',$rule);
    //无需验证的操作和方法
    $notAuth = in_array($tmp[0],explode(",",C("AUTH_CONFIG.NOT_AUTH_MODULE"))) || in_array($tmp[1],explode(",",C("AUTH_CONFIG.NOT_AUTH_ACTION")));

    //如果是无需验证的模型，直接返回true
    if($notAuth){
        return $string;
    }

    if(C("AUTH_CONFIG.AUTH_ON")){
        import('ORG.Util.Auth');//加载类库
        $auth=new Auth();
        return $auth->check($rule,getAdminUser('id'))?$string:'';
    }
 }
 
  /**
  *     @title 自定义验证AUTH规则(多规则)
  *     @param name 需要验证的字符串
  *     @return bool|true&false
  */
 function getAuthCheckAll($rule,$string,$relation='or'){
    
    //如果是超级管理员无需验证
    if($_SESSION[C('ADMIN_AUTH_KEY')]){
        return $string;
    }
    
    //将规则转换数组
    $ruleArr = explode(',',$rule);
    import('ORG.Util.Auth');//加载类库
    $auth=new Auth();
    
    //
    foreach($ruleArr as $v){
        $tmp = explode('-',$v);
        //无需验证的操作和方法
        $notAuth = in_array($tmp[0],explode(",",C("AUTH_CONFIG.NOT_AUTH_MODULE"))) || in_array($tmp[1],explode(",",C("AUTH_CONFIG.NOT_AUTH_ACTION")));
    
        //如果是无需验证的模型，直接返回true
        if($notAuth){
            return $string;
        }
        
        if(C("AUTH_CONFIG.AUTH_ON")){
            return $auth->check($v,getAdminUser('id'))?$string:'';
        }
    }
    

    
 }
?>
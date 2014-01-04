<?php
class AreaWidget extends Widget{
    public function render($data){
        $str = '';
        
        $province = M('Area')->where($data)->select();
        foreach($province as $v){
            if($v['area_id'] == $data['id']){
                $str .= "<option value='".$v['area_id']."' selected='selected'>".$v['title']."</option>";
            }else{
                $str .= "<option value='".$v['area_id']."'>".$v['title']."</option>";    
            }
        }
       
        return $str;
    } 
}
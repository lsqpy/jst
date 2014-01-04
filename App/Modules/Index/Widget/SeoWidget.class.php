<?php
class SeoWidget extends Widget{
    public function render($data){
        $info = F('webconfig','','./App/Conf/');
        $seoStr = "<title>".$info['name']."</title>";
        $seoStr .= "<meta name='keywords' content='".$info['keywords']."' />";
        $seoStr .= "<meta name='description' content='".$info['description']."' />";
        return $seoStr;
    } 
}
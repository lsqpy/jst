<?php
$route_config = include 'routeconfig.php';
$group_config = include 'groupconfig.php';

$config = array(
    //URL是否不区分大小写 
    'URL_CASE_INSENSITIVE' =>true,

    //超级管理员名称
    'SUPERADMIN'=>'admin',
    //超级管理员识别
    'ADMIN_AUTH_KEY'     =>  'superadmin',    
    //过滤GET/POST数据
    //'VAR_FILTERS'=>'htmlspecialchars',
    //'SHOW_PAGE_TRACE' =>true,
);

return array_merge($route_config,$group_config,$config);

?>
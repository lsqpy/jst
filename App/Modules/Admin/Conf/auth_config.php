<?php
return array(
	'AUTH_CONFIG'=>array(
        'AUTH_ON' => true, //认证开关
        'AUTH_TYPE' => 1, // 认证方式，1为时时认证；2为登录认证。
        'AUTH_GROUP' => 'think_auth_group', //用户组数据表名
        'AUTH_GROUP_ACCESS' => 'think_auth_group_access', //用户组明细表
        'AUTH_RULE' => 'think_node', //权限规则表
        'AUTH_USER' => 'think_admin',//用户信息表
        'NOT_AUTH_MODULE' => 'Index',
        'NOT_AUTH_ACTION' => 'doAdd,doEdit',
    )
);
?>
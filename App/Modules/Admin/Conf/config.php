<?php
$db_config = include './config.inc.php';
$auth_config = include 'auth_config.php';
$config = array(
    'SHOW_PAGE_TRACE' =>true,
);
return array_merge($db_config,$auth_config,$config);
?>
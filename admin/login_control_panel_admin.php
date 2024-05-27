<?php

include "../connect.php";
 
$admin_password = sha1($_POST['admin_password']);
$admin_username = filterRequest("admin_username"); 

getData(
    "admin" , " admin_username = ? AND  admin_password = ?" , array($admin_username, $admin_password)
);
?>
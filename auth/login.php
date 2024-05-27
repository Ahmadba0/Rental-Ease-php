<?php

include "../connect.php";
 
$password = sha1($_POST['password']);
$phone = filterRequest("phone"); 

getData(
    "users" , " users_phone = ? AND  users_password = ?" , array($phone, $password)
);
?>
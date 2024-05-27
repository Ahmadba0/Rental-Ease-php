<?php

include '../connect.php';
 
 
$users_phone = filterRequest('users_phone');
$admin_id = filterRequest('admin_id');




$stmt = $con->prepare("DELETE FROM `admin` WHERE `admin_id` = '$admin_id'");
$stmt->execute();
$count = $stmt->rowCount();

if ($count>0) {
    $data = array(
        'users_type' => '1',
    );
    updateData('users' , $data , "users_phone = $users_phone");
 }
 




 
?>
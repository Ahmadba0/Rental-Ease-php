<?php
include '../connect.php';
$users_id = filterRequest('users_id');
$data = array(
    "users_type" => '1'
);
updateData('users' , $data , "users_id = $users_id");
insertNotification("RentalEase" , "تم تنشيط حسابك" ,'subadmin', $users_id , "users$users_id" , "none" , "post");
?>
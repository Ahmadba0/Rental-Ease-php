<?php
include "../connect.php";


$post_num = filterRequest("post_num");
$users_id = filterRequest("users_id");

$data = array(
    "post_status" => "2",
);

updateData("post" , $data , "post_num = '$post_num'");
insertNotification("RentalEase" , "تم رفض إعلانك ذات الرقم $post_num" ,'subadmin', $users_id , "users$users_id" , "none" , "cancelpost");


?>
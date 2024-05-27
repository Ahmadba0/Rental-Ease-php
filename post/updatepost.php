<?php
//التعديل لاضافة رقم حوالة سيرياتيل كاش

include "../connect.php";
$post_num = filterRequest("post_num");
$post_code = filterRequest("post_code");
$users_id = filterRequest("users_id");

$data = array(
    "post_code" => $post_code,
);

updateData("post" , $data , "post_num = '$post_num'");

insertNotification("RentalEase" ,"لقد تم إضافة إعلان جديد",'user' , $users_id , "subadmin" , "none" , "newpost");


?>
<?php
include '../connect.php';

$post_case0 =filterRequest('post_case0');
$post_num =filterRequest('post_num');
$users_id = filterRequest("users_id");
$data = array(
    'post_case0' => $post_case0,
);
updateData("post" , $data , "post_num = '$post_num'");

insertNotification("RentalEase" , "لقد تم توضيح سبب احذف للإعلان $post_num" ,'subadmin', $users_id , "users$users_id" , "none" , "post");

?>
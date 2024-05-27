<?php
include '../connect.php';

$post_num = filterRequest('post_num');
$users_id = filterRequest('users_id');

$data = array(
    'post_status' => '1',
    'post_code' => '123456789'
);

updateData('post' , $data , "post_num = $post_num AND users_id = $users_id");

?>
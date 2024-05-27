<?php
include '../connect.php';

 $users_id = filterRequest('users_id');

$data = array(
    'users_level' => '3'
);

updateData('users' , $data , "users_id = $users_id");

?>
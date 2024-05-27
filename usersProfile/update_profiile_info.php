<?php

include '../connect.php';
$users_id = filterRequest('users_id');
$users_name = filterRequest('users_name');
$users_phone = filterRequest('users_phone');
$users_email = filterRequest('users_email');

$data = array(
    'users_name' => $users_name,
    'users_phone' => $users_phone,
    'users_email' => $users_email,
);
updateData('users' , $data , "users_id = $users_id");

?>
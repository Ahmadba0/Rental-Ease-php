<?php

include '../connect.php';

$users_id = filterRequest('users_id');
$users_level = filterRequest('users_level');

$data = array(
    'users_level'=> $users_level
);
updateData('users' , $data , "users_id = $users_id");

?>
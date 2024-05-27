<?php

include '../connect.php';

$phone = filterRequest('phone');

$admin_username = filterRequest('admin_username');
$admin_password = sha1($_POST["admin_password"]);
$admin_isPostAdmin = filterRequest('admin_isPostAdmin');
$admin_isReviewAdmin = filterRequest('admin_isReviewAdmin');

$users_name     = filterRequest("users_name");
$users_email    = filterRequest("users_email");
$users_password = sha1($_POST["users_password"]);
$users_verifycode = rand(10000 , 99999);
$users_type = filterRequest('users_type');

    //no in users
    //
    $data = array(
        "admin_username"      => $admin_username,
        "admin_phone"         => $phone,
        "admin_password"      => $admin_password,
        "admin_isPostAdmin"   => $admin_isPostAdmin,
        "admin_isReviewAdmin" => $admin_isReviewAdmin,
    ); 

    insertData("admin" , $data);
    
    $stmt=$con->prepare("INSERT INTO `users`(`users_name`, `users_email`,`users_phone`, `users_password` , `users_verifycode` , `users_type`) VALUES (?,?,?,?,?,?)");
    $stmt->execute(array($users_name , $users_email ,$phone, $users_password , $users_verifycode , $users_type));
     $count = $stmt->rowCount();




?>
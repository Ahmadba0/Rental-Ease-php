<?php
    include "../connect.php";

$post_type  = filterRequest("post_type");
$post_num   = filterRequest("post_num");
$users_id   = filterRequest("users_id");
 
$stmt = $con->prepare("SELECT * FROM `post` WHERE `post_num` = ?   ");
$stmt->execute(array($post_num));
$count = $stmt->rowCount();
if($count > 0){
    printFailure();
}else{ 
       $data = array(
    "post_type"   => $post_type,
    "post_num"    => $post_num,
    "users_id"    => $users_id,
);  
//sendEmail($usersemail , "Verify Code" , $usersverifycode);
insertData("post" , $data);
}






?>
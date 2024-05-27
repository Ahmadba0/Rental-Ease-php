<?php

include "../connect.php";
 
$report_type = filterRequest('report_type');
$users_id = filterRequest('users_id');
$post_num = filterRequest('post_num');

$stmt = $con->prepare("SELECT * FROM `report` WHERE `post_num` = ?");
$stmt->execute(array($post_num));
$count = $stmt->rowCount();

if ($count > 0) {
    printFailure();
}else{
    $data = array(
        'report_type'=>$report_type,
        'users_id' =>$users_id,
        'post_num' =>$post_num,
    );
    insertData('report' , $data);


insertNotification("RentalEase" , "اعتراض جديد على الإعلان ذات الرقم $post_num",'user' , $users_id , "subadmin" , "none" , "none");

    
}
?>
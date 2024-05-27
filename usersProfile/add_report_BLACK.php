<?php

include "../connect.php";
 
$report_type = filterRequest('report_type');
$users_id = filterRequest('users_id');
 

$stmt = $con->prepare("SELECT * FROM `report` WHERE `report_type` = ? AND `users_id`=?");
$stmt->execute(array($report_type , $users_id));
$count = $stmt->rowCount();

if ($count > 0) {
    printFailure();
}else{
    $data = array(
        'report_type'=>$report_type,
        'users_id' =>$users_id,
   
    );
    insertData('report' , $data);
    
    insertNotification("RentalEase" , "اعتراض جديد من السمتخدم صاحب الرقم $users_id",'user' , $users_id , "subadmin" , "none" , "none");



    
}
?>
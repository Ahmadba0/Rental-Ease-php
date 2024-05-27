<?php
include "../connect.php";


$users_id = filterRequest("users_id");
$users_case0 = filterRequest("users_case0");

$data = array(
    "users_type" => "0",
    "users_case0" => $users_case0,
);

updateData("users" , $data , "users_id = '$users_id'");
insertNotification("RentalEase" , "تم إضافتك إلى قائمة الحظر يمكنك مراجعتنا من خلال قسم الاستفسارات",'subadmin' , $users_id , "users$users_id" , "none" , "addblack");

?>




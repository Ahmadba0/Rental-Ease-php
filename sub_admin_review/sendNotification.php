<?php
include '../connect.php';
$users_id = filterRequest('users_id');
$post_num = filterRequest('post_num');
$choose = filterRequest('choose');
 

if ($choose == '1') {
    //day 30 wait 
    $count=  insertNotification("المراجعات" , "سيتم حذف الاعلان $post_num" ,'subadmin', $users_id , "users$users_id" , "none" , "post") ;
    if ($count>0) {
        printSuccess();
    }else{
        printFailure();
    }
}

else if ($choose == '2') {
    //day 45 wait 
    $count=  insertNotification("المراجعات" , "تم حذف الاعلان $post_num" ,'subadmin', $users_id , "users$users_id" , "none" , "post");
    if ($count>0) {
        printSuccess();
    }else{
        printFailure();
    }
}

else if ($choose == '3') {
    //day 30 active 
    $count=   insertNotification("المراجعات" , "سيتم التحويل الى الانتظار $post_num" ,'subadmin', $users_id , "users$users_id" , "none" , "post");
    if ($count>0) {
        printSuccess();
    }else{
        printFailure();
    }
}

else if ($choose == '4') {
    //day 45 active 
    $count=  insertNotification("المراجعات" , "تم التحويل الى الانتظار $post_num" ,'subadmin', $users_id , "users$users_id" , "none" , "post");
    if ($count>0) {
        printSuccess();
    }else{
        printFailure();
    }
}

else if ($choose == '5') {
    //day 30 cancel 
    $count=   insertNotification("المراجعات" , "تم حذف الاعلان $post_num" ,'subadmin', $users_id , "users$users_id" , "none" , "post");
    if ($count>0) {
        printSuccess();
    }else{
        printFailure();
    }
}

else if ($choose == '6') {
    //day 30 end 
    $count=  insertNotification("المراجعات" , "سيتم التحويل الى الانتظار $post_num" ,'subadmin', $users_id , "users$users_id" , "none" , "post");
    if ($count>0) {
        printSuccess();
    }else{
        printFailure();
    }
}

else if ($choose == '7') {
    //day 45 end 
    $count=   insertNotification("المراجعات" , "تم التحويل الى الانتظار $post_num" ,'subadmin', $users_id , "users$users_id" , "none" , "post");
    if ($count>0) {
        printSuccess();
    }else{
        printFailure();
    }
}
 



 





 



 




?>
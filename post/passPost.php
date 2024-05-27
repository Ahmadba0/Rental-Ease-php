<?php

    include "../connect.php";

    $users_id = filterRequest("users_id");  
 


    $stmt=$con->prepare("INSERT INTO `notification`(`notification_title`, `notification_body`,`notification_actor`, `notification_userid`) VALUES (?,?,?,?)");
    $stmt->execute(array("RentalEase" , "لقد تم إضافة إعلان جديد" ,'user', $users_id));
    sendGCM("RentalEase" , "لقد تم إضافة إعلان جديد" , "subadmin" , "none" , "newpost");
    $count = $stmt->rowCount();
   //$count =  insertNotification("RentalEase" ,"لقد تم إضافة إعلان جديد" , $users_id , "subadmin" , "none" , "newpost");
    if($count>0){
        printSuccess();
    }
?>
<?php
    include "../connect.php";
    $post_num = filterRequest("post_num");
    $users_id = filterRequest("users_id");

    $data = array(
        "post_status" => "1"
    );
    updateData("post" , $data , "post_num = '$post_num'");


    insertNotification("RentalEase" , "لقد تم الموافقة على إعلانك ذات الرقم$post_num" ,'subadmin', $users_id , "users$users_id" , "none" , "post");

    // $stmt1 = $con->prepare("SELECT COUNT(post.post_id) AS countPost  FROM `post` WHERE `users_id` = ? AND `post_status` = '1'");
    // $stmt1->execute(array($users_id)) ;
    // $count1 = $stmt1->rowCount();
    // $data1 = $stmt1->fetchAll(PDO::FETCH_ASSOC);
    // if ($count1>0) {
    //     echo json_encode(array("status1" => "success1","data1" => $data1));

    // }

?>
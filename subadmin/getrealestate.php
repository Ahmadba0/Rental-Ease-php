<?php
    include "../connect.php";


$realestate_type = filterRequest("realestate_type");
$users_id = filterRequest("users_id");

//getAllData("usersrealestate" ,  "post_status = 0 AND realestate_type = ?" , array($realestate_type));
//wait
$stmt = $con->prepare("SELECT * FROM `usersrealestate` WHERE `users_type` != '0' AND `post_status` = '0' AND `realestate_type` = ? AND `users_id` != $users_id");
$stmt->execute(array($realestate_type)) ;
$count = $stmt->rowCount();
$data = $stmt->fetchAll(PDO::FETCH_ASSOC);

//active
$stmt1 = $con->prepare("SELECT * FROM `usersrealestate` WHERE `users_type` != '0' AND `post_status` = '1' AND `realestate_type` = ? AND `users_id` != $users_id");
$stmt1->execute(array($realestate_type)) ;
$count1 = $stmt1->rowCount();
$data1 = $stmt1->fetchAll(PDO::FETCH_ASSOC);

//cancel
$stmt2 = $con->prepare("SELECT * FROM `usersrealestate` WHERE `users_type` != '0' AND `post_status` = '2' AND `realestate_type` = ? AND `users_id` != $users_id");
$stmt2->execute(array($realestate_type)) ;
$count2 = $stmt2->rowCount();
$data2 = $stmt2->fetchAll(PDO::FETCH_ASSOC);

//ended
$stmt3 = $con->prepare("SELECT * FROM `usersrealestate` WHERE `users_type` != '0' AND `post_status` = '3' AND `realestate_type` = ? AND `users_id` != $users_id");
$stmt3->execute(array($realestate_type)) ;
$count3 = $stmt3->rowCount();
$data3 = $stmt3->fetchAll(PDO::FETCH_ASSOC);

if ($count>0 || $count1 > 0 || $count2 > 0 || $count3 > 0) {
    echo json_encode(array("status" => "success","data" => $data ,"data1" => $data1 ,"data2" => $data2 ,"data3" => $data3));
   // echo json_encode(array("status1" => "success","data1" => $data1));
   // echo json_encode(array("status2" => "success","data2" => $data2));
   // echo json_encode(array("status3" => "success","data3" => $data3));
} else {
    printFailure();
}

?>
<?php
include '../connect.php';

$users_id = filterRequest("users_id");
 

$stmt = $con->prepare("SELECT * FROM `userscars` WHERE `users_id` = ? AND post_status = '1' ");
$stmt->execute(array($users_id )) ;
$count = $stmt->rowCount();
$data = $stmt->fetchAll(PDO::FETCH_ASSOC);

$stmt1 = $con->prepare("SELECT * FROM `usersrealestate` WHERE `users_id` = ? AND post_status = '1' ");
$stmt1->execute(array($users_id )) ;
$count1 = $stmt1->rowCount();
$data1 = $stmt1->fetchAll(PDO::FETCH_ASSOC);

$stmt2 = $con->prepare("SELECT * FROM `usersswim` WHERE `users_id` = ? AND post_status = '1' ");
$stmt2->execute(array($users_id )) ;
$count2 = $stmt2->rowCount();
$data2 = $stmt2->fetchAll(PDO::FETCH_ASSOC);

$stmt3 = $con->prepare("SELECT * FROM `userswidding` WHERE `users_id` = ? AND post_status = '1' ");
$stmt3->execute(array($users_id )) ;
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
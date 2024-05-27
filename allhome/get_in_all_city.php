<?php
include '../connect.php';

$stmt = $con->prepare("SELECT * FROM `userscars` WHERE post_status='1'");
$stmt->execute(array()) ;
$count = $stmt->rowCount();
$data = $stmt->fetchAll(PDO::FETCH_ASSOC);

$stmt1 = $con->prepare("SELECT * FROM `usersrealestate`");
$stmt1->execute(array()) ;
$count1 = $stmt1->rowCount();
$data1 = $stmt1->fetchAll(PDO::FETCH_ASSOC);

$stmt2 = $con->prepare("SELECT * FROM `usersswim`");
$stmt2->execute(array()) ;
$count2 = $stmt2->rowCount();
$data2 = $stmt2->fetchAll(PDO::FETCH_ASSOC);

$stmt3 = $con->prepare("SELECT * FROM `userswidding`");
$stmt3->execute(array()) ;
$count3 = $stmt3->rowCount();
$data3 = $stmt3->fetchAll(PDO::FETCH_ASSOC);

if ($count>0 || $count1 > 0 || $count2 > 0 || $count3 > 0) {
    echo json_encode(array("status" => "success","data" => $data ,"data1" => $data1 ,"data2" => $data2 ,"data3" => $data3));
} else {
    printFailure();
}


?>
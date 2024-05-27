<?php
include '../connect.php';

$city = filterRequest('city');

$stmt = $con->prepare("SELECT * FROM `userscars` WHERE `cars_locationcity` = ?");
$stmt->execute(array($city)) ;
$count = $stmt->rowCount();
$data = $stmt->fetchAll(PDO::FETCH_ASSOC);

$stmt1 = $con->prepare("SELECT * FROM `usersrealestate`  WHERE `realestate_city` =?");
$stmt1->execute(array($city)) ;
$count1 = $stmt1->rowCount();
$data1 = $stmt1->fetchAll(PDO::FETCH_ASSOC);

$stmt2 = $con->prepare("SELECT * FROM `usersswim` WHERE `swim_city` =?");
$stmt2->execute(array($city)) ; 
$count2 = $stmt2->rowCount();
$data2 = $stmt2->fetchAll(PDO::FETCH_ASSOC);

$stmt3 = $con->prepare("SELECT * FROM `userswidding`  WHERE `widding_city` =?");
$stmt3->execute(array($city)) ;
$count3 = $stmt3->rowCount();
$data3 = $stmt3->fetchAll(PDO::FETCH_ASSOC);

if ($count>0 || $count1 > 0 || $count2 > 0 || $count3 > 0) {
    echo json_encode(array("status" => "success","data" => $data ,"data1" => $data1 ,"data2" => $data2 ,"data3" => $data3));
} else {
    printFailure();
}


?>
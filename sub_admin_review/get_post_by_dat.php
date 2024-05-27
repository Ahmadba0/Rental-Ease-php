<?php


include '../connect.php';

$day=filterRequest('day');
$post_status=filterRequest('post_status');


$stmt = $con->prepare("SELECT * FROM userscars WHERE post_status = ? AND post_date <= DATE_SUB(NOW(), INTERVAL ? DAY)");
$stmt->execute(array($post_status ,$day  )) ;
$count = $stmt->rowCount();
$data = $stmt->fetchAll(PDO::FETCH_ASSOC);


$stmt1 = $con->prepare("SELECT * FROM usersrealestate WHERE post_status = ? AND post_date <= DATE_SUB(NOW(), INTERVAL ? DAY)");
$stmt1->execute(array($post_status , $day)) ;
$count1 = $stmt1->rowCount();
$data1 = $stmt1->fetchAll(PDO::FETCH_ASSOC);

$stmt2 = $con->prepare("SELECT * FROM usersswim WHERE post_status = ? AND post_date <= DATE_SUB(NOW(), INTERVAL ? DAY)");
$stmt2->execute(array($post_status ,$day )) ;
$count2 = $stmt2->rowCount();
$data2 = $stmt2->fetchAll(PDO::FETCH_ASSOC);

$stmt3 = $con->prepare("SELECT * FROM userswidding WHERE post_status = ? AND post_date <= DATE_SUB(NOW(), INTERVAL ? DAY)");
$stmt3->execute(array($post_status , $day)) ;
$count3 = $stmt3->rowCount();
$data3 = $stmt3->fetchAll(PDO::FETCH_ASSOC);

if ($count>0 || $count1 > 0 || $count2 > 0 || $count3 > 0) {
    echo json_encode(array("status" => "success","data" => $data ,"data1" => $data1 ,"data2" => $data2 ,"data3" => $data3));
 
} else {
    printFailure();
}

?>
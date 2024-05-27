<?php
    include "../connect.php";



//user
$stmt = $con->prepare("SELECT * FROM `report` WHERE `report_type` = '1'");
$stmt->execute(array()) ;
$count = $stmt->rowCount();
$data = $stmt->fetchAll(PDO::FETCH_ASSOC);

//post
$stmt1 = $con->prepare("SELECT * FROM `report` WHERE `report_type` = '0'");
$stmt1->execute(array()) ;
$count1 = $stmt1->rowCount();
$data1 = $stmt1->fetchAll(PDO::FETCH_ASSOC);



if ($count>0 || $count1 > 0) {
    echo json_encode(array("status" => "success","data" => $data ,"data1" => $data1));
   // echo json_encode(array("status1" => "success","data1" => $data1));
   // echo json_encode(array("status2" => "success","data2" => $data2));
   // echo json_encode(array("status3" => "success","data3" => $data3));
} else {
    printFailure();
}

?>
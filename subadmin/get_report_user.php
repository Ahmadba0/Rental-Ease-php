<?php
include "../connect.php";

$stmt = $con->prepare("SELECT * FROM `users`  JOIN `report` ON users.users_id = report.users_id AND report.report_type = '1'");
$stmt->execute(array()) ;
$count = $stmt->rowCount();
$data = $stmt->fetchAll(PDO::FETCH_ASSOC);

if ($count>0) {
    echo json_encode(array("status" => "success","data" => $data));
} else {
    printFailure();
}
?>


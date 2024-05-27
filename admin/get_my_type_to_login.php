<?php
include '../connect.php';



$users_phone = filterRequest('users_phone');

$stmt=$con->prepare("SELECT users_type from users where users_phone = ?");
$stmt->execute(array($users_phone));
$count = $stmt->rowCount();
$data = $stmt->fetchAll(PDO::FETCH_ASSOC);

if ($count>0) {
    echo json_encode(array("status" => "success","data" => $data));
} else {
    printFailure();
}


?>
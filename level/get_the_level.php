<?php
include '../connect.php';

$users_id = filterRequest('users_id');

$stmt = $con->prepare("SELECT users_level FROM `users` WHERE `users_id` = ?");
$stmt->execute(array($users_id)) ;
$count = $stmt->rowCount();
$data = $stmt->fetchAll(PDO::FETCH_ASSOC);

if ($count>0 ) {
    echo json_encode(array("status" => "success","data" => $data));
} else {
    printFailure();
}




?>
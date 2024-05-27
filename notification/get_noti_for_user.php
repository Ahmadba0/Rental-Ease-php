<?php

include "../connect.php";
$users_id = filterRequest('users_id');
$notification_actor = filterRequest('notification_actor');

//getDataNew("notification","notification_actor = $notification_actor AND notification_userid  = $users_id");

$stmt = $con->prepare("SELECT * FROM `notification` WHERE `notification_actor` = ? AND `notification_userid` = ?");
$stmt->execute(array($notification_actor, $users_id )) ;
$count = $stmt->rowCount();
$data = $stmt->fetchAll(PDO::FETCH_ASSOC);
if ($count>0) {
    echo json_encode(array("status" => "success","data" => $data));
 
} else {
    printFailure();
}
?>
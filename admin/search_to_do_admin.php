<?php
include '../connect.php';

$phone = filterRequest('phone');

$stmt = $con->prepare("SELECT * FROM `users` WHERE `users_phone` = ?");
$stmt->execute(array($phone));
$count = $stmt->rowCount();

if ($count > 0) {
    printSuccess();
}else{
    printFailure();
}

?>
<?php
include '../connect.php';

$post_num = filterRequest('post_num');
 
$stmt=$con->prepare("UPDATE post SET post_status = '0' , post_code = '0' , post_date = CURRENT_TIMESTAMP WHERE post_num = ?");
$stmt->execute(array($post_num));
$count = $stmt->rowCount();
if ($count>0) {
    printSuccess();
} else {
    printFailure();
}




?>
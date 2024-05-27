<?php
include '../connect.php';

$admin_isAdmin = filterRequest('admin_isAdmin');
$admin_isPostAdmin = filterRequest('admin_isPostAdmin');
$admin_isReviewAdmin = filterRequest('admin_isReviewAdmin');
$admin_phone = filterRequest('admin_phone');
    //1     1       1
if ($admin_isAdmin == '1' && $admin_isPostAdmin == '1' && $admin_isReviewAdmin == '1') {
    $stmt=$con->prepare("UPDATE `admin` SET admin_isReviewAdmin = '0' WHERE admin_phone = ?");
    $stmt->execute(array($admin_phone));
    $count = $stmt->rowCount();

    $stmt1=$con->prepare("UPDATE `users` SET users_type = '33' WHERE users_phone = ?");
    $stmt1->execute(array($admin_phone));
    $count1 = $stmt1->rowCount();

    if ($count>0 || $count1>0) {
        printSuccess();
    } else {
    printFailure();
    }
}
    //1     0       1
else if ($admin_isAdmin == '1' && $admin_isPostAdmin == '0' && $admin_isReviewAdmin == '1') {
    $stmt=$con->prepare("UPDATE `admin` SET admin_isReviewAdmin = '0' WHERE admin_phone = ?");
    $stmt->execute(array($admin_phone));
    $count = $stmt->rowCount();

    $stmt1=$con->prepare("UPDATE `users` SET users_type = '3' WHERE users_phone = ?");
    $stmt1->execute(array($admin_phone));
    $count1 = $stmt1->rowCount();

    if ($count>0 || $count1>0) {
        printSuccess();
    } else {
    printFailure();
    }
}
    //0     1       1
else if ($admin_isAdmin == '0' && $admin_isPostAdmin == '1' && $admin_isReviewAdmin == '1') {
    $stmt=$con->prepare("UPDATE `admin` SET admin_isReviewAdmin = '0' WHERE admin_phone = ?");
    $stmt->execute(array($admin_phone));
    $count = $stmt->rowCount();

    $stmt1=$con->prepare("UPDATE `users` SET users_type = '2' WHERE users_phone = ?");
    $stmt1->execute(array($admin_phone));
    $count1 = $stmt1->rowCount();

    if ($count>0 || $count1>0) {
        printSuccess();
    } else {
    printFailure();
    }
}  
    //0     0       1
else if ($admin_isAdmin == '0' && $admin_isPostAdmin == '0' && $admin_isReviewAdmin == '1') {
    // $stmt=$con->prepare("UPDATE `admin` SET admin_isPostAdmin = '0' WHERE admin_phone = ?");
    // $stmt->execute(array($admin_phone));
    // $count = $stmt->rowCount();

    $stmt1=$con->prepare("UPDATE `users` SET users_type = '1' WHERE users_phone = ?");
    $stmt1->execute(array($admin_phone));
    $count1 = $stmt1->rowCount();

    $stmt2 = $con->prepare("DELETE FROM `admin` WHERE `admin_phone` = ?");
    $stmt2->execute(array($admin_phone));
    $count2 = $stmt2->rowCount();

    if ($count1>0 || $count2>0) {
        printSuccess();
    } else {
    printFailure();
    }
}


?>
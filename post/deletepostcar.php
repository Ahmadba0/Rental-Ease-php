<?php
//

include "../connect.php";
$post_num = filterRequest("post_num");
$imagename1 = filterRequest("imagename1");
$imagename2 = filterRequest("imagename2");
$imagename3 = filterRequest("imagename3");

$stmt1 = $con->prepare("DELETE FROM `post` WHERE `post_num` = '$post_num'");
$stmt1->execute();
$count1 = $stmt1->rowCount();
$stmt2 = $con->prepare("DELETE FROM `cars` WHERE `post_num` = '$post_num'");
$stmt2->execute();
$count2 = $stmt2->rowCount();
$stmt3 = $con->prepare("DELETE FROM `rentorsell` WHERE `post_num` = '$post_num'");
$stmt3->execute();
$count3 = $stmt3->rowCount();


if ($count1 > 0 && $count2 > 0 && $count3 > 0) {
    deleteFile("../upload" , $imagename1);
    deleteFile("../upload" , $imagename2);
    deleteFile("../upload" , $imagename3);
    printSuccess();
    $stmt4 = $con->prepare("SELECT * FROM `primium` WHERE `post_num` = '$post_num'");
    $stmt4->execute();
    $count4 = $stmt4->rowCount();
    // if ($count4>0) { //primium
    //     printSuccess();
    // } else {
    //     printFailure();
    // }
} else {
  printFailure();
}

?>
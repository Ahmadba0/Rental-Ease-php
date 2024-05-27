<?php
// include "../connect.php";
// $choose = filterRequest("choose");

// if($choose == "2"){
//   $post_num = filterRequest("post_num");
//   $users_id = filterRequest("users_id");
//   $imagename0 = filterRequest('imagename0');
//   $imagename1 = filterRequest('imagename1');
//   $imagename2 = filterRequest('imagename2');
//   $stmt1 = $con->prepare("DELETE FROM `post` WHERE `post_num` = '$post_num'");
//   $stmt1->execute();
//   $count1 = $stmt1->rowCount();
//   $stmt2 = $con->prepare("DELETE FROM `swim` WHERE `post_num` = '$post_num'");
//   $stmt2->execute();
//   $count2 = $stmt2->rowCount();
//   $stmt3 = $con->prepare("DELETE FROM `rentorsell` WHERE `post_num` = '$post_num'");
//   $stmt3->execute();
//   $count3 = $stmt3->rowCount();
//   if ($count1 > 0 && $count2 > 0 && $count3 > 0) {
//       deleteFile("../upload" , $imagename0);
//       deleteFile("../upload" , $imagename1);
//       deleteFile("../upload" , $imagename2);
//       printSuccess();
//       insertNotification("RentalEase" , "لقد تم حذف إعلانك ذات الرقم: $post_num" , $users_id , "users$users_id" , "none" , "deletepost");
//   } else {
//     printFailure();
//   }
// }
 
// else if($choose == "3"){
//     $post_num = filterRequest("post_num");
//     $users_id = filterRequest("users_id");
//     $imagename0 = filterRequest('imagename0');
//     $imagename1 = filterRequest('imagename1');
//     $imagename2 = filterRequest('imagename2');
//     $imagename3 = filterRequest('imagename3');
//     $stmt1 = $con->prepare("DELETE FROM `post` WHERE `post_num` = '$post_num'");
//     $stmt1->execute();
//     $count1 = $stmt1->rowCount();
//     $stmt2 = $con->prepare("DELETE FROM `swim` WHERE `post_num` = '$post_num'");
//     $stmt2->execute();
//     $count2 = $stmt2->rowCount();
//     $stmt3 = $con->prepare("DELETE FROM `rentorsell` WHERE `post_num` = '$post_num'");
//     $stmt3->execute();
//     $count3 = $stmt3->rowCount();
//     if ($count1 > 0 && $count2 > 0 && $count3 > 0) {
//         deleteFile("../upload" , $imagename0);
//         deleteFile("../upload" , $imagename1);
//         deleteFile("../upload" , $imagename2);
//         deleteFile("../upload" , $imagename3);
//         printSuccess();
//         insertNotification("RentalEase" , "لقد تم حذف إعلانك ذات الرقم: $post_num" , $users_id , "users$users_id" , "none" , "deletepost");
//     } else {
//       printFailure();
//     }
// }

// else if ($choose == "4"){
//     $post_num = filterRequest("post_num");
//     $users_id = filterRequest("users_id");
//     $imagename0 = filterRequest('imagename0');
//     $imagename1 = filterRequest('imagename1');
//     $imagename2 = filterRequest('imagename2');
//     $imagename3 = filterRequest('imagename3');
//     $imagename4 = filterRequest('imagename4');
//     $stmt1 = $con->prepare("DELETE FROM `post` WHERE `post_num` = '$post_num'");
//     $stmt1->execute();
//     $count1 = $stmt1->rowCount();
//     $stmt2 = $con->prepare("DELETE FROM `swim` WHERE `post_num` = '$post_num'");
//     $stmt2->execute();
//     $count2 = $stmt2->rowCount();
//     $stmt3 = $con->prepare("DELETE FROM `rentorsell` WHERE `post_num` = '$post_num'");
//     $stmt3->execute();
//     $count3 = $stmt3->rowCount();
//     if ($count1 > 0 && $count2 > 0 && $count3 > 0) {
//         deleteFile("../upload" , $imagename0);
//         deleteFile("../upload" , $imagename1);
//         deleteFile("../upload" , $imagename2);
//         deleteFile("../upload" , $imagename3);
//         deleteFile("../upload" , $imagename4);
//         printSuccess();
//         insertNotification("RentalEase" , "لقد تم حذف إعلانك ذات الرقم: $post_num" , $users_id , "users$users_id" , "none" , "deletepost");
//     } else {
//       printFailure();
//     }
// }

// else if ($choose == "5"){
//     $post_num = filterRequest("post_num");
//     $users_id = filterRequest("users_id");
//     $imagename0 = filterRequest('imagename0');
//     $imagename1 = filterRequest('imagename1');
//     $imagename2 = filterRequest('imagename2');
//     $imagename3 = filterRequest('imagename3');
//     $imagename4 = filterRequest('imagename4');
//     $imagename5 = filterRequest('imagename5');
//     $stmt1 = $con->prepare("DELETE FROM `post` WHERE `post_num` = '$post_num'");
//     $stmt1->execute();
//     $count1 = $stmt1->rowCount();
//     $stmt2 = $con->prepare("DELETE FROM `swim` WHERE `post_num` = '$post_num'");
//     $stmt2->execute();
//     $count2 = $stmt2->rowCount();
//     $stmt3 = $con->prepare("DELETE FROM `rentorsell` WHERE `post_num` = '$post_num'");
//     $stmt3->execute();
//     $count3 = $stmt3->rowCount();
//     if ($count1 > 0 && $count2 > 0 && $count3 > 0) {
//         deleteFile("../upload" , $imagename0);
//         deleteFile("../upload" , $imagename1);
//         deleteFile("../upload" , $imagename2);
//         deleteFile("../upload" , $imagename3);
//         deleteFile("../upload" , $imagename4);
//         deleteFile("../upload" , $imagename5);
//         printSuccess();
//         insertNotification("RentalEase" , "لقد تم حذف إعلانك ذات الرقم: $post_num" , $users_id , "users$users_id" , "none" , "deletepost");
//     } else {
//       printFailure();
//     }
// }

// else if ($choose == "6"){
//     $post_num = filterRequest("post_num");
//     $users_id = filterRequest("users_id");
//     $imagename0 = filterRequest('imagename0');
//     $imagename1 = filterRequest('imagename1');
//     $imagename2 = filterRequest('imagename2');
//     $imagename3 = filterRequest('imagename3');
//     $imagename4 = filterRequest('imagename4');
//     $imagename5 = filterRequest('imagename5');
//     $imagename6 = filterRequest('imagename6');
//     $stmt1 = $con->prepare("DELETE FROM `post` WHERE `post_num` = '$post_num'");
//     $stmt1->execute();
//     $count1 = $stmt1->rowCount();
//     $stmt2 = $con->prepare("DELETE FROM `swim` WHERE `post_num` = '$post_num'");
//     $stmt2->execute();
//     $count2 = $stmt2->rowCount();
//     $stmt3 = $con->prepare("DELETE FROM `rentorsell` WHERE `post_num` = '$post_num'");
//     $stmt3->execute();
//     $count3 = $stmt3->rowCount();
//     if ($count1 > 0 && $count2 > 0 && $count3 > 0) {
//         deleteFile("../upload" , $imagename0);
//         deleteFile("../upload" , $imagename1);
//         deleteFile("../upload" , $imagename2);
//         deleteFile("../upload" , $imagename3);
//         deleteFile("../upload" , $imagename4);
//         deleteFile("../upload" , $imagename5);
//         deleteFile("../upload" , $imagename6);
//         printSuccess();
//         insertNotification("RentalEase" , "لقد تم حذف إعلانك ذات الرقم: $post_num" , $users_id , "users$users_id" , "none" , "deletepost");
//     } else {
//       printFailure();
//     }
// }

// else if ($choose == "7"){
//     $post_num = filterRequest("post_num");
//     $users_id = filterRequest("users_id");
//     $imagename0 = filterRequest('imagename0');
//     $imagename1 = filterRequest('imagename1');
//     $imagename2 = filterRequest('imagename2');
//     $imagename3 = filterRequest('imagename3');
//     $imagename4 = filterRequest('imagename4');
//     $imagename5 = filterRequest('imagename5');
//     $imagename6 = filterRequest('imagename6');
//     $imagename7 = filterRequest('imagename7');
//     $stmt1 = $con->prepare("DELETE FROM `post` WHERE `post_num` = '$post_num'");
//     $stmt1->execute();
//     $count1 = $stmt1->rowCount();
//     $stmt2 = $con->prepare("DELETE FROM `swim` WHERE `post_num` = '$post_num'");
//     $stmt2->execute();
//     $count2 = $stmt2->rowCount();
//     $stmt3 = $con->prepare("DELETE FROM `rentorsell` WHERE `post_num` = '$post_num'");
//     $stmt3->execute();
//     $count3 = $stmt3->rowCount();
//     if ($count1 > 0 && $count2 > 0 && $count3 > 0) {
//         deleteFile("../upload" , $imagename0);
//         deleteFile("../upload" , $imagename1);
//         deleteFile("../upload" , $imagename2);
//         deleteFile("../upload" , $imagename3);
//         deleteFile("../upload" , $imagename4);
//         deleteFile("../upload" , $imagename5);
//         deleteFile("../upload" , $imagename6);
//         deleteFile("../upload" , $imagename7);
//         printSuccess();
//         insertNotification("RentalEase" , "لقد تم حذف إعلانك ذات الرقم: $post_num" , $users_id , "users$users_id" , "none" , "deletepost");
//     } else {
//       printFailure();
//     }
// }

// else if ($choose == "8"){
//     $post_num = filterRequest("post_num");
//     $users_id = filterRequest("users_id");
//     $imagename0 = filterRequest('imagename0');
//     $imagename1 = filterRequest('imagename1');
//     $imagename2 = filterRequest('imagename2');
//     $imagename3 = filterRequest('imagename3');
//     $imagename4 = filterRequest('imagename4');
//     $imagename5 = filterRequest('imagename5');
//     $imagename6 = filterRequest('imagename6');
//     $imagename7 = filterRequest('imagename7');
//     $imagename8 = filterRequest('imagename8');
//     $stmt1 = $con->prepare("DELETE FROM `post` WHERE `post_num` = '$post_num'");
//     $stmt1->execute();
//     $count1 = $stmt1->rowCount();
//     $stmt2 = $con->prepare("DELETE FROM `swim` WHERE `post_num` = '$post_num'");
//     $stmt2->execute();
//     $count2 = $stmt2->rowCount();
//     $stmt3 = $con->prepare("DELETE FROM `rentorsell` WHERE `post_num` = '$post_num'");
//     $stmt3->execute();
//     $count3 = $stmt3->rowCount();
//     if ($count1 > 0 && $count2 > 0 && $count3 > 0) {
//         deleteFile("../upload" , $imagename0);
//         deleteFile("../upload" , $imagename1);
//         deleteFile("../upload" , $imagename2);
//         deleteFile("../upload" , $imagename3);
//         deleteFile("../upload" , $imagename4);
//         deleteFile("../upload" , $imagename5);
//         deleteFile("../upload" , $imagename6);
//         deleteFile("../upload" , $imagename7);
//         deleteFile("../upload" , $imagename8);
//         printSuccess();
//         insertNotification("RentalEase" , "لقد تم حذف إعلانك ذات الرقم: $post_num" , $users_id , "users$users_id" , "none" , "deletepost");
//     } else {
//       printFailure();
//     }
// }
// else if ($choose == "9"){
//     $post_num = filterRequest("post_num");
//     $users_id = filterRequest("users_id");
//     $imagename0 = filterRequest('imagename0');
//     $imagename1 = filterRequest('imagename1');
//     $imagename2 = filterRequest('imagename2');
//     $imagename3 = filterRequest('imagename3');
//     $imagename4 = filterRequest('imagename4');
//     $imagename5 = filterRequest('imagename5');
//     $imagename6 = filterRequest('imagename6');
//     $imagename7 = filterRequest('imagename7');
//     $imagename8 = filterRequest('imagename8');
//     $imagename9 = filterRequest('imagename9');
//     $stmt1 = $con->prepare("DELETE FROM `post` WHERE `post_num` = '$post_num'");
//     $stmt1->execute();
//     $count1 = $stmt1->rowCount();
//     $stmt2 = $con->prepare("DELETE FROM `realestate` WHERE `post_num` = '$post_num'");
//     $stmt2->execute();
//     $count2 = $stmt2->rowCount();
//     $stmt3 = $con->prepare("DELETE FROM `rentorsell` WHERE `post_num` = '$post_num'");
//     $stmt3->execute();
//     $count3 = $stmt3->rowCount();
//     if ($count1 > 0 && $count2 > 0 && $count3 > 0) {
//         deleteFile("../upload" , $imagename0);
//         deleteFile("../upload" , $imagename1);
//         deleteFile("../upload" , $imagename2);
//         deleteFile("../upload" , $imagename3);
//         deleteFile("../upload" , $imagename4);
//         deleteFile("../upload" , $imagename5);
//         deleteFile("../upload" , $imagename6);
//         deleteFile("../upload" , $imagename7);
//         deleteFile("../upload" , $imagename8);
//         deleteFile("../upload" , $imagename9);
//         printSuccess();
//         insertNotification("RentalEase" , "لقد تم حذف إعلانك ذات الرقم: $post_num" , $users_id , "users$users_id" , "none" , "deletepost");
//     } else {
//       printFailure();
//     }
// }
?>
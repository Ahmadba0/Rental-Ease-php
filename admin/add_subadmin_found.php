<?php

include '../connect.php';

$phone = filterRequest('phone');
$admin_username = filterRequest('admin_username');
$admin_password = sha1($_POST["admin_password"]);
$admin_isPostAdmin = filterRequest('admin_isPostAdmin');
$admin_isReviewAdmin = filterRequest('admin_isReviewAdmin');
$users_type = filterRequest('users_type');

//التاكد من عدم اضافة المستخدم الى نفس القائمة
$stmt = $con->prepare("SELECT * FROM `admin` WHERE `admin_phone` = ? AND `admin_isPostAdmin` = ? AND `admin_isReviewAdmin` = ? ");
$stmt->execute(array($phone , $admin_isPostAdmin , $admin_isReviewAdmin));
$count = $stmt->rowCount();

if ($count > 0) {
    //في حال وجوده يتم طباعة الخطا
    printFailure();
}else{
    //في حال عدم وجوده
    //يتم التاكد اذا كان الادمن عم يضيف نفسو 
    $stmtadmin = $con->prepare("SELECT * FROM `admin` WHERE `admin_phone` = ? AND admin_isAdmin = '1' ");
    $stmtadmin->execute(array($phone));
    $countadmin = $stmtadmin->rowCount(); 
    //في حال كان عم يضيف حالو
    if ($countadmin>0) {
        //اذا الادمن باحد القائمتين
        $stmtadminIN = $con->prepare("SELECT * FROM `admin` WHERE `admin_phone` = ? AND admin_isAdmin = '1' AND (admin_isPostAdmin = '1' OR admin_isReviewAdmin ='1')");
        $stmtadminIN->execute(array($phone));
        $countadminIN = $stmtadminIN->rowCount(); 
        if ($countadminIN > 0) {
            $data = array(
                "admin_username"      => $admin_username,
                "admin_phone"         => $phone,
                "admin_password"      => $admin_password,
                "admin_isPostAdmin"   => '1',
                "admin_isReviewAdmin" => '1',
            ); 
            updateData("admin" , $data , "admin_phone = $phone");
            $stmt = $con->prepare("UPDATE `users` SET `users_type`= '3333' WHERE `users_phone` = ?") ;
            $stmt->execute(array($phone)) ;
            $count = $stmt->rowCount();
        } else {

        //يتم التاكد من الصلاحية اللي عم يعطيها لحالو
        if ($admin_isPostAdmin == '1' && $admin_isReviewAdmin == '0') {
            //اذا كان للاعلانات

            $data = array(
                "admin_username"      => $admin_username,
                "admin_phone"         => $phone,
                "admin_password"      => $admin_password,
                "admin_isPostAdmin"   => '1',
                "admin_isReviewAdmin" => '0',
            ); 
            updateData("admin" , $data , "admin_phone = $phone");
            $stmt = $con->prepare("UPDATE `users` SET `users_type`= '33' WHERE `users_phone` = ?") ;
            $stmt->execute(array($phone)) ;
            $count = $stmt->rowCount();
         }
        else if ($admin_isPostAdmin == '0' && $admin_isReviewAdmin == '1') {
            //اذا كان للمراجعات
            $data = array(
                "admin_username"      => $admin_username,
                "admin_phone"         => $phone,
                "admin_password"      => $admin_password,
                "admin_isPostAdmin"   => '0',
                "admin_isReviewAdmin" => '1',
            ); 
            updateData("admin" , $data , "admin_phone = $phone");
            $stmt = $con->prepare("UPDATE `users` SET `users_type`= '333' WHERE `users_phone` = ?") ;
            $stmt->execute(array( $phone)) ;
            $count = $stmt->rowCount();
         }
        }
        //اذا مو ادمن
    } else {
            ///اذا ماكان عم يضيف حالو
            //يتم التاكد من وجوده باحد القائمتين
            $stmt1 = $con->prepare("SELECT * FROM `admin` WHERE `admin_phone` = ?");
            $stmt1->execute(array($phone));
            $count1 = $stmt1->rowCount(); 
    if ($count1>0) {
        //في حال وجوده
        $data = array(
            "admin_username"      => $admin_username,
            "admin_phone"         => $phone,
            "admin_password"      => $admin_password,
            "admin_isPostAdmin"   => '1',
            "admin_isReviewAdmin" => '1',
        ); 
        updateData("admin" , $data , "admin_phone = '$phone'");
        $stmt = $con->prepare("UPDATE `users` SET `users_type`= '5' WHERE `users_phone` = ?") ;
        $stmt->execute(array($phone)) ;
        $count = $stmt->rowCount();
    } else {
        //في حال عدم وجوده
        //in users
        //
        $data = array(
            "admin_username"      => $admin_username,
            "admin_phone"         => $phone,
            "admin_password"      => $admin_password,
            "admin_isPostAdmin"   => $admin_isPostAdmin,
            "admin_isReviewAdmin" => $admin_isReviewAdmin,
        ); 
        insertData("admin" , $data);
        $stmt = $con->prepare("UPDATE `users` SET `users_type`= ? WHERE `users_phone` = ?") ;
        $stmt->execute(array($users_type , $phone)) ;
        $count = $stmt->rowCount();
    }
    ///
     }
    




 
}






?>
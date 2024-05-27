<?php
include '../connect.php';

//users and car
$stmt = $con->prepare("SELECT users.users_id , users.users_name, users.users_level , COUNT(post.post_id) AS ads_count FROM users LEFT JOIN post ON users.users_id = post.users_id AND post.post_type='0' GROUP BY users.users_id, users.users_name");
$stmt->execute(array()) ;
$count = $stmt->rowCount();
$data = $stmt->fetchAll(PDO::FETCH_ASSOC);

//users and real estate
$stmt1 = $con->prepare("SELECT users.users_id , users.users_name, users.users_level , COUNT(post.post_id) AS ads_count FROM users LEFT JOIN post ON users.users_id = post.users_id AND post.post_type='1' GROUP BY users.users_id, users.users_name");
$stmt1->execute(array()) ;
$count1 = $stmt1->rowCount();
$data1 = $stmt1->fetchAll(PDO::FETCH_ASSOC);

//users and swim
$stmt2 = $con->prepare("SELECT users.users_id , users.users_name, users.users_level , COUNT(post.post_id) AS ads_count FROM users LEFT JOIN post ON users.users_id = post.users_id AND post.post_type='2' GROUP BY users.users_id, users.users_name");
$stmt2->execute(array()) ;
$count2 = $stmt2->rowCount();
$data2 = $stmt2->fetchAll(PDO::FETCH_ASSOC);

//users and widding
$stmt3 = $con->prepare("SELECT users.users_id , users.users_name, users.users_level , COUNT(post.post_id) AS ads_count FROM users LEFT JOIN post ON users.users_id = post.users_id AND post.post_type='3' GROUP BY users.users_id, users.users_name");
$stmt3->execute(array()) ;
$count3 = $stmt3->rowCount();
$data3 = $stmt3->fetchAll(PDO::FETCH_ASSOC);

if ($count>0 || $count1 > 0 || $count2 > 0 || $count3 > 0) {
    echo json_encode(array("status" => "success","data" => $data ,"data1" => $data1 ,"data2" => $data2 ,"data3" => $data3));
} else {
    printFailure();
}

?>
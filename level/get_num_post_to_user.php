<?php

include '../connect.php';
$users_id = filterRequest('users_id');

    $stmt = $con->prepare("SELECT COUNT(post.post_id) AS countPost  FROM `post` WHERE `users_id` = ? AND `post_status` = '1'");
    $stmt->execute(array($users_id)) ;
    $count = $stmt->rowCount();
    $data = $stmt->fetchAll(PDO::FETCH_ASSOC);

    
    if ($count>0) {
        echo json_encode(array("status" => "success","data" => $data));

    }


?>
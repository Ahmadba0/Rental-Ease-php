<?php
    include "../connect.php";
    $usersphone = filterRequest("users_phone");
    //getData("users" , "users_email = '$usersemail'" );
    $stmt = $con->prepare("SELECT `users_verifycode` FROM `users` WHERE `users_phone` = ? ") ;
    $stmt->execute(array($usersphone)) ;
    $count = $stmt->rowCount();
    $data = $stmt->fetchAll(PDO::FETCH_ASSOC);

    if ($count>0) {
        echo json_encode(array("status" => "success","data" => $data));
    } else {
        echo json_encode(array("status" => "fail"));
    }


    
?>
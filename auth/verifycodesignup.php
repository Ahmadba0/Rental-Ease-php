<?php
    include "../connect.php";
    $usersphone = filterRequest("users_phone");
    $usersverifycode = filterRequest("users_verifycode");
    //check if email and verify code equal
    $stmt = $con->prepare("SELECT `users_verifycode` FROM `users` WHERE `users_phone` = ? AND `users_verifycode` = ?") ;
    $stmt->execute(array($usersphone , $usersverifycode)) ;
    $count = $stmt->rowCount();
    $data = $stmt->fetchAll(PDO::FETCH_ASSOC);

    if ($count>0) {
        //if equal update approve to 1
        $stmt = $con->prepare("UPDATE `users` SET `users_check`= '1' WHERE `users_phone` = '$usersphone'") ;
        $stmt->execute() ;
        $count = $stmt->rowCount();

        if ($count>0) {
            echo json_encode(array("status" => "success"));
        } else {
            echo json_encode(array("status" => "fail"));    
        }
    } else {
        printFailure("verify code not correct");
    }


    
?>
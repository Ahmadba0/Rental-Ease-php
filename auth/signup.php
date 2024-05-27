<?php
    include "../connect.php";

    $usersname     = filterRequest("users_name");
    $usersemail    = filterRequest("users_email");
    $usersphone    = filterRequest("users_phone");
    $userspassword = sha1($_POST["users_password"]);
    //$usersverifycode = filterRequest("users_verifycode");
    $usersverifycode = rand(10000 , 99999);

    $stmt = $con->prepare("SELECT * FROM `users` WHERE `users_email` = ? AND `users_phone` = ? ");
    $stmt->execute(array($usersemail , $usersphone));
    $count = $stmt->rowCount();

    if ($count > 0) {
        printFailure("the email or phone is exists and i am in if condition");
    }else{
        $data = array(
            "users_name"       => $usersname,
            "users_email"      => $usersemail,
            "users_phone"      => $usersphone,
            "users_password"   => $userspassword,
            "users_verifycode" => $usersverifycode,
        );  
        //sendEmail($usersemail , "Verify Code" , $usersverifycode);
        insertData("users" , $data);
        
    }

?>
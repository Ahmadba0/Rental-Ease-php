<?php
 include "../connect.php";

 $users_level = filterRequest('users_level');
        
        $stmt = $con->prepare("SELECT * FROM `imagecode` WHERE `imagecode_level` = ?");
        $stmt->execute(array($users_level));
        $count = $stmt->rowCount();
        $data = $stmt->fetchAll(PDO::FETCH_ASSOC);

        if($count > 0){
            echo json_encode(array("status" => 'success' , 'data' => $data));
        }
        else{
            echo json_encode(array('status' => 'failure'));
        }
?>
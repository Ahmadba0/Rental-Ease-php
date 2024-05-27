<?php
    include "../connect.php";
    $privatepost_title   = filterRequest("privatepost_title"); 
    $privatepost_body    = filterRequest("privatepost_body");
    $privatepost_usersid = filterRequest("privatepost_usersid");
   
 

   
        $data = array(
            "privatepost_title"   => $privatepost_title,
            "privatepost_body"    => $privatepost_body,
            "privatepost_usersid" => $privatepost_usersid,
        );
        insertData("privatepost" , $data);
    
 
?>
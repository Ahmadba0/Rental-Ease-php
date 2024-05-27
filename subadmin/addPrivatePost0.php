<?php
    include "../connect.php";
    $privatepost_title   = filterRequest("privatepost_title"); 
    $privatepost_body    = filterRequest("privatepost_body");
    $privatepost_usersid = filterRequest("privatepost_usersid");
    ///
    $file0               = imageUpload("file0");
 

    if($file0 != 'fail'){
        $data = array(
            "privatepost_title"   => $privatepost_title,
            "privatepost_body"    => $privatepost_body,
            "privatepost_usersid" => $privatepost_usersid,
            "privatepost_image0"  => $file0,
        );
        insertData("privatepost" , $data);
    }
    else{
        printFailure("there are error in upload images");
    }
 
?>
<?php
    include "../connect.php";
    $primium_newprice = filterRequest("primium_newprice"); 
    $post_num         = filterRequest("post_num"); 
   

    $data = array(
        "primium_newprice" => $primium_newprice,
        "post_num"         => $post_num,
 
    );
    insertData("primium" , $data);
?>
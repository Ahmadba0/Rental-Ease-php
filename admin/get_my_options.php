<?php

include "../connect.php";
 
 $admin_id = filterRequest("admin_id"); 

getData(
    "admin" , " admin_id = ?" , array($admin_id)
);
?>
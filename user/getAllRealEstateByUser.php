<?php


include "../connect.php";
 
$realestate_city = filterRequest("realestate_city");
$realestate_region = filterRequest("realestate_region");

getAllData("usersrealestate" ,  "post_status = 1 AND realestate_city = ? AND realestate_region = ?", array($realestate_city, $realestate_region));

?>
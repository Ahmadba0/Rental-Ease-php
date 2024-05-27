<?php


include "../connect.php";
 
$cars_locationcity = filterRequest("cars_locationcity");
$cars_locationregion = filterRequest("cars_locationregion");

getAllData("userscars" ,  "post_status = 1 AND cars_locationcity = ? AND cars_locationregion = ?", array($cars_locationcity, $cars_locationregion));

?>
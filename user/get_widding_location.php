<?php


include "../connect.php";
$widding_city = filterRequest("widding_city");
$widding_region = filterRequest("widding_region");

getAllData("userswidding" ,  "post_status = 1 AND widding_city = ? AND widding_region = ?", array($widding_city, $widding_region));

?>
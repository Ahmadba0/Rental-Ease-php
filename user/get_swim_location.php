<?php


include "../connect.php";
$swim_city = filterRequest("swim_city");
$swim_region = filterRequest("swim_region");

getAllData("usersswim" ,  "post_status = 1 AND swim_city = ? AND swim_region = ?", array($swim_city, $swim_region));

?>
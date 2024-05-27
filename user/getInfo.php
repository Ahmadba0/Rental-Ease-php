<?php
include "../connect.php";
$users_id = filterRequest("users_id");
getAllData("users" ,  "users_id = ?", array($users_id));
?>
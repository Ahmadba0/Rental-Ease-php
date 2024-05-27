<?php

include "../connect.php";

$users_id = filterRequest('users_id');

getDataNew('favorite' , "users_id = $users_id");

?>
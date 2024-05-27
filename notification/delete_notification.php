<?php

$users_id = filterRequest('users_id');
deleteData("notification" , "notification_userid  = $users_id");

?>
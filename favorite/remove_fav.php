<?php

include "../connect.php";

$users_id = filterRequest('users_id');
$post_num = filterRequest('post_num');

deleteData('favorite' , "post_num = $post_num AND users_id = $users_id");

?>
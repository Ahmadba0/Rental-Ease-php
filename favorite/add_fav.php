<?php
    include "../connect.php";

    $users_id = filterRequest('users_id');
    $post_num = filterRequest('post_num');

    $data = array(
        'users_id' => $users_id,
        'post_num' => $post_num,
    );
    insertData('favorite' , $data);
?>
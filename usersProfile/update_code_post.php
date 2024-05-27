<?php
include "../connect.php";


$post_num = filterRequest("post_num");
$post_code = filterRequest("post_code");

$data = array(
    "post_code" => $post_code,
);

updateData("post" , $data , "post_num = '$post_num'");

?>
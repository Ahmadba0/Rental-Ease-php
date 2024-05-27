<?php
include "../connect.php";


$post_num = filterRequest("post_num");

$data = array(
    "post_status" => "3",
);

updateData("post" , $data , "post_num = '$post_num'");

?>
<?php
include "../connect.php";

$post_num = filterRequest("post_num");


getData(
    "userscars" , "post_num = ?" , array($post_num)
);



?>
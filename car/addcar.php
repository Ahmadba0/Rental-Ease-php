<?php
    include "../connect.php";

$cars_company        = filterRequest("cars_company");
$cars_year           = filterRequest("cars_year");
$cars_locationcity   = filterRequest("cars_locationcity");
$cars_locationregion = filterRequest("cars_locationregion");
$cars_nomra          = filterRequest("cars_nomra");
$cars_distance       = filterRequest("cars_distance");
$cars_description    = filterRequest("cars_description");
$post_num            = filterRequest("post_num");
$users_id            = filterRequest("users_id");
///
$file0               = imageUpload("file0");
$file1              = imageUpload("file1");
$file2              = imageUpload("file2");


if($file0 != 'fail'){
    $data = array(
    "cars_company"        => $cars_company,
    "cars_year"           => $cars_year,
    "cars_locationcity"   => $cars_locationcity,
    "cars_locationregion" => $cars_locationregion,
    "cars_nomra"          => $cars_nomra,
    "cars_distance"       => $cars_distance,
    "cars_description"    => $cars_description,
    "post_num"            => $post_num,
    "users_id"            => $users_id,
    "cars_image1"         => $file0,
    "cars_image2"         => $file1,
    "cars_image3"         => $file2,
   
);  
//sendEmail($usersemail , "Verify Code" , $usersverifycode);
insertData("cars" , $data);

}else{

    printFailure("there are error in upload images");

}


?>
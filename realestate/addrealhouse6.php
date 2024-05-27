<?php
    include "../connect.php";


$realestate_type           = filterRequest("realestate_type");
$realestate_city           = filterRequest("realestate_city");
$realestate_region         = filterRequest("realestate_region");
$realestate_lat            = filterRequest("realestate_lat");
$realestate_long           = filterRequest("realestate_long");
$realestate_distance       = filterRequest("realestate_distance");
$realestate_desc           = filterRequest("realestate_desc");
$realestate_numsettingroom = filterRequest("realestate_numsettingroom");
$realestate_numbedroom     = filterRequest("realestate_numbedroom");
$realestate_numbathroom    = filterRequest("realestate_numbathroom");
$realestate_numkitchen     = filterRequest("realestate_numkitchen");
$realestate_numbalcon      = filterRequest("realestate_numbalcon");
$realestate_numflat        = filterRequest("realestate_numflat");
$post_num                  = filterRequest("post_num");
///
$file0                     = imageUpload("file0");
$file1                     = imageUpload("file1");
$file2                     = imageUpload("file2");
$file3                     = imageUpload("file3");
$file4                     = imageUpload("file4");
$file5                     = imageUpload("file5");
$file6                     = imageUpload("file6");
 

if($file0 != 'fail' &&$file1 != 'fail'){
    $data = array(
    "realestate_type"           => $realestate_type,
    "realestate_city"           => $realestate_city,
    "realestate_region"         => $realestate_region,
    "realestate_lat"            => $realestate_lat,
    "realestate_long"           => $realestate_long,
    "realestate_distance"       => $realestate_distance,
    "realestate_desc"           => $realestate_desc,
    "realestate_numsettingroom" => $realestate_numsettingroom,
    "realestate_numbedroom"     => $realestate_numbedroom,
    "realestate_numbathroom"    => $realestate_numbathroom,
    "realestate_numkitchen"     => $realestate_numkitchen,
    "realestate_numbalcon"      => $realestate_numbalcon,
    "realestate_numflat"        => $realestate_numflat,
    "post_num"                  => $post_num,
    //
    "realestate_image0"              => $file0,
    "realestate_image1"              => $file1,
    "realestate_image2"              => $file2,
    "realestate_image3"              => $file3,
    "realestate_image4"              => $file4,
    "realestate_image5"              => $file5,
    "realestate_image6"              => $file6,
 
);  
insertData("realestate" , $data);

}else{
    printFailure("there are error in upload images");
}


?>
<?php
    include "../connect.php";

$widding_city           = filterRequest("widding_city");
$widding_region         = filterRequest("widding_region");
$widding_lat            = filterRequest("widding_lat");
$widding_long           = filterRequest("widding_long");
$widding_desc           = filterRequest("widding_desc");
$widding_numtable       = filterRequest("widding_numtable");
$post_num               = filterRequest("post_num");
///
$file0               = imageUpload("file0");
$file1               = imageUpload("file1");
$file2               = imageUpload("file2");
$file3               = imageUpload("file3");
$file4               = imageUpload("file4");
$file5               = imageUpload("file5");
$file6               = imageUpload("file6");

if($file0 != 'fail' &&$file1 != 'fail'){
    $data = array(
    "widding_city"           => $widding_city,
    "widding_region"         => $widding_region,
    "widding_lat"            => $widding_lat,
    "widding_long"           => $widding_long,
    "widding_desc"           => $widding_desc,
    "widding_numtable"       => $widding_numtable,
    "post_num"               => $post_num,
    //
    "widding_image0"         => $file0,
    "widding_image1"         => $file1,
    "widding_image2"         => $file2,
    "widding_image3"         => $file3,
    "widding_image4"         => $file4,
    "widding_image5"         => $file5,
    "widding_image6"         => $file6,
 
 
);  
insertData("widding" , $data);

}else{
    printFailure("there are error in upload images");
}


?>
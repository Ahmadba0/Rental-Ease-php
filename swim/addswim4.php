<?php
    include "../connect.php";



$swim_city           = filterRequest("swim_city");
$swim_region         = filterRequest("swim_region");
$swim_lat            = filterRequest("swim_lat");
$swim_long           = filterRequest("swim_long");
$swim_desc           = filterRequest("swim_desc");
$swim_numsettingroom = filterRequest("swim_numsettingroom");
$swim_numbathroom    = filterRequest("swim_numbathroom");
$swim_numkitchen     = filterRequest("swim_numkitchen");
$post_num            = filterRequest("post_num");
///
$file0               = imageUpload("file0");
$file1               = imageUpload("file1");
$file2               = imageUpload("file2");
$file3               = imageUpload("file3");
$file4               = imageUpload("file4");

if($file0 != 'fail' &&$file1 != 'fail'){
    $data = array(
    "swim_city"           => $swim_city,
    "swim_region"         => $swim_region,
    "swim_lat"            => $swim_lat,
    "swim_long"           => $swim_long,
    "swim_desc"           => $swim_desc,
    "swim_numsettingroom" => $swim_numsettingroom,
    "swim_numbathroom"    => $swim_numbathroom,
    "swim_numkitchen"     => $swim_numkitchen,
    "post_num"            => $post_num,
 
    //
    "swim_image0"         => $file0,
    "swim_image1"         => $file1,
    "swim_image2"         => $file2,
    "swim_image3"         => $file3,
    "swim_image4"         => $file4,
 
 
);  
insertData("swim" , $data);

}else{
    printFailure("there are error in upload images");
}


?>
<?php
    include '../connect.php';

    $file            = imageUpload("file");
    $imagecode_price = filterRequest('imagecode_price');
    $imagecode_level = filterRequest('imagecode_level');
    $image_name_pre  = filterRequest('image_name_pre');
    $imagecode_id    = filterRequest('imagecode_id');
    
   
    if($file != 'fail'){
        deleteFile("../upload" , $image_name_pre);
        $data = array(
        "imagecode_name"    => $file,
        "imagecode_price"   => $imagecode_price,
        "imagecode_level"   => $imagecode_level,
    );  
     updateData("imagecode" , $data , "imagecode_id = '$imagecode_id'");
    
    }else{
        printFailure("there are error in upload images");
    }
    
?>

<?php
    include '../connect.php';

    $file            = imageUpload("file");
    $imagecode_price = filterRequest('imagecode_price');
    $imagecode_level = filterRequest('imagecode_level');
    

    if($file != 'fail'){
        $data = array(
        "imagecode_name"    => $file,
        "imagecode_price"   => $imagecode_price,
        "imagecode_level"   => $imagecode_level,
    );  
     insertData("imagecode" , $data);
    
    }else{
        printFailure("there are error in upload images");
    }
    
?>
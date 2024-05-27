<?php
    include "../connect.php";
    $rentorsell_sell           = filterRequest("rentorsell_sell"); 
    $rentorsell_rentday        = filterRequest("rentorsell_rentday"); 
    $rentorsell_rentweek       = filterRequest("rentorsell_rentweek"); 
    $rentorsell_rentmonth      = filterRequest("rentorsell_rentmonth"); 
    $rentorsell_rentyear       = filterRequest("rentorsell_rentyear"); 
    $rentorsell_pricesell      = filterRequest("rentorsell_pricesell"); 
    $rentorsell_pricerentday   = filterRequest("rentorsell_pricerentday"); 
    $rentorsell_pricerentweek  = filterRequest("rentorsell_pricerentweek"); 
    $rentorsell_pricerentmonth = filterRequest("rentorsell_pricerentmonth"); 
    $rentorsell_pricerentyear  = filterRequest("rentorsell_pricerentyear"); 
    $rentorsell_ispri          = filterRequest("rentorsell_ispri"); 
    $rentorsell_newprice       = filterRequest("rentorsell_newprice"); 
    $post_num                  = filterRequest("post_num"); 
    $users_id                  = filterRequest("users_id"); 

    $data = array(
        "rentorsell_sell"           => $rentorsell_sell,
        "rentorsell_rentday"        => $rentorsell_rentday,
        "rentorsell_rentweek"       => $rentorsell_rentweek,
        "rentorsell_rentmonth"      => $rentorsell_rentmonth,
        "rentorsell_rentyear"       => $rentorsell_rentyear,
        "rentorsell_pricesell"      => $rentorsell_pricesell,
        "rentorsell_pricerentday"   => $rentorsell_pricerentday,
        "rentorsell_pricerentweek"  => $rentorsell_pricerentweek,
        "rentorsell_pricerentmonth" => $rentorsell_pricerentmonth,
        "rentorsell_pricerentyear"  => $rentorsell_pricerentyear,
        "rentorsell_ispri"          => $rentorsell_ispri,
        "rentorsell_newprice"       => $rentorsell_newprice,
        "post_num"                  => $post_num,
    );
    insertData("rentorsell" , $data);


?>
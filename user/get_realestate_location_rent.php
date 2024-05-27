<?php


// include "../connect.php";
 
// $realestate_city = filterRequest("realestate_city");
// $realestate_region = filterRequest("realestate_region");
// $realestate_type = filterRequest("realestate_type");

// $stmt = $con->prepare("SELECT * FROM `usersrealestate` WHERE `realestate_type` = ? AND `post_status` = '1' AND `realestate_city` = ? AND `realestate_region` = AND ( `rentorsell_rentmonth` = '1' OR `rentorsell_rentday` = '1' OR `rentorsell_rentweek` = '1' OR `rentorsell_rentyear` = '1' )");
// $stmt->execute(array($realestate_type , $realestate_city , $realestate_region)) ;
// $count = $stmt->rowCount();
// $data = $stmt->fetchAll(PDO::FETCH_ASSOC);


// if ($count>0) {
//     printSuccess();
// } else {
//     printFailure();
// }








//getAllData("usersrealestate" ,  "realestate_type = ? AND post_status = 1 AND realestate_city = ? AND realestate_region = ? AND rentorsell_rentday = 1 OR rentorsell_rentweek = 1 OR rentorsell_rentmonth = 1 OR rentorsell_rentyear = 1", array($realestate_type , $realestate_region, $realestate_region));








?>
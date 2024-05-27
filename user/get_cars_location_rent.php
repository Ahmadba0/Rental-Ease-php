<?php


// include "../connect.php";
 
// $cars_locationcity = filterRequest("cars_locationcity");
// $cars_locationregion = filterRequest("cars_locationregion");

// $stmt = $con->prepare("SELECT * FROM `userscars` WHERE `post_status` = '1' AND `cars_locationcity` = ? AND `cars_locationregion` = ? AND ( `rentorsell_rentmonth` = '1' OR `rentorsell_rentday` = '1' OR `rentorsell_rentweek` = '1' OR `rentorsell_rentyear` = '1' )");
// $stmt->execute(array($cars_locationcity , $cars_locationregion)) ;
// $count = $stmt->rowCount();
// $data = $stmt->fetchAll(PDO::FETCH_ASSOC);

// if ($count>0) {
//     echo json_encode(array("status" => "success","data" => $data));
// } else {
//     printFailure();
// }

//getAllData("userscars" ,  "post_status = 1 AND cars_locationcity = ? AND cars_locationregion = ? AND rentorsell_rentday = 1 OR rentorsell_rentweek = 1 OR rentorsell_rentmonth = 1 OR rentorsell_rentyear = 1", array($cars_locationcity, $cars_locationregion));

?>
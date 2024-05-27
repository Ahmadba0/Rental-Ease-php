<?php

include '../connect.php';
$city= filterRequest('city');
$region= filterRequest('region');
$distance1= filterRequest('distance1');
$distance2= filterRequest('distance2');
$price1= filterRequest('price1');
$price2= filterRequest('price2');

// $stmt = $con->prepare("SELECT * FROM usersrealestate WHERE usersrealestate.realestate_type = '0' AND usersrealestate.realestate_city = ? AND usersrealestate.realestate_region =? AND usersrealestate.realestate_distance >= ? AND usersrealestate.realestate_distance <= ? AND usersrealestate.rentorsell_pricesell >= ? AND usersrealestate.rentorsell_pricesell <= ? AND usersrealestate.post_status = '1'");
// $stmt->execute(array($city , $region ,$distance1 , $distance2 , $price1 , $price2)) ;
// $count = $stmt->rowCount();
// $data = $stmt->fetchAll(PDO::FETCH_ASSOC);



getDataNew('usersrealestate' , "realestate_type = '0' AND realestate_city = '$city' AND realestate_region = '$region' AND realestate_distance >=  '$distance1' AND realestate_distance <= '$distance2' AND rentorsell_pricesell >= '$price1' AND rentorsell_pricesell <= '$price2' AND post_status = '1'");
// if ($count>0  ) {
//     echo json_encode(array("status" => "success","data" => $data ));
// } else {
//     printFailure();
// }

?>
 
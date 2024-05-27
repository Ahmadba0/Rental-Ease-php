<?php

include '../connect.php';
$city= filterRequest('city');
$region= filterRequest('region');
$company= filterRequest('company');
$price1= filterRequest('price1');
$price2= filterRequest('price2');

$stmt = $con->prepare("SELECT * FROM userscars WHERE userscars.cars_locationcity = ? AND userscars.cars_locationregion = ? AND userscars.cars_company = ? AND userscars.rentorsell_pricesell >= ? AND userscars.rentorsell_pricesell <= ? AND userscars.post_status = '1'");
$stmt->execute(array($city , $region ,$company , $price1 , $price2)) ;
$count = $stmt->rowCount();
$data = $stmt->fetchAll(PDO::FETCH_ASSOC);

if ($count>0  ) {
    echo json_encode(array("status" => "success","data" => $data ));
} else {
    printFailure();
}
?>



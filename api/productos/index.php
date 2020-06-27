<?php
require '../../vendor/autoload.php';
$uri="mongodb://localhost";
$client=new MongoDB\Client($uri);

$cat= $_GET['key'];
$collection= $client->infomaxi->productos->find(['categoria' => $cat]);
$prods = array();
foreach ($collection as $entry) {
    $prods[ $entry['_id']->__toString() ] = $entry['name'];

}



//print_r($prods);
//print_r($productos[$cat]);
?> 
<?php
require 'vendor/autoload.php';
$uri="mongodb://localhost";
$client=new MongoDB\Client($uri);

$ordenes= $client->infomaxi->ordenes->find();
$orden2= $ordenes->toArray(); 
foreach($orden2 as $order ){

     echo json_encode ($order['usuario']);
     echo  json_encode($order['productos']);
    echo json_encode ($order['total']);
?>
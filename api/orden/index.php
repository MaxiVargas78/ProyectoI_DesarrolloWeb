<?php
require 'vendor/autoload.php';
$uri="mongodb://localhost";
$client=new MongoDB\Client($uri);

$ordenes= $client->infomaxi->ordenes->find();
$orden2= $ordenes->toArray(); 
echo json_encode($orden2);
?>
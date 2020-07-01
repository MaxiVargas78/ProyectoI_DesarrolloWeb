<?php
$id = $_GET['compra'];
require 'vendor/autoload.php';
$uri="mongodb://localhost";
$client=new MongoDB\Client($uri);

$ordenes= $client->infomaxi->ordenes->findOne(['_id' => new MongoDB\BSON\ObjectId($id)]);
$orden2= array();
$productos= $ordenes['productos'];
$total = $ordenes['total'];

$orden2 = ['Productos' => $productos, 'Total' => $total];

echo json_encode($orden2);

?>

<?php
session_start();
$total = $_GET['total'];
require '../../vendor/autoload.php';
$uri="mongodb://localhost";
$client=new MongoDB\Client($uri);


$collection = $client->infomaxi->ordenes;
$insert = $collection->insertOne(array(['ordenes' => $_SESSION['carrito'], 'total' => $total]));
$arr = ['ordenes' => $_SESSION['carrito'], 'total' => $total];

echo json_encode($arr);
?>
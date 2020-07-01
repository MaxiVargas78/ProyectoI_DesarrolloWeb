<?php
session_start();
$total = $_POST['total'];
require '../../vendor/autoload.php';
$uri="mongodb://localhost";
$client=new MongoDB\Client($uri);


$ordenes = $client->infomaxi->ordenes;
$arr = $ordenes->insertOne(array('total' => $total, 'productos'=> $_SESSION['carrito'], 'usuario' => $_SESSION['usuario']));
echo json_encode($arr);
?>
<?php
session_start(); 
$total= $_POST['total'];
echo $total;

require 'vendor/autoload.php';
$uri="mongodb://localhost";
$client=new MongoDB\Client($uri);

$ordenes = $client->infomaxi->ordenes;
$ordenes->insertOne(array('total' => $total, 'productos'=> $_SESSION['carrito'], 'usuario' => $_SESSION['usuario']));
unset($_SESSION['carrito']);
echo json_encode(true);
?>
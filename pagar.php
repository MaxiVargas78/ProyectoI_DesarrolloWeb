
<?php
include_once("header.php");
session_start(); 
$total= $_POST['total'];
echo $total;

require 'vendor/autoload.php';
$uri="mongodb://localhost";
$client=new MongoDB\Client($uri);

$ordenes = $client->maxi->ordenes;
$ordenes->insertOne(array('total' => $total, 'productos'=> $_SESSION['carrito']));
unset($_SESSION['carrito']);
echo "<h2> Muchas gracias por su compra, nos contactaremos en breve con usted para la envío</h2>";

include_once("footer.php");
?>

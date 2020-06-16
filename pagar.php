
<?php
include_once("header.php");
session_start(); 
$total= $_POST['total'];
echo $total;

require 'vendor/autoload.php';
$uri="mongodb://localhost";
$client=new MongoDB\Client($uri);

$ordenes = $client->infomaxi->ordenes;
$ordenes->insertOne(array('total' => $total, 'productos'=> $_SESSION['carrito'], 'usuario' => $_SESSION['usuario']));
unset($_SESSION['carrito']);
echo"<h1>";
?>
<div class="card">
  <div class="card-body">
  Muchas gracias por su compra, nos contactaremos en breve con usted para la entrega!
  </div>
</div>

<?php
echo"</h1>";
?>

<?php
include_once("footer.php");
?>

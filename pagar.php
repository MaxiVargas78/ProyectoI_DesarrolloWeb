
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
echo"<h";
?>
<div role="alert" aria-live="assertive" aria-atomic="true" class="toast" data-autohide="false">
  <div class="toast-header">
    <img src="..." class="rounded mr-2" alt="...">
    <strong class="mr-auto">InfoMax</strong>
    <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>
  <div class="toast-body">
  Muchas gracias por su compra, nos contactaremos en breve con usted para la entrega!
  </div>
</div>";

<?php
echo"</div>";
?>

<?php
include_once("footer.php");
?>

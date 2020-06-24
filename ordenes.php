<?php
include_once("header.php");
include_once("datos.php");


require 'vendor/autoload.php';
$uri="mongodb://localhost";
$client=new MongoDB\Client($uri);
?>

<?php

$ordenes= $client->infomaxi->ordenes->find();
$orden2= $ordenes->toArray(); 
foreach($orden2 as $order ){
    echo "<div>";

?>

    <div class="card bg-dark" style="width: 18rem;">
  <ul class="list-group list-group-flush">
  <div class="card-header text-white">Pedido</div>
    <li class="list-group-item">Cliente: <?php echo $order['usuario'];?></li>
    <li class="list-group-item">Código Producto:<?php echo  json_encode($order['productos']);?></li>
    <li class="list-group-item">Precio Total $<?php echo $order['total'];?></li>
  </ul>
</div>

<?php
    echo"</div>";


}
?>

<?php
include_once("footer.php");
?>
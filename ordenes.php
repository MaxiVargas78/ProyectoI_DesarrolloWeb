<?php
include_once("header.php");
include_once("datos.php");


require 'vendor/autoload.php';
$uri="mongodb://localhost";
$client=new MongoDB\Client($uri);
?>

<?php

$ordenes= $client->infomaxi->ordenes->find(); // la consulta la realiza pero no logro hacer que se visualice
foreach($ordenes->toArray() as $order ){

echo "<tr>";


?>

    <td><?php echo $order['usuario'];?></td>
    <td><?php echo $order['productos'];?></td>
    <td>$<?php echo $order['total'];?></td>
  

<?php
    echo"</tr>";
}
?>

<?php
include_once("footer.php");
?>
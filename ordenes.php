<?php
include_once("header.php");
include_once("datos.php");
$orden = $_GET['key'];

require 'vendor/autoload.php';
$uri="mongodb://localhost";
$client=new MongoDB\Client($uri);
?>

<?php
$ordenes= $client->infomaxi->$ordenes->findOne(['_id' => new MongoDB\BSON\ObjectID($orden)]);
foreach($ordenes as $ordencita){
    echo "<tr>";
?>

    <td><?php echo $orden['usuario'];?></td>
    <td><?php echo $productos['productos'];?></td>
    <td>$<?php echo $total['total'];?></td>

<?php
    echo"</tr>";
}
?>

<?php
//include_once("footer.php");
?>
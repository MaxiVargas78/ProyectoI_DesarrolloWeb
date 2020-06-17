<?php
include_once("header.php");
include_once("datos.php");
$orden = $_GET['key'];

require 'vendor/autoload.php';
$uri="mongodb://localhost";
$client=new MongoDB\Client($uri);
?>

<?php
    

foreach($ordenes as $order ){
echo "<tr>";
$ordenes= $client->infomaxi->ordenes->find();

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
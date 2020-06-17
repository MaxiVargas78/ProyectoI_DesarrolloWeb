<?php
include_once("header.php");
include_once("datos.php");


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
    <?php print_r($order['usuario']); ?>
    <td><?php echo $order['productos'];?></td>
    <?php print_r($order['productos']); ?>
    <td>$<?php echo $order['total'];?></td>
    <?php print_r($order['total']); ?>

<?php
    echo"</tr>";
}
?>

<?php
include_once("footer.php");
?>
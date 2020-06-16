<?php
include_once("header.php");
include_once("pagar.php");
//$orden = $_GET['key'];

require 'vendor/autoload.php';
$uri="mongodb://localhost";
$client=new MongoDB\Client($uri);
?>

<?php
$ordenes= $client->infomaxi->ordenes->find();
foreach($ordenes as $orden){
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
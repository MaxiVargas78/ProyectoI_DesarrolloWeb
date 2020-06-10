<?php
include_once("header.php");
require 'vendor/autoload.php';
$uri="mongodb://localhost";
$client=new MongoDB\Client($uri);
?>

<ul class="list-group bg-white">

<table class="table text-white">
<tr>
<th>Productos</th>
<th>Cantidad</th>
<th>Precio</th>
<th>Total</th>
</tr>
<?php
$total=0;
foreach($_SESSION['carrito'] as $prod => $cantidad){
echo "<tr>";
$producto= $client->infomaxi->productos->findOne(['_id' => new MongoDB\BSON\ObjectID($prod)]);

?>

    <td><?php echo $producto['name'];?></td>
    <td><?php echo $cantidad;?></td>
    <td>$<?php echo $producto['precio'];?></td>
    <td>$<?php echo $producto['precio']*$cantidad;?></td>


<?php
$total += $producto['precio']*$cantidad;
echo"</tr>";
}
?>
</table>
<a text-white>Total a pagar: $<?php echo $total; ?><center><button>Pagar</button><br></a></center>



<?php
include_once("footer.php");
?>
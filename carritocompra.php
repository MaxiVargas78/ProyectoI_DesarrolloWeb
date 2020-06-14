//crear un usuario administrador que redirija a una vista solo de admin
//crear una pagina que se llame admin-ordenes
//utilizar el mongo de vista de productos y usarlos en vista admin-ordenes
//insertar clave y buscar como validarla en php y mongo


<?php

include_once("header.php");
require 'vendor/autoload.php';
$uri="mongodb://localhost";
$client=new MongoDB\Client($uri);

if(isset($_GET['remover'])){
    $r = $_GET['remover'];
    unset($_SESSION['carrito'][$r]);
}
?>

<ul class="list-group bg-dark">

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

    <td>
    <a  href="carrito.php?remover=<?php echo $prod; ?>">
    <svg class="bi bi-x" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M11.854 4.146a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708-.708l7-7a.5.5 0 0 1 .708 0z"/>
  <path fill-rule="evenodd" d="M4.146 4.146a.5.5 0 0 0 0 .708l7 7a.5.5 0 0 0 .708-.708l-7-7a.5.5 0 0 0-.708 0z"/>
</svg>
</a>


<?php
$total += $producto['precio']*$cantidad;
echo"</tr>";
}
?>
</table>
<form action="pagar.php" method="POST">
<input type="hidden" name="total" value="<?php echo $total; ?>" />
<center><a class="text-white">Total a pagar: $<?php echo $total; ?><br><input type="submit" value="Pagar"></br></a><center>
</form>


<?php
include_once("footer.php");
?>
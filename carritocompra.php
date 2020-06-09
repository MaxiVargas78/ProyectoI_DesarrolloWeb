<?php
include_once("header.php");
require 'vendor/autoload.php';
$uri="mongodb://localhost";
$client=new MongoDB\Client($uri);
?>
<ul class="list-group bg-dark">
<?php
foreach($_SESSION['carrito'] as $prod => $cantidad){

$producto= $client->infomaxi->productos->findOne(['_id' => new MongoDB\BSON\ObjectID($prod)]);

?>
    <li class="list-group-item bg-dark"><?php echo $producto['name'];?></li>
<?php
}
?>



<?php
include_once("footer.php");
?>
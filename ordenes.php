<?php
include_once("header.php");
include_once("datos.php");
$orden = $_GET['key'];

require 'vendor/autoload.php';
$uri="mongodb://localhost";
$client=new MongoDB\Client($uri);

$ordenes= $client->infomaxi->ordenes->find();
foreach($ordenes['productos'] as $producto => $productito){
    echo "$producto : $productito";
    print_r($ordenes);


$usuario = $ordenes['usuario'];
$productos = $ordenes['productos'];
$total = $ordenes['total'];
}
?> 
<h5 class="card-header text-white bg-dark mb-3">Órdenes</h5>
<div class="card mb-3" style="max-width: 540px;">
  <div class="row no-gutters">
    <div class="col-md-4">
      <img src="<?php echo $img;?>" weight="500" class="card-img" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title"><?php echo $usuario?></h5>
        <p class="card-text"><?php echo $ordenes;?></p>
        <h6 class="card-text"><?php echo $total;?></h6>
        <h6 class="card-text"> $ <?php echo $precio;?></h6>
        </form>
        </small></p>
      </div>
    </div>
  </div>
</div>
<?php
include_once("footer.php");
?>
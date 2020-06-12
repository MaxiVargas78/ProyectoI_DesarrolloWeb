<?php
include_once("header.php");
include_once("datos.php");
$prod = $_GET['key'];

require 'vendor/autoload.php';
$uri="mongodb://localhost";
$client=new MongoDB\Client($uri);

$producto= $client->infomaxi->productos->findOne(['_id' => new MongoDB\BSON\ObjectID($prod)]);

$nombre = $producto['name'];
$desc = $producto['desc'];
$desc1 = $producto['desc1'];
$img = $producto['img'];
$precio = $producto['precio'];
?> 
<h5 class="card-header text-white bg-dark mb-3">Productos</h5>
<div class="card mb-3" style="max-width: 540px;">
  <div class="row no-gutters">
    <div class="col-md-4">
      <img src="<?php echo $img;?>" weight="500" class="card-img" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title"><?php echo $nombre?></h5>
        <p class="card-text"><?php echo $desc;?></p>
        <h6 class="card-text"><?php echo $desc1;?></h6>
        <h6 class="card-text"> $ <?php echo $precio;?></h6>
        <p class="card-text"><small class="text-muted"><form action="agregar.php" method="POST">
        <input type="hidden" name="producto" value="<?php echo $prod; ?>"/>
        Cantidad:
        <input type="number" name="cantidad" value="1"/>
        <input type="submit"  value="Agregar al carrito"/>
        </form>
        </small></p>
      </div>
    </div>
  </div>
</div>
<?php
include_once("footer.php");
?>
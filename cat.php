<?php
include_once("header.php");
include_once("datos.php");
$prod = $_GET['key'];

require 'vendor/autoload.php';
$uri="mongodb://localhost";
$client=new MongoDB\Client($uri);

$cat= $_GET['key'];
$collection= $client->infomaxi->productos->find(['categoria' => $cat]);
$prods = array();
foreach ($collection as $entry) {
    $prods[ $entry['_id']->__toString() ] = $entry['name'];

}
$producto= $client->infomaxi->productos->categoria->findOne(['_id' => new MongoDB\BSON\ObjectID($prod)]);

$nombre = $producto['name'];
$desc = $producto['desc'];
$img = $producto['img'];
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
        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
      </div>
    </div>
  </div>
</div>
<?php
include_once("footer.php");
?>
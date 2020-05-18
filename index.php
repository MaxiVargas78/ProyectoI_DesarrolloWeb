<?php
include_once("header.php");
require 'vendor/autoload.php';
$uri="mongodb://localhost";
$client=new MongoDB\Client($uri);

$collection= $client-> infomaxi->categorias->find();
$categorias = array();
foreach ($collection as $entry) {
    $categorias[$entry['_id']->__toString() ] = $entry['name'];
    echo $categorias[ $entry['_id']];
}

$cat= $_GET['key'];
?> 
<div class="card text-center bg-dark mb-3">
  <div class="card-header text-white">
    SERVICIOS & SOLUCIONES PARA TI
  </div>
<div class="card-deck">
  <div class="card">
    <img src="img/internet.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Servicio Internet</h5>
      <p class="card-text">Encuentra los mejores planes y servicios de Internet.</p>
     <a href="cat.php?key=5eb7b2812c54ea1bdc3c8aed" class="btn btn-primary">Ver Más</s></a>
    </div>
  </div>
  <div class="card">
    <img src="img/software.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Servicio Software</h5>
      <p class="card-text">Encuentra productos de calidad.</p>
      <a href="cat.php?key=5eb7b2a02c54ea1bdc3c8aef" class="btn btn-primary">Ver Más</s></a>
    </div>
  </div>
  <div class="card">
    <img src="img/hardware.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Servicio Hardware</h5>
      <p class="card-text">Encuentra todo de las mejores marcas del mundo.</p>
      <a href="cat.php?key=5eb7b28f2c54ea1bdc3c8aee" class="btn btn-primary">Ver Más</s></a>
    </div>
  </div>
</div>	
<?php
include_once("footer.php");
?>



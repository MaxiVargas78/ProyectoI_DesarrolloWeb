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
<div class="card-deck">
  <div class="card">
    <img src="img/internet.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Servicio Internet</h5>
      <p class="card-text">Encuentra los mejores planes y servicios de Internet.</p>
      <li class="nav-item">
        <a class="nav-link active" href="cat.php?key=5eb7b2812c54ea1bdc3c8aed"> Ver Más</a>
        <a href="cat.php?key=5eb7b2812c54ea1bdc3c8aed" class="btn btn-primary">Ver Más</s></a>
      </li>
    </div>
  </div>
  <div class="card">
    <img src="..." class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
    </div>
    <div class="card-footer">
      <small class="text-muted">Last updated 3 mins ago</small>
    </div>
  </div>
  <div class="card">
    <img src="..." class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
    </div>
    <div class="card-footer">
      <small class="text-muted">Last updated 3 mins ago</small>
    </div>
  </div>
</div>	
<?php
include_once("footer.php");
?>



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
	<div class="card-group">
  <h3>Elija Servicio</h3>
  <div class="card">
    <img src="img/internet.jpg" weight="100" height="100" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Card Title</5>
      <p class="card-text"></p>
    </div>
  </div>
  <div class="card">
    <img src="img/internet.jpg" weight="100" height="100" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text"></p>
    </div>
  </div>
  <div class="card">
    <img src="img/internet.jpg" weight="100" height="100" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text"></p>
    </div>
  </div>

  <div class="container-sm">100% wide until small breakpoint</div>
  <div class="container-md">100% wide until medium breakpoint</div>
  <div class="container-lg">100% wide until large breakpoint</div>
  <div class="container-xl">100% wide until extra large breakpoint</div>
	<?php
	foreach($categorias as $key => $cat){
	?>
		<li class="card-group"><a href="cat.php?key=<?php echo $key?>"><?php echo $cat?></a></li>
		
	<?php
	} 
	?>
	
	</ul>
	</div>
<?php
include_once("footer.php");
?>

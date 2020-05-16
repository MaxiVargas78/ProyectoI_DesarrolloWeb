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
<div class="alert alert.primary" role="alert">
	<h3>Elija Servicio</h3>
	<div class="card-group">
  <div class="card">
    <img src="img/internet.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title"><a href="cat.php?key=<?php echo $key?>"></h5>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
    </div>
  </div>
  <div class="card">
    <img src="..." class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
    </div>
  </div>
  <div class="card">
    <img src="..." class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
    </div>
  </div>

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

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
	<ul class="list-group">
</ul>
	<?php
	foreach($categorias as $key => $cat){
	?>
		<li class="list-group-item"><a href="cat.php?key=<?php echo $key?>"><?php echo $cat?></a></li>
		
	<?php
	} 
	?>
	<div class="gallery-container">
        <div class="gallery__item"><img src="img/internet.jpg" alt="Descripcion 1" class="gallery__img"> </div>
        <div class="gallery__item"><img src="img/Verduras.jpg" alt="Descripcion 2" class="gallery__img"> </div>
		<div class="gallery__item"><img src="img/Leña.jpg" alt="Descripcion 3" class="gallery__img"> </div>
 </div>
	</ul>
	</div>
<?php
include_once("footer.php");
?>

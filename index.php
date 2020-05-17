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
<hr  color="black" size=3>
<h2>Categorias</h2>
<hr  color="black" size=3>
<ul class= "categorias">
	<nav> 
		<li class="enumeracion"><a href="cat.php?key=5eb8cc49618a191062d46722">Frutas</a></li>
	</nav>
	<nav> 
		<li class="enumeracion"><a href="cat.php?key=5eb8cc5a618a191062d46723">Verduras</a></li>
	</nav>
	<nav> 
		<li class="enumeracion"><a href="cat.php?key=5eb8cc66618a191062d46724">Leña</a></li>
	</nav>	
</ul>


<div class="gallery-container">
        <div class="gallery__item"><img src="img/Frutas.jpg" alt="Descripcion 1" class="gallery__img"> </div>
        <div class="gallery__item"><img src="img/Verduras.jpg" alt="Descripcion 2" class="gallery__img"> </div>
		<div class="gallery__item"><img src="img/Leña.jpg" alt="Descripcion 3" class="gallery__img"> </div>
 </div>
	
<?php
include_once("footer.php");
?>



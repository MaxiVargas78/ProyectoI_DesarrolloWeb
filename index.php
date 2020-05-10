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
	</ul>
	</div>
<?php
include_once("footer.php");
?>

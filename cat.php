<?php
include_once("header.php");
require 'vendor/autoload.php';
$uri="mongodb://localhost";
$client=new MongoDB\Client($uri);

$cat= $_GET['key'];
$collection= $client-> infomaxi->categorias->find(["categoria" => $cat]);
$prods = array();
foreach ($collection as $entry) {
    $prods[$entry['_id']->__toString() ] = $entry['name'];

}



//print_r($prods);
//print_r($productos[$cat]);
?> 
	<h3>Servicio:</h3>
	<ul>
	<?php
	foreach($prods as $key => $value){
		$nombre = $productos[$value];
		echo "<li><a href='prod.php?key=$key'>$value</a></li>";
	}
	?>
	<?php 

	?>
	
	
	
	</ul>

<?php
include_once("footer.php");
?>

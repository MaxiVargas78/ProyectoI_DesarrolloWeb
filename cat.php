<?php
include_once("header.php");
include_once("datos.php");

$cat= $_GET['key'];
$prods = $catprod[$cat];
//print_r($prods);
//print_r($productos[$cat]);
?> 
	<h3>Servicio:</h3>
	<ul>
	<?php
	foreach($prods as $key => $value){
		$nombre = $productos[$value];
		echo "<li><a href='prod.php?key=$value'>$nombre</a></li>";
	}
	?>
	<?php 

	?>
	
	
	
	</ul>

<?php
include_once("footer.php");
?>

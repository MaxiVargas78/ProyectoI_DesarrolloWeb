<?php
include_once("header.php");
include_once("datos.php");

//print_r($productos);

$cat= $_GET['key'];
?> 
	<h3>Enzo mamalo: </h3>
	<ul>
	<?php
	foreach($categorias as $key => $cat){
	?>
		<li><a href="cat.php?key=<?php echo $key?>"><?php echo $cat?></a></li>
		
	<?php
	} 
	?>
	</ul>

<?php
include_once("footer.php");
?>

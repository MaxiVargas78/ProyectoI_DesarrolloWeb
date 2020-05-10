<?php
include_once("header.php");
include_once("datos.php");

//print_r($productos);

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
	</ul>
	</div>
<?php
include_once("footer.php");
?>

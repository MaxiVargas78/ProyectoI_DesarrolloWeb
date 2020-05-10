<?php
include_once("header.php");
include_once("datos.php");
$prod = $_GET['key'];
$nombre = $productos[$prod];
$desc = $descripciones[$prod];
?> 
	<h3><?php echo $nombre?></h3>
    <h><i><?php echo $desc;?></i></h>
	<ul>
	
	</ul>

<?php
include_once("footer.php");
?>
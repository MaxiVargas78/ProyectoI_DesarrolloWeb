<?php
include_once("header.php");
include_once("datos.php");
$prod = $_GET['key'];

require 'vendor/autoload.php';
$uri="mongodb://localhost";
$client=new MongoDB\Client($uri);

$producto= $client->infomaxi->productos->findOne(['_id' => new MongoDB\BSON\ObjectID($prod)]);

$nombre = $producto['name'];
$desc = $producto['desc'];
$img = $producto['img'];
?> 
	<h3><?php echo $nombre?></h3>
	<h><i><?php echo $desc;?></i></h>
	<a><img src="<?php echo $img;?>"></a>
	<ul>
	
	</ul>

<?php
include_once("footer.php");
?>
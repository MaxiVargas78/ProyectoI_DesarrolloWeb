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
<div class="card mb-3">
  <img src="<?php echo $img;?>" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title"><?php echo $nombre?></h5>
    <p class="card-text"><?php echo $desc;?></p>
   
  </div>
</div>
<?php
include_once("footer.php");
?>
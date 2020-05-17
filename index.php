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
  <div class="container-sm">100% wide until small breakpoint</div>
  <div class="container-md">100% wide until medium breakpoint</div>
  <div class="container-lg">100% wide until large breakpoint</div>
  <div class="container-xl">100% wide until extra large breakpoint</div>
	<?php
	foreach($categorias as $key => $cat){
	?>
		<li class="card-group"><a href="cat.php?key=<?php echo $key?>"><?php echo $cat?></a></li>
		
	<?php
	} 
	?>
	
	</ul>
	</div>
<?php
include_once("footer.php");
?>

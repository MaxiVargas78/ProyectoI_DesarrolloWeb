<?php
include_once("header.php");

require 'vendor/autoload.php';
$uri="mongodb://localhost";
$client=new MongoDB\Client($uri);

$cat= $_GET['key'];
$collection= $client->infomaxi->productos->find(['categoria' => $cat]);
$prods = array();
foreach ($collection as $entry) {
    $prods[ $entry['_id']->__toString() ] = $entry['name'];

}



//print_r($prods);
//print_r($productos[$cat]);
?> 
<div class="card bg-dark mb-3">

  <h5 class="card-header text-white bg-dark mb-3">Servicio Internet</h5>

  <div class="card-body">
  <img src="img/internet.jpg" class="card-img-top" alt="...">
  <?php
	foreach($prods as $key => $value){
		echo "<li><a href='prod.php?key=$key'>$value</a></li>";
	}
	?>
  </div>
</div>
	
	
<?php
include_once("footer.php");
?>

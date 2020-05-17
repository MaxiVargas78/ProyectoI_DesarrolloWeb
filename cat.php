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
<div class="card mb-3" style="max-width: 540px;">
<li class="nav-item">
        <a class="nav-link active" href="#">Servicios de Internet</a>
      </li>
  <div class="row no-gutters">
    <div class="col-md-4">
	  <img src="img/internet.jpg" class="card-img" alt="...">
	  
    </div>
    <div class="col-md-8">
      <div class="card-body">
	  <ul>
	<?php
	foreach($prods as $key => $value){
		echo "<li><a href='prod.php?key=$key'>$value</a></li>";
	}
	?>
	</ul>
      </div>
    </div>
  </div>
</div>
	
	
<?php
include_once("footer.php");
?>

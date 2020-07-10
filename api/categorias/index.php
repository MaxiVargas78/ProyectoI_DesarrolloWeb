<?php
require '../../vendor/autoload.php';
$uri="mongodb://localhost";
$client=new MongoDB\Client($uri);

$collection= $client-> infomaxi->categorias->find();
$categorias = array();
foreach ($collection as $entry) {
    $categorias[$entry['_id']->__toString() ] = $entry['name'];
    echo $categorias[ $entry['_id']];
}
header("Access-Control-Allow-Origin: *"); 
echo json_encode($categorias );
?>
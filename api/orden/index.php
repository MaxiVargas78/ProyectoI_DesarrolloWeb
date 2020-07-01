<?php
require 'vendor/autoload.php';
$uri="mongodb://localhost";
$client=new MongoDB\Client($uri);

$ordenes= $client->infomaxi->ordenes->find();
$orden2= array();
foreach( $ordenes as $entry){
    $orden2[$entry['_id']->__toString()] = $entry['ordenes'];
}
echo json_encode($orden2);
?>
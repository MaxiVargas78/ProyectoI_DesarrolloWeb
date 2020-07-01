<?php
require '../../vendor/autoload.php';
$uri="mongodb://localhost";
$client=new MongoDB\Client($uri);


$collect= $client->infomaxi->ordenes->find();
$orden2 = array();
foreach ($collect as $entry) {
        $orden2[$entry['_id']->__toString()] = $entry[array('usuario','total')];
}
echo json_encode($orden2);


?>

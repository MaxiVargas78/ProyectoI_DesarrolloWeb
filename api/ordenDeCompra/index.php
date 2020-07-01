<?php
require '../../vendor/autoload.php';
$uri="mongodb://localhost";
$client=new MongoDB\Client($uri);


$collect= $client->infomaxi->ordenes->find();
$orden2 = array();
$orden3 = array();
foreach ($collect as $entry) {
        $orden2[$entry['_id']->__toString()] = $entry['usuario'];
        $orden3[$entry['_id']->__toString()] = $entry['total'];
}
echo json_encode($orden2);
echo json_encode($orden3);


?>

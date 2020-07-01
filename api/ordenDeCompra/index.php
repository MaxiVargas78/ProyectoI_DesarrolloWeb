<?php
require '../../vendor/autoload.php';
$uri="mongodb://localhost";
$client=new MongoDB\Client($uri);


$collect= $client->infomaxi->ordenes->find();
$orden2 = array();
$orden3 = array();
$orden4 = array();
foreach ($collect as $entry) {
        $orden2[$entry['_id']->__toString()] = $entry['usuario'];
        $orden3[$entry['_id']->__toString()] = $entry['total'];
        $orden4[$entry['_id']->__toString()] = $entry['productos'];
}
$arr=["nombre" => $orden2, "total" => $orden3, "productos" => $orden4];

echo json_encode($arr);


?>

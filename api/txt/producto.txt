<?php
$prod = $_GET['key'];

require '../../vendor/autoload.php';
$uri="mongodb://localhost";
$client=new MongoDB\Client($uri);

$producto= $client->infomaxi->productos->findOne(['_id' => new MongoDB\BSON\ObjectID($prod)]);

$nombre = $producto['name'];
$desc = $producto['desc'];
$desc1 = $producto['desc1'];
$img = $producto['img'];
$precio = $producto['precio'];

$arr=["nombre" => $nombre, "id" => $prod, "desc" => $desc, "desc1" => $desc1, "img" => $img, "valor" => $precio];

echo json_encode($arr);
?> 

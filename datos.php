<?php
require 'vendor/autoload.php';
$uri="mongodb://localhost";
$client=new MongoDB\Client($uri);

$collection= $client-> infomaxi->categorias;
$coleccategorias= ($collection->find());
$categorias = array();
foreach ($coleccategorias as $entry) {
    $categorias[$entry['_id']->__toString() ] = $entry['name'];
    echo $categorias[ $entry['_id']];
}

print_r($categorias);

$catprod = array(
    0 => array(0,1), 
    1 => array(2,3,4), 
    2 => array(5,6,7)
);
$productos = array("Arriendo Chip con Plan Activo", "Arriendo Router con Plan Activo","Arriendo de Computadores","Compra de Computadores", "Arriendo o Compra otro tipo Hardware","Arriendo de Software Institucional","Compra de Licencias","Solcitud de Desarrollo Software ");
$descripciones = array(
    "Contamos con servicio de arriendo de planes activos en las principales cuatro compannias del pais, con minutos y gigas ilimitados solo por el tiempo que tu estimes conveniente, precios preferenciales por arriendo al por mayor.",
    "Especial para obtener acceso en oficinas o para varios usuarios a la vez, con planes ilimitados, precios varian segun capacidad y velocidad requerida.",
    "Mas de 1000 dispositivos disponibles, de baja,media y alta gama segun el requerimiento de sus proyectos.",
    "Los mejores precios del mercado; Samsung, lenovo, hp, toshiba, Macbook, precios al detalle y por mayor.",
    "Memorias RAM, HDD, Ventiladores, Monitores, teclados, mouse, etc.",
    "Pagando una membresia mensual obten acceso a Office360, AutoCAD, Adobe,etc.",
    "Software empresarial ya sea Canvas Instructure, SAP, etc. Configurado segun los requirimientos de su empresa o intitucion.",
    "En nuestro equipo se encuentran los mejores ingenieros para desarrollar herramientas y soluciones acordes a sus necesidades. Paginas web o programas exclusivos para usted."


);
?>

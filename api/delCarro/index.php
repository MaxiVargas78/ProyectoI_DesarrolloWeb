<?php//elimina un elemento del carrito

include_once("header.php");
require 'vendor/autoload.php';
$uri="mongodb://localhost";
$client=new MongoDB\Client($uri);

if(isset($_GET['remover'])){
    $r = $_GET['remover'];
    unset($_SESSION['carrito'][$r]);
}
?>
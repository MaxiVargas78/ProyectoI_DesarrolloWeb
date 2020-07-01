<?php//elimina un elemento del carrito
session_start();
$producto = $_GET['prod'];

require 'vendor/autoload.php';
$uri="mongodb://localhost";
$client=new MongoDB\Client($uri);

if(isset($_GET['prod']))
{
	unset($_SESSION['carrito'][$producto]);
	echo json_encode(true);
}
else{
echo json_encode(false);
}
?>

<?php
require 'vendor/autoload.php';
$uri="mongodb://localhost";
$client=new MongoDB\Client($uri);

session_start();
//$_SESSION['usuario'] = $_POST['usuario'];
//header("Location: /");

$usuario = $_POST["usuario"];
$password = $_POST["password"];

$user = [
    '_id' => new MongoDB\BSON\ObjectId,
    'usuario' => $usuario,
    'password' => $password
];
try{
    $client->infomaxi->insert($user);
    $result = $manager->executeClientWrite($infomaxi, $client);
    header("Location: /");
}
catch(MongoDB\Client\Exception\Exception $e){
    die("Error encontrado".$e);


}
?>
<?php
require 'vendor/autoload.php';
$uri="mongodb://localhost";
$client=new MongoDB\Client($uri);

session_start();
$_SESSION['usuario'] = $_POST['usuario'];
$_SESSION['password'] = $_POST['password'];
print_r($_SESSION['usuario']);

//header("Location: /");
$usuarios = $client->infomaxi->usuarios;
$usuarios->insertOne(array('usuario' => $usuario, 'password'=> $password));
print_r($usuarios);

try{    
    $usuarios= $client->infomaxi->usuarios->insert($user);
    $result = $manager->executeClient($infomaxi, $client);
    header("Location: ../index.php");
}
catch(MongoDB\Client\Exception\Exception $e){
 die("Error encontrado".$e);}


?>
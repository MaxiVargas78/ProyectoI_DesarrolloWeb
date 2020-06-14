<?php
require 'vendor/autoload.php';
$uri="mongodb://localhost";
$client=new MongoDB\Client($uri);

session_start();
$_SESSION['usuario'] = $_POST['usuario'];
$_SESSION['password'] = $_POST['password'];
//header("Location: /");

try{
    $client->infomaxi->insert($user);
    $result = $manager->executeClientWrite($infomaxi, $client);
    header("Location: /");
}
catch(MongoDB\Client\Exception\Exception $e){
    die("Error encontrado".$e);


}
?>
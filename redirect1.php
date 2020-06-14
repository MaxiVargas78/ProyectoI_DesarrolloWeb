<?php

require 'vendor/autoload.php';
$uri="mongodb://localhost";
$client=new MongoDB\Client($uri);

session_start();
$_SESSION['usuario'] = $_POST['usuario'];
$_SESSION['password'] = $_POST['password'];

$filter = [
    'usuario' => $usuario,
    'password' => $password
];
$query = new MongoDB\Driver\Query($filter);

try{
    $result = $manager->executeQuery($dbname, $query);
    $row = $result->toArray();
    $user = $row[0]->$usuario;
    $_SESSION['usuario'] = $user;
    header("Location: /carritocompra1.php");
}catch(MongoDB\Driver\Exception\Exception $e){
    die("Error encontrado");
}

?>
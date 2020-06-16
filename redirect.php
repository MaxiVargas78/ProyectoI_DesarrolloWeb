<?php
require 'vendor/autoload.php';
$uri="mongodb://localhost";
$client=new MongoDB\Client($uri);

session_start();
$_SESSION['usuario'] = $_POST['usuario'];
$_SESSION['password'] = $_POST['password'];
//print_r($_SESSION['usuario']);

//header("Location: /");
$usuarios = $client->infomaxi->usuarios;
$usuarios->insertOne(array('usuario' => $_SESSION['usuario'], 'password'=> $_SESSION['password']));
//print_r($usuarios);
header("Location: ../index.php");

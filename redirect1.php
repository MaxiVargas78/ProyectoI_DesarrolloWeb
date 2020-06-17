<?php

require 'vendor/autoload.php';
$uri="mongodb://localhost";
$client=new MongoDB\Client($uri);

session_start();
$_SESSION['usuario1'] = $_POST['usuario1'];
$_SESSION['password1'] = $_POST['password1'];
print_r($_SESSION['usuario1']);

    if(empty($_SESSION['usuario1']))
    {
     echo "Empty or invalid email address";
    }
     if(empty($_SESSION['password1'])){
     echo "Enter your password"; 
    }
    
     // Select Collection
    $result = $client->infomaxi->usuarios->findOne(array($_SESSION['usuario']));
    if($result.password === $_SESSION['password']){
     echo "Logueado correctamente";
     header("Location: ../index.php");
       }
    else
     { echo "Usuario o contraseña incorrecto";
        print_r("Usuario o contraseña incorrecto");
        
     }    
      ?>

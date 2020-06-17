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
    $result = $client->infomaxi->usuarios->findOne(array('usuario'=>$_SESSION['usuario']));
    print_r($result);
    if($result[password] === $_SESSION['password1']){
     echo "Logueado correctamente";
     $_SESSION['usuario1'] = $result[usuario];
     header("Location: ../index.php");
       }
    else
     { $_SESSION['usuario1'] = NULL;
      print_r("Usuario o contraseña incorrecto");
        
     }    
      ?>

<?php

require 'vendor/autoload.php';
$uri="mongodb://localhost";
$client=new MongoDB\Client($uri);

 if(isset($_POST['submit']))
 {
   $_SESSION['usuario'] = ($_POST['usuario']);
    $_SESSION['password'] = ($_POST['password']);
    if(empty($_SESSION['usuario']))
    {
     echo "Empty or invalid email address";
    }
     if(empty($_SESSION['password'])){
     echo "Enter your password"; 
      }
    
    
      // Select Collection
    $result = $client->infomaxi->usuarios->findOne(array('usuario' => $_SESSION['usuario'],'password' =>md5($password)));
   
    if($result){
     echo "Logueado correctamente";
       }
    else
     { echo "Fallo en la conexion";
     }

      } else { 
      die("Mongo DB no conectado");
      } 
    


      ?>

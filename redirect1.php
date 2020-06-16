<?php

require 'vendor/autoload.php';
$uri="mongodb://localhost";
$client=new MongoDB\Client($uri);

 if(isset($_POST['submit']))
 {
   $usuario= ($_POST['usuario']);
    $password = ($_POST['password']);
    if(empty($usuario))
    {
     echo "Empty or invalid email address";
    }
     if(empty($password)){
     echo "Enter your password"; 
      }
    
    
      // Select Collection
    $result = $client->infomaxi->usuarios->findOne(array('usuario' => $_SESSION['usuario'],'password' =>md5($password)));
   
    if($result){
     echo "You are successully loggedIn";
       }
    else
     { echo "unsuccessful";
     }

      } else { 
      die("Mongo DB not connected");
      } 


      ?>

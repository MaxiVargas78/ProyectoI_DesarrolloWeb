<?php
include_once("header.php");
session_start();

require 'vendor/autoload.php';
$uri="mongodb://localhost";
$client=new MongoDB\Client($uri);

?>
<div class="card bg-dark">
<div class="card-header text-white">
INICIAR SESIÓN
</div>
<div class="card-deck">
<div class="card bg-dark text-white" style="width: 36rem;"  >
<form action="redirect1.php" method="POST">
<center>
  <div class="form-group m-5 pb-5">
    <label for="exampleInputEmail1">Nombre de usuario</label>
    <input style="width: 25rem;" type="text" name="usuario1" class="form-control" id="usuario1" aria-describedby="emailHelp">
    <div class="form-group">
    <label  for="exampleInputPassword1">Contraseña</label>
    <input style="width: 25rem;" type="password" name="password1" class="form-control" id="password1">
  </div>
    <small id="emailHelp" class="form-text text-muted">Nunca compartiremos sus datos con nadie.</small>
    <button type="submit"  value="Ingresar" class="btn btn-primary pull-xs-right">Ingresar</button>

    </form>
  </div>
  </div>
</div>

<div class="card-deck">
<div class="card bg-dark text-white mb-3" style="width: 36rem;"  >

  <div class="card-header">
    REGISTRARSE
  </div>
  <form action="redirect.php" method="POST">
<center>
  <div class="form-group">
    <label for="exampleInputEmail1">Usuario</label>
    <input style="width: 25rem;" type="text" name="usuario" class="form-control" id="usuario" aria-describedby="emailHelp">
  </div>
  <div class="form-group">
    <label  for="exampleInputPassword1"> Crea una contraseña</label>
    <input style="width: 25rem;" type="password" name="password"  class="form-control" id="password">
  </div>
  <div class="form-group">
    <label  for="exampleInputPassword1"> Confirmar contraseña</label>
    <input style="width: 25rem;" type="password" name="confirmpassword" class="form-control" id="confirm">
  </div>
  <button type="submit" value="ingresar" class="btn btn-primary">Ingresar</button>
  </center>
</form>
</div>
</div>
</div>
</div>
</div>
 
<?php
include_once("footer.php");
?>
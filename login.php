<?php
include_once("header.php");
?>
<div class="card bg-dark text-white" style="width: 36rem;"  >
  <div class="card-header">
    Inicia Sesión
  </div>
<form action="redirect.php" method="POST">
  <div class="form-group">
    <label for="exampleInputEmail1">Nombre de Usuario</label>
    <input style="width: 25rem;" type="text" name="usuario" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <small id="emailHelp" class="form-text text-muted">Nunca compartiremos su correo electrónico con nadie más.</small>
    <button type="submit"  value="Ingresar" class="btn btn-primary pull-xs-right">Ingresar</button>
    </form>
  </div>
  </div>
</div>

<div class="card bg-dark text-white" style="width: 36rem;"  >
  <div class="card-header">
    Administrador
  </div>
  <form action="redirect1.php" method="POST">
  <div class="form-group">
    <label for="exampleInputEmail1">Usuario</label>
    <input type="text" name="usuario" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Contraseña</label>
    <input type="password" name="password" class="form-control" id="exampleInputPassword1">
  </div>
  <button type="submit" value="ingresar" class="btn btn-primary">Ingresar</button>
</form>
 
<?php
include_once("footer.php");
?>
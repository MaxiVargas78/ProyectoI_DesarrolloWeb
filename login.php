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
    <input style="width: 25rem;" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <small id="emailHelp" class="form-text text-muted">Nunca compartiremos su correo electrónico con nadie más.</small>
    <button type="submit"  value="Ingresar" class="btn btn-primary">Ingresar</button>
  </div>
  </div>
</div>
 
</form>
<center>
<form action="redirect.php" method="POST">
Ingrese Nombre de Usuario:
<input type="text" name="usuario">
<input type="submit" value="Ingresar">

</form>
</center>

<center>
<form action="redirect1.php" method="POST">
Ingrese Cuenta Administrador:
<input type="text" name="usuario">
<input type="password" name="password">
<input type="submit" value="ingresar">
</form>
</center>

<?php
include_once("footer.php");
?>
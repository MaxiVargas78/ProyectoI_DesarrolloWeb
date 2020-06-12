<?php
include_once("header.php");
?>

<form action="redirect.php" method="POST">
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <button type="submit"  value="Ingresar" class="btn btn-primary"></button>
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
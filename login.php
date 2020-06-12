<?php
include_once("header.php");
?>
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
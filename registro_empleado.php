<?php
	include("session.php");
?>
<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/estilo.css" /> 
    <style>
	.icon-bar {
  	background-color: #25CE53;
	}
	.icon-bar a:hover {
    background-color:#337ab7;
	}
	</style>
</head>
<body>
<div class="icon-bar">
  <a href="users.php"><i class="fa fa-user"></i></a> 
  <a class="active" href="Empleados.php"><i class="fa fa-users"></i></a> 
  <a href="Productos.php"><i class="fa fa-book"></i></a>
  <a href="report_invent.php"><i class="fa fa-print	"></i></a>

  <a href="logout.php"><i class="fa fa-power-off"></i></a> 
</div>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<center><h3 style="font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">REGISTRO DE NUEVO EMPLEADO</h3></center>
<hr/>
<div>
<center><a href="Empleados.php"><button class="cancelbtn">Salir</button></a><center>
</div>
<form action="envio_reg_empleado.php" style="text-align:center" method="POST">
  <div class="container">
  	<input style="width:350px; text-align:center " type="text" placeholder="Ingrese el nombre del empleado" name="Nombres" required>
    <br>
    <input style="width:350px; text-align:center " type="text" placeholder="Ingrese sus apellidos" name="Apellido" required>
    <br>
    <input style="width:350px; text-align:center " type="text" placeholder="Ingrese su num. de identificación" name="Num_ident" required>
    <br>
    <input style="width:350px; text-align:center " type="text" placeholder="Sexo" name="Sexo" required>
    <br>
    <label>Fecha de Nacimiento</label><br>
    <input style="width:350px; " type="date" name="Fecha_nac" required>
    <br>
    <input style="width:350px; text-align:center " type="text" placeholder="Ingrese el username que desea" name="username" required>
    <br>
    <input style="width:350px; text-align:center " type="text" placeholder="Ingrese la contraseña que desea" name="password" required>
    <br>
    <?php

echo "<label>Seleccionar el tipo de usuario</label><br><br>";
echo"<select class='select-css' id='idtipo' name='idtipo' class='form-control'>";
$mysqli = new mysqli('localhost', 'root', '', 'bd_inventario');

$cats = $mysqli->query("SELECT * FROM tipo_emp ORDER BY Id_tipo ASC");
while($rcat = mysqli_fetch_array($cats)){
  echo '<option value="'.$rcat['Id_tipo'].'">'.$rcat['Id_tipo']. ' - '.$rcat['nombre'].'</option>';
} 
echo '</select>';

?>
    <div class="clearfix">
      <button type="submit" class="signupbtn">Registrar</button>
	  
    </div>
  </div>
</form>
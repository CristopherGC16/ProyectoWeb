<?php
	include("session.php");
	include("config.php");
	$Id = $_GET['Id'];
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
<a href="home.php"><i class="fa fa-home"></i></a> 
  <a class="active" href="Empleados.php"><i class="fa fa-users"></i></a> 
  <a href="Productos.php"><i class="fa fa-book"></i></a>
  <a href="report_invent.php"><i class="fa fa-print	"></i></a>
  <a href="logout.php"><i class="fa fa-power-off"></i></a> 
</div>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<center><h2>Actualizar datos del empleado</h2></center>
<hr/>

<form action="update_envi_empleado.php" style="text-align:center" method="POST">
  <div class="container">
  <?php
	$result = mysqli_query($mysqli,"SELECT * FROM empleado WHERE Id ='$Id'");
	while($row = mysqli_fetch_array($result))
	{
	echo"<input type='hidden' name='Id' value='{$row['Id']}' required>";
    echo"<input style='width:350px; text-align:center' type='text' placeholder='Nombre' name='Nombres' value='{$row['Nombres']}' required><br>";
    echo"<input style='width:350px; text-align:center' type='text' placeholder='Apellido' name='Apellido' value='{$row['Apellido']}' required><br>";
    echo"<input style='width:350px; text-align:center' type='text' placeholder='Edad' name='Num_ident' value='{$row['Num_ident']}' required><br>";
    echo"<input style='width:350px; text-align:center' type='text' placeholder='Sexo' name='Sexo' value='{$row['Sexo']}' required><br>";
    
    echo"<label>Fecha de Nacimiento</label><br>";
    echo"<input style='width:350px;' value='{$row['Fecha_nac']}' type='date' name='Fecha_nac' required>";
    echo"<br>";
    echo"<input style='width:350px; text-align:center' type='text' placeholder='Clinica' name='username' value='{$row['username']}' required><br>";
    echo"<input style='width:350px; text-align:center' type='text' placeholder='Esquema' name='password' value='{$row['password']}' required><br>";
    echo"<button type='submit' class='signupbtn'>Actualizar</button>";
	echo"</div>";
	}?>
  </div>
</form>
<?php
	include("session.php");
	include("config.php");
	$Id_pro = $_GET['Id_pro'];
?>
<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/estilo.css" /> 
  <style>
	.icon-bar {
  	background-color:#25CE53; 
	}
	.icon-bar a:hover {
    background-color:#337ab7;
	}
	</style>
</head>
<body>
<div class="icon-bar">
<a href="home.php"><i class="fa fa-home"></i></a> 
  <a href="Empleados.php"><i class="fa fa-users"></i></a> 
  <a class="active" href="Productos.php"><i class="fa fa-book"></i></a>
  <a href="report_invent.php"><i class="fa fa-print	"></i></a>

  <a href="logout.php"><i class="fa fa-power-off"></i></a> 
</div>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<center style="font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif ;"><h2>Actualizar Producto</h2></center>
<hr/>

<form action="update_envi_productos.php" style="text-align:center" method="POST">
  <div class="container">
  <?php
	$result = mysqli_query($mysqli,"SELECT * FROM producto WHERE Id_pro ='$Id_pro'");
	while($row = mysqli_fetch_array($result))
	{
	echo"<input type='hidden' name='Id_pro' value='{$row['Id_pro']}' required>";
    echo"<input style='width:350px; text-align:center' type='text' placeholder='Nombre' name='Nombre' value='{$row['Nombre']}' required><br>";
    echo"<input style='width:350px; text-align:center' type='text' placeholder='Descripcion' name='Descripcion' value='{$row['Descripcion']}' required><br>";
    echo"<input style='width:350px; text-align:center' type='text' placeholder='Cantidad' name='Cantidad' value='{$row['Cantidad']}' required><br>";
    echo"<label>Fecha de Caducidad</label><br>";
    echo"<input style='width:350px;' value='{$row['Fecha_cad']}' type='date' name='Fecha_cad' required>";
    echo"<br>";
    echo"<input style='width:350px; text-align:center' type='text' placeholder='Precio' name='Precio' value='{$row['Precio']}' required><br>";
    
  
    echo"<button type='submit' class='signupbtn'>Actualizar</button>";
	echo"</div>";
	}?>
  </div>
</form>
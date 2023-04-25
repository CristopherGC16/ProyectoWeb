<?php
	include("session.php");
  include "funciones/function.php";

	
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
  <?php $ver=ver($_SESSION['user']);
                    if($ver==1){
                      echo '<a href="report_salida_invent.php"><i class="fa fa-file-text-o"></i></a>';
                  }
  ?>
  <a href="logout.php"><i class="fa fa-power-off"></i></a> 
</div>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<center><h2 style=" font-family: Franklin Gothic Medium, Arial Narrow, Arial, sans-serif;">Retirar Producto</h2></center>
<hr/>

<form action="ret_env_producto.php" method="POST">
  <div class="container">
  <?php

	echo "<center><h3 style='font-family: Franklin Gothic Medium, Arial Narrow, Arial, sans-serif ;'>Seleccionar producto</h3></center>";
	echo"<center><select style=' height:35px;font-size: 18px; width : 300px; font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;' class='select-css' id='producto' name='producto' class='form-control'></center>";
    $mysqli = new mysqli('localhost', 'root', '', 'bd_inventario');

    $cats = $mysqli->query("SELECT * FROM producto ORDER BY Nombre ASC");
    while($rcat = mysqli_fetch_array($cats)){
       echo "<option value='".$rcat['Id_pro']."' style='font-family: Franklin Gothic Medium, Arial Narrow, Arial, sans-serif;'>".$rcat['Nombre']." (".$rcat['Cantidad'].")" ."</option>";
    } 
    echo '</select>';
    ?>
    <?php
		echo "<h3 style='font-family: Franklin Gothic Medium, Arial Narrow, Arial, sans-serif ;'> Empleado que realiza el retiro:</h3>";
	  echo"<select style='height:35px; font-size: 18px; font color:red; width : 300px;font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;' class='select-css' id='empleado'  name='empleado' class='form-control'>";
    $mysqli = new mysqli('localhost', 'root', '', 'bd_inventario');

    $cats = $mysqli->query("SELECT * FROM empleado ORDER BY Nombres desc");
    while($rcat = mysqli_fetch_array($cats)){
       echo "<option style='font-family: Franklin Gothic Medium, Arial Narrow, Arial, sans-serif;' value='".$rcat['Id']."'>".$rcat['Nombres']."</option>";
    }
    echo '</select>';
    ?>
    <?php
    echo "<h3 style='font-family: Franklin Gothic Medium, Arial Narrow, Arial, sans-serif ;'>Ingrese la cantidad que desea retirar</h3>";
    echo"<div><input type='text' style=' font-size: 18px; width : 300px; font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;'; heigth : 5px' placeholder='Cantidad' name='Cantidad' required></div>";
 
    echo"<button type='submit' class='signupbtn'>Retirar</button>";
	echo"</div>";
	?>
  </div>
</form>
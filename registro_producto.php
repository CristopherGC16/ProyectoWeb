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
  <a href="Empleados.php"><i class="fa fa-users"></i></a> 
  <a class="active" href="Productos.php"><i class="fa fa-book"></i></a>
  <a href="report_invent.php"><i class="fa fa-print	"></i></a>
  
  <a href="logout.php"><i class="fa fa-power-off"></i></a> 
</div>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<center><h3 style="font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif ;">REGISTRO DE NUEVO PRODUCTO</h3></center>
<hr/>
<div>
<center><a href="Productos.php"><button class="cancelbtn">Salir</button></a><center>
</div>
<form action="envio_reg_producto.php" style="text-align:center" method="POST">
  <div class="container">
  	<input style="width:350px; text-align:center " type="text" placeholder="Ingrese el nombre del producto" name="Nombre" required>
    <br>
    <input style="width:350px; text-align:center " type="text" placeholder="Ingrese la descripción del producto" name="Descripcion" required>
    <br>
    <input style="width:350px; text-align:center " type="text" placeholder="Cantidad del producto" name="Cantidad" required>
    <br>
    <label>Fecha de Caducidad</label><br>
    <input style="width:350px; " type="date" name="Fecha_cad" required>
    <br>
    <input style="width:350px; text-align:center " type="text" placeholder="Ingrese el precio del producto(unidad)" name="Precio" required>
    <br>
    <?php

?>
    <div class="clearfix">
      <button type="submit" class="signupbtn">Registrarse</button>
	  
    </div>
  </div>
</form>
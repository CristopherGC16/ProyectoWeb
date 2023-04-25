<?php
	include("session.php");
  include "funciones/function.php";

	
	if(isset($_POST['search']))
	{
		$valueToSearh = $_POST['valueToSearh']; 
		$query = "SELECT * FROM producto WHERE nombre LIKE '%".$valueToSearh."%' OR Descripcion LIKE 
		'%".$valueToSearh."%'";
		$result = filterRecord($query);
	}
	else
	{
		$query = "SELECT * FROM producto";
		$result = filterRecord($query);
	}
	
	function filterRecord($query)
	{
		include("config.php");
		$filter_result = mysqli_query($mysqli, $query);
		return $filter_result;
	}
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
<body style="background-color:#FFFFFF;">

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
<h2 style="font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif ;"><center>Inventario</center></h2>

<hr/>


<center><a href="ret_producto.php"><button >Retirar producto</button></a></center>

<div class="container">

<form action="" method="POST">
<input type="search" name="valueToSearh" placeholder="Búsqueda">
<button type="submit" class="signupbtn" name="search" >Buscar</button>
</form>
<a href="registro_producto.php"><button>Registrar nuevo producto</button></a>
<br />
<?php


                    echo "<table border='1'>
                    <tr>
                    <th style='font-family: Arial, sans-serif'>Nombre</th>
                    <th style='font-family: Arial, sans-serif'>Descripcion</th>
                    <th style='font-family: Arial, sans-serif'>Cantidad</th>
                    <th style='font-family: Arial, sans-serif'>Fecha de Caducidad</th>
                    <th style='font-family: Arial, sans-serif'>Precio</th>
                    <th style='font-family: Arial, sans-serif'>Editar</th>";
                    $ver=ver($_SESSION['user']);
                    if($ver==1){
                      echo "
                    <th style='font-family: Arial, sans-serif'>Eliminar</th>";
                  }echo"

                    
                    </tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td style='font-family: Franklin Gothic Medium,Arial, sans-serif'>" . $row['Nombre'] . "</td>";
echo "<td style='font-family: Franklin Gothic Medium,Arial, sans-serif'>" . $row['Descripcion'] . "</td>";
echo "<td style='font-family: Franklin Gothic Medium,Arial, sans-serif'>" . $row['Cantidad'] . "</td>";
echo "<td style='font-family: Franklin Gothic Medium,Arial, sans-serif'>" . $row['Fecha_cad'] . "</td>";
echo "<td style='font-family: Franklin Gothic Medium,Arial, sans-serif'>" . $row['Precio'] . "</td>";
echo "<td><a href='edit_productos.php?Id_pro=".$row['Id_pro']."'><img src='./images/icons8-Edit-32.png' alt='Edit'></a></td>";
$ver=ver($_SESSION['user']);
	if($ver==1){
echo "<td><a href='delete_productos.php?Id_pro=".$row['Id_pro']."'><img src='./images/icons8-Trash-32.png' alt='Delete'></a></td>";
}
echo "</tr>";
}
echo "</table>";

?>

</body>
</html> 
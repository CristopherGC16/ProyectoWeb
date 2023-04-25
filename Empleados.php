<?php
	include("session.php");
  include "funciones/function.php";

	if(isset($_POST['search']))
	{
		$valueToSearh = $_POST['valueToSearh']; 
		$query = "SELECT * FROM empleado as emp inner join tipo_emp as temp on
     emp.idtipo = temp.Id_tipo
     WHERE Nombres LIKE '%".$valueToSearh."%' OR Apellido LIKE '%".$valueToSearh."%'";
		$result = filterRecord($query);
	}
	else
	{
		$query = "SELECT * FROM empleado as emp inner join tipo_emp as temp on
    emp.idtipo = temp.Id_tipo";
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
  <a class="active" href="Empleados.php"><i class="fa fa-users"></i></a> 
  <a href="Productos.php"><i class="fa fa-book"></i></a>
  <a href="report_invent.php"><i class="fa fa-print	"></i></a>
   <?php $ver=ver($_SESSION['user']);
                    if($ver==1){
                      echo '<a href="report_salida_invent.php"><i class="fa fa-file-text-o"></i></a>';
                  }
  ?>
  
  <a href="logout.php"><i class="fa fa-power-off"></i></a> 
</div>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<h2 style="font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif ;"><center>Empleados</center></h2>
<hr/>

<div class="container">

<form action="" method="POST">
<input type="search" name="valueToSearh" placeholder="Búsqueda">
<button type="submit" class="signupbtn" name="search" >Buscar</button>
</form>
<a href="registro_empleado.php"><button>Registrar nuevo empleado</button></a>
<br />
<?php
                    echo "<table border='1'>
                    <tr>
                    <th style='font-family: Arial, sans-serif'>Nombres</th>
                    <th style='font-family: Arial, sans-serif'>Apellidos</th>
                    <th style='font-family: Arial, sans-serif'>Número Identificación</th>
                    <th style='font-family: Arial, sans-serif'>Sexo</th>
                    <th style='font-family: Arial, sans-serif'>Fecha Nacimiento</th>
                    <th style='font-family: Arial, sans-serif'>Usuario</th>
                    <th style='font-family: Arial, sans-serif'>Rol</th>
                   ";
                    $ver=ver($_SESSION['user']);
                    if($ver==1){
                      echo "
                      <th style='font-family: Arial, sans-serif'>Editar</th>
                      <th style='font-family: Arial, sans-serif'>Eliminar</th>";
                  }echo"

                    
                    </tr>";

                while($row = mysqli_fetch_array($result))
                {
                echo "<tr>";
                echo "<td style='font-family: Franklin Gothic Medium,Arial, sans-serif'>" . $row['Nombres'] . "</td>";
                echo "<td style='font-family: Franklin Gothic Medium,Arial, sans-serif'>" . $row['Apellido'] . "</td>";
                echo "<td style='font-family: Franklin Gothic Medium,Arial, sans-serif'>" . $row['Num_ident'] . "</td>";
                echo "<td style='font-family: Franklin Gothic Medium,Arial, sans-serif'>" . $row['Sexo'] . "</td>";
                echo "<td style='font-family: Franklin Gothic Medium,Arial, sans-serif'>" . $row['Fecha_nac'] . "</td>";
                echo "<td style='font-family: Franklin Gothic Medium,Arial, sans-serif'>" . $row['username'] . "</td>";
                echo "<td style='font-family: Franklin Gothic Medium,Arial, sans-serif'>" . $row['nombre'] . "</td>";

                $ver=ver($_SESSION['user']);
                    if($ver==1){
                      echo "<td><a href='edit_empleados.php?Id=".$row['Id']."'><img src='./images/icons8-Edit-32.png' alt='Edit'></a></td>";
                echo "<td><a href='delete_empleados.php?Id=".$row['Id']."'><img src='./images/icons8-Trash-32.png' alt='Delete'></a></td>";
                }
                echo "</tr>";
                }
                echo "</table>";
                ?>


</body>
</html> 
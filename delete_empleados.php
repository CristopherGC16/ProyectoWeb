<?php
include("config.php");
include("session.php");

$Id = $_GET['Id'];

$sql = "DELETE FROM empleado WHERE Id='$Id'";
if(mysqli_query($mysqli, $sql)){
    echo '<script language="javascript">';
	echo 'alert("Registro eliminado exitósamente");';
	echo 'window.location="Empleados.php";';
	echo '</script>';
	
} else {
	echo '<script language="javascript">';
	echo 'alert("Error eliminando registro!");';
	echo 'window.location="Empleados.php";';
	echo '</script>';
}
?>
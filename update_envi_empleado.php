<?php
include("config.php");
include("session.php");

$Id = $_POST['Id'];
$Nombres = $_POST['Nombres'];
$Apellido = $_POST['Apellido'];
$Num_ident = $_POST['Num_ident'];
$Sexo = $_POST['Sexo'];
$Fecha_nac = $_POST['Fecha_nac'];
$username = $_POST['username'];
$password = $_POST['password'];

$sql = "UPDATE empleado SET Nombres='$Nombres', Apellido='$Apellido', Num_ident='$Num_ident', 
        Sexo='$Sexo', Fecha_nac='$Fecha_nac', username='$username',
        password='$password' WHERE Id='$Id'";
if(mysqli_query($mysqli, $sql)){
    echo '<script language="javascript">';
	echo 'alert("Registro actualizado exitósamente");';
    echo 'window.location="Empleados.php";';
	echo '</script>';
	
} else {
	echo '<script language="javascript">';
	echo 'alert("Error en proceso de actualización de registro!");';
	echo 'window.location="Empleados.php";';
	echo '</script>';
}
?>
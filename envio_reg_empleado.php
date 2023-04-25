<?php
include("config.php");
include("session.php");
$Nombres = $_POST['Nombres'];
$apellido = $_POST['Apellido'];
$num_ident = $_POST['Num_ident'];
$sexo = $_POST['Sexo'];
$fecha_nac = $_POST['Fecha_nac'];
$username = $_POST['username'];
$password = $_POST['password'];
$idtipo = $_POST['idtipo'];

$sql = "INSERT INTO empleado(Nombres, Apellido, Num_ident, Sexo, Fecha_nac, username, 
password,idtipo) 
VALUES('$Nombres', '$apellido', '$num_ident', '$sexo', '$fecha_nac', '$username' , '$password','$idtipo')";

if(mysqli_query($mysqli, $sql)){
    echo '<script language="javascript">';
	echo 'alert("Nuevo empleado registrado");';
	echo 'window.location="Empleados.php";';
	echo '</script>';	
} else {
	echo '<script language="javascript">';
	echo 'alert("Hubo un error al registrar al empleado");';
	echo 'window.location="registro_empleado.php";';
	echo '</script>';
}
?>
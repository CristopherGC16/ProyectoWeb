<?php
include("config.php");
include("session.php");

$Id_pro = $_POST['Id_pro'];
$Nombre = $_POST['Nombre'];
$Descripcion = $_POST['Descripcion'];
$Cantidad = $_POST['Cantidad'];
$Fecha_cad = $_POST['Fecha_cad'];
$Precio = $_POST['Precio'];

$sql = "UPDATE producto SET Nombre='$Nombre', Descripcion='$Descripcion', Cantidad='$Cantidad', 
        Fecha_cad='$Fecha_cad', Precio='$Precio' WHERE Id_pro='$Id_pro'";
if(mysqli_query($mysqli, $sql)){
    echo '<script language="javascript">';
	echo 'alert("Registro actualizado exitósamente");';
    echo 'window.location="Productos.php";';
	echo '</script>';
	
} else {
	echo '<script language="javascript">';
	echo 'alert("Error en proceso de actualización de registro!");';
	echo 'window.location="Productos.php";';
	echo '</script>';
}
?>
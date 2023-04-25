<?php
include("config.php");
include("session.php");

$Nombre = $_POST['Nombre'];
$Descripcion = $_POST['Descripcion'];
$Cantidad = $_POST['Cantidad'];
$Fecha_cad = $_POST['Fecha_cad'];
$Precio = $_POST['Precio'];

$sql = "INSERT INTO producto(Nombre, Descripcion, Cantidad, Fecha_cad, Precio)  
VALUES('$Nombre', '$Descripcion', '$Cantidad', '$Fecha_cad', '$Precio')";
if(mysqli_query($mysqli, $sql)){
    echo '<script language="javascript">';
	echo 'alert("Nuevo producto agregado");';
	echo 'window.location="Productos.php";';
	echo '</script>';
	
} else {
	echo '<script language="javascript">';
	echo 'alert("Hubo un error al registrar el producto!");';
	echo 'window.location="registro_producto.php";';
	echo '</script>';
}
?>
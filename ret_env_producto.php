<?php
include("config.php");
include("session.php");
include "funciones/function.php";

$id_empleado = $_POST['empleado'];
$id_inventario = $_POST['producto'];
$cantidad = $_POST['Cantidad'];

$mysqli = new mysqli('localhost', 'root', '', 'bd_inventario');
$q = $mysqli->query("SELECT Cantidad FROM producto where Id_pro = $id_inventario");
$r=mysqli_fetch_array($q);
$cant1=0;
$canti1=$r['Cantidad'];
$total=$canti1 - $cantidad;
date_default_timezone_set('America/Guatemala');
$date = date('y-m-d h:i:s');
$s =$mysqli->query("UPDATE producto SET Cantidad = $total WHERE Id_pro = $id_inventario");
$mysqli->query("INSERT INTO solicitud (idsolicitud, Id_pro, Id, Cantidads,Fecha_retiro) VALUES (NULL,'$id_inventario','$id_empleado','$cantidad','$date')");

if(($s)>0){
    echo '<script language="javascript">';
	echo 'alert("Se registró el retiro del producto!");';
    echo 'window.location="Productos.php";';
	echo '</script>';
	
} else {
	echo '<script language="javascript">';
	echo 'alert("Error en proceso de actualización de registro!");';
	echo 'window.location="ret_producto.php";';
	echo '</script>';
}
?>
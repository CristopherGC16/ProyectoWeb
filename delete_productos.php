<?php
include("config.php");
include("session.php");

$Id_pro = $_GET['Id_pro'];

$sql = "DELETE FROM producto WHERE Id_pro='$Id_pro'";
if(mysqli_query($mysqli, $sql)){
    echo '<script language="javascript">';
	echo 'alert("Registro eliminado exitósamente");';
	echo 'window.location="Productos.php";';
	echo '</script>';
	
} else {
	echo '<script language="javascript">';
	echo 'alert("Error eliminando registro!");';
	echo 'window.location="Productos.php";';
	echo '</script>';
}
?>
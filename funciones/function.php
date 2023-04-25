
<?php

function nombre_usuario($usuario){
	$mysqli = new mysqli('localhost', 'root', '', 'bd_inventario');
	$q = $mysqli->query("SELECT * FROM empleado WHERE username = '$usuario'");
	$r = mysqli_fetch_array($q);
	return $r['firstname'];
}
function ver($dato){
	$mysqli = new mysqli('localhost', 'root', '', 'bd_inventario');
	$q = $mysqli->query("SELECT * FROM empleado WHERE username = '$dato'");
	$r = mysqli_fetch_array($q);
	return $r['idtipo'];
}
?>
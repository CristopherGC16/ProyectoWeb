<?php
	include("session.php");
  include "funciones/function.php";

	
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="css/estilo.css" /> 
<style>

.vertical-center {
  margin: 0;
  position: absolute;
  top: 50%;
  -ms-transform: translateY(-50%);
  transform: translateY(-50%);
}
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
  <a class="active" href="home.php"><i class="fa fa-home"></i></a> 
  <a href="Empleados.php"><i class="fa fa-users"></i></a> 
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




<div class="container">
  <div  style="text-align: center">
  <br><br>
  <font style="font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif ;" size="+2">!Bienvenido al sistema usuario: <?php echo htmlspecialchars($_SESSION["user"]); ?>!</font>
  <br>
  <br>
  <br>
  

  <img width="350px" src="images/Logo2.png">
  </div>
</div>

</body>
</html> 
<?php
require('fpdf/fpdf.php');
include('config.php');

$pdf = new FPDF();

$pdf->AddPage();
$pdf->SetFont('Arial','',10);
$pdf->Cell(50,10,'Fecha: '.date('d-m-Y').'',0,"R");
$pdf->Ln(8);
$pdf->SetFont('Arial','B',25);
$pdf->Cell(0,10,'REPORTE DE LA SALIDA DE PRODUCTOS','',1,"C");
$pdf->Ln(15);
$pdf->SetFont('Arial','B',14);
$pdf->Cell(0,10,'Historial de productos retirados',1,1,"C");
$pdf->SetFont('Arial','B',12);
$pdf->Cell(9,8,'No.',1);
$pdf->Cell(69,8,'Nombre del Empleado',1);
$pdf->Cell(50,8,'Producto',1);
$pdf->Cell(22,8,'Cantidad',1);
$pdf->Cell(40,8,'Fecha',1);


$query="SELECT * FROM solicitud as so inner join producto as prod on
so.Id_pro = prod.Id_pro inner join empleado as emp on
emp.Id = so.Id";
$result = mysqli_query($mysqli, $query);
$no=0;
while($row = mysqli_fetch_array($result)){
	$no=$no+1;
	$pdf->Ln(8);
	$pdf->SetFont('Arial','',11);
	$pdf->Cell(9,8,$no,1);
	$pdf->Cell(69,8,$row['Nombres'].' '.$row['Apellido'],1);
	$pdf->Cell(50,8,$row['Nombre'],1);
	$pdf->Cell(22,8,$row['Cantidads'],1);
    $pdf->Cell(40,8,$row['Fecha_retiro'],1);
    
}
$pdf->Output();
?>

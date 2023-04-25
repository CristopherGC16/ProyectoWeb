<?php
require('fpdf/fpdf.php');
include('config.php');

$pdf = new FPDF();

$pdf->AddPage();
$pdf->SetFont('Arial','',10);
$pdf->Cell(50,10,'Fecha: '.date('d-m-Y').'',0,"R");
$pdf->Ln(8);
$pdf->SetFont('Arial','B',25);
$pdf->Cell(0,10,'REPORTE DEL INVENTARIO','',1,"C");
$pdf->Ln(15);
$pdf->SetFont('Arial','B',14);
$pdf->Cell(0,10,'Productos',1,1,"C");
$pdf->SetFont('Arial','B',12);
$pdf->Cell(9,8,'No.',1);
$pdf->Cell(45,8,'Nombre',1);
$pdf->Cell(45,8,'Descripcion',1);
$pdf->Cell(22,8,'Cantidad',1);
$pdf->Cell(45,8,'Fecha de Caducidad:',1);
$pdf->Cell(24,8,'Precio',1);

$query="SELECT * FROM producto";
$result = mysqli_query($mysqli, $query);
$no=0;
while($row = mysqli_fetch_array($result)){
	$no=$no+1;
	$pdf->Ln(8);
	$pdf->SetFont('Arial','',11);
	$pdf->Cell(9,8,$no,1);
	$pdf->Cell(45,8,$row['Nombre'],1);
	$pdf->Cell(45,8,$row['Descripcion'],1);
	$pdf->Cell(22,8,$row['Cantidad'],1);
	$pdf->Cell(45,8,$row['Fecha_cad'],1);
	$pdf->Cell(24,8,$row['Precio'],1);
}
$pdf->Output();
?>

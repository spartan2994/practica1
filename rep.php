<?php
ob_start();
require('fpdf/fpdf.php');

$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial', '', 10);
$pdf->Cell(18, 10, '', 0);
$pdf->Cell(150, 10, 'Abarrotes "PHP & JQuery"', 0);
$pdf->SetFont('Arial', '', 9);
$pdf->Cell(50, 10, 'Fecha: ', 0);
$pdf->Ln(15);
$pdf->SetFont('Arial', 'B', 11);
$pdf->Cell(70, 8, '', 0);
$pdf->Cell(100, 8, 'LISTADO DE PRODUCTOS', 0);
$pdf->Ln(23);
$pdf->SetFont('Arial', 'B', 8);
$pdf->Cell(15, 8, 'Item', 0);
$pdf->Cell(80, 8, 'Nombre', 0);
$pdf->Cell(40, 8, 'DIRECCION', 0);
$pdf->Cell(25, 8, 'TELEFONO', 0);
$pdf->Cell(25, 8, 'CORREO', 0);
$pdf->Ln(8);
$pdf->SetFont('Arial', '', 8);

$pdf->Output();
ob_end_flush();
?>
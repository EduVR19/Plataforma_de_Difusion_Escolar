<?php
ob_start();
//include connection file
require "libs/fpdf.php";
 
class PDF extends FPDF
{
// Page header
function header()
{
    // Logo o encabezado
    $this->Image('../img/encabezado.png', 3, 0, 290);
    $this->SetFont('Arial','B',12);
    // Moverse hacia la derecha
    $this->Ln(30);

}
 

// Page footer
function footer()
{
    // Position at 1.5 cm from bottom
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Page number
    $this->Cell(0,10,utf8_decode('Página ').$this->PageNo().'/{nb}',0,0,'C');
}
}
 
require 'connection.php';
$consulta = "SELECT * FROM maestro";
$resultado = $mysqli->query($consulta);

$pdf = new PDF();
//foter page
$pdf->AliasNbPages();
//header
$pdf->AddPage('L','A4',0);

$pdf->SetFillColor(220, 53, 69);
$pdf->SetFont('Arial','B',10);


// Título del reporte
$pdf->Cell(0,10,'LISTADO DE MAESTROS', 1, 0,'C', 1);
// Salto de línea
$pdf->Ln(15);

//Nombre del encabezado de las columnas de la tabla
$pdf->Cell(10, 10,'ID',1,0,'C', 1);
$pdf->Cell(76, 10, 'Nombre', 1, 0, 'C', 1);
$pdf->Cell(40, 10, 'Domicilio', 1, 0, 'C', 1);
$pdf->Cell(58, 10, utf8_decode('Correo electrónico'), 1, 0, 'C', 1);
$pdf->Cell(22, 10, utf8_decode('Teléfono'), 1, 0, 'C', 1);
$pdf->Cell(58, 10, 'Fecha de Ingreso', 1, 0, 'C', 1);
$pdf->Cell(13, 10, 'Grupo', 1, 1, 'C', 1);



while($row = $resultado->fetch_assoc()){
    $pdf->Cell(10, 10, $row['id_maestro'], 1, 0, 'C', 0);
    $pdf->Cell(76, 10, utf8_decode($row['nombre']), 1, 0, 'C', 0);
    $pdf->Cell(40, 10, utf8_decode($row['domicilio']), 1, 0, 'C', 0);
    $pdf->Cell(58, 10, utf8_decode($row['correo']), 1, 0, 'C', 0);
    $pdf->Cell(22, 10, $row['telefono'], 1, 0, 'C', 0);
    $pdf->Cell(58, 10, utf8_decode($row['fecha_ingreso']), 1, 0, 'C', 0);
    $pdf->Cell(13, 10, $row['id_grupo'], 1, 1, 'C', 0);
}

$pdf->Output('', 'ListadoDeMaestros.pdf');
ob_end_flush(); 
?>




<?php
include('config.php');
$database = new Database();
$result = $database->runQuery("Select a.AREA_NAME, u.FIRST_NAME , u.USER_ID  from user u join area a where u.area_id = a.area_id");
$header = $database->runQuery("SELECT UCASE(`COLUMN_NAME`) 
FROM `INFORMATION_SCHEMA`.`COLUMNS` 
WHERE `TABLE_SCHEMA`='osms' 
AND `TABLE_NAME` in ('area','user')
and `COLUMN_NAME` in ('USER_ID','AREA_NAME','FIRST_NAME')");
require('fpdf/fpdf.php');
$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);

// Set header
 $pdf->Image('add.jpg',10,-1,25);
    // Move to the right
    $pdf->Cell(80);
    // Title
    $pdf->Cell(80,10,'User List',1,0,'C');
    // Line break
    $pdf->Ln(20);

			$pdf->Cell(40,12,'AREA',1);
			$pdf->Cell(40,12,'NAME',1);
	/*
foreach($header as $heading) {
	foreach($heading as $column_heading)
}*/
foreach($result as $row) {
	$pdf->Ln();
	foreach($row as $column)
		$pdf->Cell(40,12,$column,1);
}
$pdf->Output();

// Set footer
   $pdf->SetY(-15);
    // Arial italic 8
    $pdf->SetFont('Arial','I',8);
    // Page number
    $pdf->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
?>
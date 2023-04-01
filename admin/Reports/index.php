<?php
include('config.php');
$database = new Database();
$result = $database->runQuery("SELECT name,email_id,regs_time FROM customer");
$header = $database->runQuery("SELECT UCASE(`COLUMN_NAME`) 
FROM `INFORMATION_SCHEMA`.`COLUMNS` 
WHERE `TABLE_SCHEMA`='the_perfect_wedding' 
AND `TABLE_NAME`='customer'
and `COLUMN_NAME` in ('USER_NAME','EMAIL_id','REGISTER_TIME')");
require('fpdf/fpdf.php');
$pdf = new FPDF();
$pdf->AddPage("L","A4");
$pdf->SetFont('Arial','B',20);

// Set header
 $pdf->Image('add.jpg',7,1,20);
    // Move to the right
    $pdf->Cell(80);			
    // Title
    $pdf->Cell(80,10,'User List',1,0,'C');
    // Line break
    $pdf->Ln(20);


		$pdf->Cell(90,12,'name',1);
		$pdf->Cell(90,12,'email_id',1);
		$pdf->Cell(90,12,'regs_time',1);
		

foreach($result as $row) {
	$pdf->Ln();
	foreach($row as $column)
		$pdf->Cell(90,12,$column,1);
		
}
$pdf->Output();

// Set footer
   $pdf->SetY(-15);
    // Arial italic 8
    $pdf->SetFont('Arial','I',20);
    // Page number
    $pdf->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
?>
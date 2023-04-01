<?php
include('config.php');
$database = new Database();
$result = $database->runQuery("SELECT email_id,venue,decor,cateror,function FROM booking");
$header = $database->runQuery("SELECT UCASE(`COLUMN_NAME`) 
FROM `INFORMATION_SCHEMA`.`COLUMNS` 
WHERE `TABLE_SCHEMA`='the_perfect_wedding' 
AND `TABLE_NAME`='booking'
and `COLUMN_NAME` in ('EMAIL_ID')");
require('fpdf/fpdf.php');
$pdf = new FPDF();
$pdf->AddPage("L","A4");
$pdf->SetFont('Arial','B',12);

// Set header
 //$pdf->Image('add.jpg',7,1,20);
    // Move to the right
    $pdf->Cell(80);			
    // Title
    $pdf->Cell(90,10,'booking List',1,0,'C');
    // Line break
    $pdf->Ln(20);

        $pdf->Cell(55,12,'email_id',1);
		$pdf->Cell(55,12,'venue',1);
		$pdf->Cell(55,12,'decor',1);
		$pdf->Cell(55,12,'cateror',1);
		$pdf->Cell(55,12,'function',1);
	

foreach($result as $row) {
	$pdf->Ln();
	foreach($row as $column)
		$pdf->Cell(55,12,$column,1);
		
}
$pdf->Output();

// Set footer
   $pdf->SetY(-15);
    // Arial italic 8
    $pdf->SetFont('Arial','I',20);
    // Page number
    $pdf->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
?>
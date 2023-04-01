<?php
include('config.php');
$database = new Database();
$result = $database->runQuery("select PRODUCT_NAME,Product_description,Price,cat_name from product p JOIN categories c where p.Category_id=c.Category_id");
$header = $database->runQuery("SELECT UCASE(`COLUMN_NAME`) 
FROM `INFORMATION_SCHEMA`.`COLUMNS` 
WHERE `TABLE_SCHEMA`='plantdelightsystem' 
AND `TABLE_NAME`='product'
and `COLUMN_NAME` in ('PRODUCT_NAME')");
require('fpdf/fpdf.php');
$pdf = new FPDF();
$pdf->AddPage("L","A4");
$pdf->SetFont('Arial','B',8);

// Set header
 //$pdf->Image('add.jpg',7,1,20);
    // Move to the right
    $pdf->Cell(80);			
    // Title
    $pdf->Cell(90,10,'Product List',1,0,'C');
    // Line break
    $pdf->Ln(20);


		$pdf->Cell(90,12,'Product_name',1);
		$pdf->Cell(90,12,'Product_description',1);
		$pdf->Cell(90,12,'Price',1);
		$pdf->Cell(90,12,'Category Name',1);
	

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
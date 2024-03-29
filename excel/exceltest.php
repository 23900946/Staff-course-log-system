<?php

 include('../classes/Comms.php');
 $comms = new Comms();


require_once "vendor/autoload.php";
require_once "config.php";
  
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
  
$spreadsheet = new Spreadsheet();
$Excel_writer = new Xlsx($spreadsheet);
  
$spreadsheet->setActiveSheetIndex(0);
$activeSheet = $spreadsheet->getActiveSheet();
  
$activeSheet->setCellValue('A1', 'Product Name');
$activeSheet->setCellValue('B1', 'Product SKU');
$activeSheet->setCellValue('C1', 'Product Price');
  
//$query = $db->query("SELECT * FROM products");

$query = $comms->getData();
  
if($query->num_rows > 0) {
    $i = 2;
    while($row = $query->fetch_assoc()) {
        $activeSheet->setCellValue('A'.$i , $row['product_name']);
        $activeSheet->setCellValue('B'.$i , $row['product_sku']);
        $activeSheet->setCellValue('C'.$i , $row['product_price']);
        $i++;
    }
}
  
/*$filename = 'products.xlsx';
  
header('Content-Type: application/vnd.ms-excel');
header('Content-Disposition: attachment;filename='. $filename);
header('Cache-Control: max-age=0');
$Excel_writer->save('php://output');*/

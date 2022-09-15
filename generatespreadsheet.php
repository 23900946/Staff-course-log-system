<?
require_once "vendor/autoload.php";
//require_once "config.php";

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;


if(isset($_POST['generatespreadsheet']) && $_POST['generatespreadsheet']==1) {
        $spreadsheet = new Spreadsheet();
        $Excel_writer = new Xlsx($spreadsheet);

        $spreadsheet->setActiveSheetIndex(0);
        $activeSheet = $spreadsheet->getActiveSheet();

        $activeSheet->setCellValue('A1', 'First name');
        $activeSheet->setCellValue('B1', 'Surname');
        $activeSheet->setCellValue('C1', 'Department');
        $activeSheet->setCellValue('D1', 'Section');
        $activeSheet->setCellValue('E1', 'Session');
        $activeSheet->setCellValue('F1', 'Date');
        $activeSheet->setCellValue('G1', 'Year');
        $activeSheet->setCellvalue('H1', 'Trainer');

//$query = $db->query("SELECT * FROM products");

        $query = unserialize($_POST['thedata']);


for($i=0;isset($query[$i]);$i++) { 
	$i2 = $i+2;
	$activeSheet->setCellValue('A'.$i2 , $query[$i]['First name']);
        $activeSheet->setCellValue('B'.$i2 , $query[$i]['Surname']);
        $activeSheet->setCellValue('C'.$i2 , $query[$i]['Department']);
        $activeSheet->setCellValue('D'.$i2 , $query[$i]['Section']);
        $activeSheet->setCellValue('E'.$i2 , $query[$i]['Session']);
        $activeSheet->setCellValue('F'.$i2 , $query[$i]['Date']);
        $activeSheet->setCellValue('G'.$i2 , $query[$i]['Year']);
        $activeSheet->setCellValue('H'.$i2 , $query[$i]['Trainer']);


}
/*if($query->num_rows > 0) {
echo 'test';
    $i = 2;
    while($row = $query->fetch_assoc()) {
        $activeSheet->setCellValue('A'.$i , $row['First name']);
        $activeSheet->setCellValue('B'.$i , $row['Surname']);
        $activeSheet->setCellValue('C'.$i , $row['Department']);
        $activeSheet->setCellValue('D'.$i , $row['Section']);
        $activeSheet->setCellValue('E'.$i , $row['Session']);
        $activeSheet->setCellValue('F'.$i , $row['Date']);
        $activeSheet->setCellValue('G'.$i , $row['Year']);
        $activeSheet->setCellValue('H'.$i , $row['Trainer']);
        $i++;
    }
}*/

$filename = 'training.xlsx';

header('Content-Type: application/vnd.ms-excel');
header('Content-Disposition: attachment;filename='. $filename);
header('Cache-Control: max-age=0');
$Excel_writer->save('php://output');
}


?>

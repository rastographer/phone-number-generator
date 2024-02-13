<?php
require 'vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

$spreadsheet = new Spreadsheet();
$sheet = $spreadsheet->getActiveSheet();

$phoneNumbers = json_decode(file_get_contents('php://input'));

$sheet->setCellValue('A1', 'Phone Numbers');
foreach ($phoneNumbers as $key => $number) {
    $sheet->setCellValue('A' . ($key + 2), $number);
}

$t = time();
$rand = "PN" . rand(1000, 9999) . "_";
$filename = $rand . date("Y-m-d", $t) . ".xlsx";

header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
header('Content-Disposition: attachment;filename='.$filename);
header('Cache-Control: max-age=0');

$writer = new Xlsx($spreadsheet);
$writer->save('php://output');
exit; // Terminate the script to prevent further output

<?php

include_once('../config/config.inc.php');
//include_once('init.php');
include_once ('../autoload.php');

set_time_limit(0);

$file = __DIR__ . '/orange_catalog_2022.xlsx';
$fileImages = __DIR__ . '/images.csv';
$fileOut = __DIR__ . '/oazis.xlsx';

$inputFileType = \PhpOffice\PhpSpreadsheet\IOFactory::identify($file);
$reader = \PhpOffice\PhpSpreadsheet\IOFactory::createReader($inputFileType);
$reader->setReadDataOnly(false);
$spreadsheet = $reader->load($file);
$sheet = $spreadsheet->getActiveSheet();
$worksheet = $sheet->toArray();
$highestRow = $sheet->getHighestDataRow();

$images = [];
if (($handle = fopen($fileImages, "r")) !== FALSE) {
    while (($data = fgetcsv($handle, 1000, ";")) !== FALSE) {
        $key = trim($data[0]);
        array_shift($data);
        $images[$key] = $data;
    }
    fclose($handle);
}

for ($i = 1; $i < $highestRow; $i++) {
    $key = trim(mb_strtolower($worksheet[$i][4]));
    if (array_key_exists($key, $images)) {
        $worksheet[$i][26] = implode(';', $images[$key]);
    }
}
$sheet->fromArray($worksheet, NULL, 'A1');
$writer = \PhpOffice\PhpSpreadsheet\IOFactory::createWriter($spreadsheet, "Xlsx");
$writer->save($fileOut);

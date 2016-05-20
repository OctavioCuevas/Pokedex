<?php
require_once("/EXCEL/Classes/PHPExcel.php");
require_once("datosExcel.php");

$json = generaDatos();

$objPHPExcel = new PHPExcel();

$objPHPExcel->getProperties()->setCreator("Pokedex");
$objPHPExcel->getProperties()->setLastModifiedBy("Ash Ketchum");
$objPHPExcel->getProperties()->setTitle("Exportar Pokedex a Excel");
$objPHPExcel->getProperties()->setSubject("Lista de Pokemon");
$objPHPExcel->getProperties()->setDescription("Documento generado con PHPExcel");
$objPHPExcel->getProperties()->setCategory("reportes");

$celda = $objPHPExcel->setActiveSheetIndex(0);
$objPHPExcel->setActiveSheetIndex(0)->setCellValue('A1', 'Num.');
$objPHPExcel->setActiveSheetIndex(0)->setCellValue('B1', 'Nombre');
$objPHPExcel->setActiveSheetIndex(0)->setCellValue('C1', 'Tipo 1');
$objPHPExcel->setActiveSheetIndex(0)->setCellValue('D1', 'Tipo 2');
$objPHPExcel->setActiveSheetIndex(0)->setCellValue('E1', 'Evolución');

$j = 2;

for ($i=0; $i<=count($json)-1; $i++) {
	$celda->setCellValue('A'.$j,$json[$i]['numero']);
	$celda->setCellValue('B'.$j,$json[$i]['nombre']);
	$celda->setCellValue('C'.$j,$json[$i]['tipo1']);
	$celda->setCellValue('D'.$j,$json[$i]['tipo2']);
	$celda->setCellValue('E'.$j,$json[$i]['evolucion']);
	$j++;
}

$objPHPExcel->getActiveSheet()->setTitle('Pokemon');
$objPHPExcel->setActiveSheetIndex(0);


header('Content-Type: application/vnd.ms-excel');
header('Content-Disposition: attachment;filename="PokedexExcel.xls"');
header('Cache-Control: max-age=0');

$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel5');
$objWriter->save('php://output');
exit;
?>
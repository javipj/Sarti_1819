<?php
/*
Op1: creació pdf amb el contingut directe
Op2: creació pdf amb el contingut de la pàgina html
	no funciona per codi php
Op3: creació pdf a partir del buffer on tenim la pàgina web
	amb php inclòs
*/
	require_once("dompdf/autoload.inc.php");
//  Op3
//	require ("../crudPersona/crudPersonaTaula.php");
	use Dompdf\Dompdf;
//  Op1
	$html="Document de prova";

//  Op3
//	$html =  ob_get_clean();

	$dompdf = new DOMPDF();
	$dompdf->load_html($html);
// Op2
//$html = file_get_contents('../crudPersona/crudPersonaTaula.php');
	$dompdf->load_html($html);
	$dompdf->setPaper("A4","landscape");
 	$dompdf->render();

	$dompdf->stream("nombre_archivo.pdf");
/*
	//Donde guardar el documento
	$rutaGuardado = "pdf/";

	//Nombre del Documento.
	$nombreArchivo = "nombre_archivo.pdf";

	//Guardalo en una variable
	$output = $dompdf->output();

	file_put_contents( $rutaGuardado.$nombreArchivo, $output);
*/
?>


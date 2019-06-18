<?php
    require("funcions.php");
    require("consulta.php");
	require_once("dompdf/autoload.inc.php");
	use Dompdf\Dompdf;
	use Dompdf\Options;

    $dompdf = new DOMPDF();
    $html = "";
    $html =  ob_get_clean();
    /* $resultat = consulta();
    $nfilas = $resultat->num_rows;
    $i=0;
    if ($nfilas>0){
        $registre = mysqli_fetch_array($resultat, MYSQLI_ASSOC);
        $html=$html."<table>";
        $html=$html."<tr>";
        foreach ($registre as $key=>$col_value) {
            $html=$html."<th>$key</th>";
        }

        $html=$html."</tr>";

        do{
            $html=$html."<tr>";

            foreach ($registre as $key=>$col_value) {
                $html=$html."<td>$col_value</td>";
    
            }
            $html=$html."</tr>";  
            $registre = mysqli_fetch_array($resultat, MYSQLI_ASSOC);
            $i=$i+1;
        }while($i<$nfilas);
        $html=$html."</table>";
    } */

// Definimos el tamaño y orientación del papel que queremos.
    $dompdf->set_paper("A4", "portrait");
// Cargamos el contenido HTML en codificación utf8
    $dompdf->load_html(utf8_encode($html));
 	$dompdf->render();
/*
	$dompdf->stream("nombre_archivo.pdf");
 */
	//Donde guardar el documento
	$rutaGuardado = "pdf/";

	//Nombre del Documento.
	$nombreArchivo = "nombre_archivo.pdf";

	//Guardalo en una variable
	$output = $dompdf->output();

	file_put_contents( $rutaGuardado.$nombreArchivo, $output);
    echo "PDF creat";
?>
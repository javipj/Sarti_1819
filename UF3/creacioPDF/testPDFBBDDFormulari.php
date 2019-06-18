<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Page Title</title>
    <link rel="stylesheet" type="text/css" href="../css/estilo.css" />
    <?php
        require("funcions.php");
        require("consultaFormulari.php");
        require_once("dompdf/autoload.inc.php");
        use Dompdf\Dompdf;
        use Dompdf\Options;
    ?>
</head>
<body>
    <?php
        $nombre = "";
        $nombreErr = "";
        if (isset($_REQUEST['alta'])){
            if (empty($_REQUEST["nombre"])) {
                $nombreErr = "Es obligatorio informar el nombre.";
            }else{
                $nombre = test_input($_REQUEST["nombre"]);
            }
        } 
        if ($nombreErr ==""){
            if (isset($_REQUEST['alta'])){
                $dompdf = new DOMPDF();
                $html = "";
                $html =  ob_get_clean();
/*                 $resultat = busca($nombre);
                $nfilas = $resultat->num_rows;
                $registre = mysqli_fetch_array($resultat, MYSQLI_ASSOC);
                $i=0;
                if ($nfilas>0){
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
                    $html=$html."</table>"; */
                // Definimos el tamaño y orientación del papel que queremos.
                    $dompdf->set_paper("A4", "portrait");
                // Cargamos el contenido HTML en codificación utf8
                    $dompdf->load_html(utf8_encode($html));
                    $dompdf->render();
                //Donde guardar el documento
                    $rutaGuardado = "pdf/";
                //Nombre del Documento.
                    $nombreArchivo = $nombre.".pdf";
                //Guardalo en una variable
                    $output = $dompdf->output();
                
                    file_put_contents( $rutaGuardado.$nombreArchivo, $output);
                    echo "<p>Documento generado.</p>";
 
/*                 }else{
                    echo "<p>Client sense comandes.</p>";
                } */ 
                
            }
        }
        function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
    ?>
    <form  name="nombre" method="post" action="<?=htmlspecialchars($_SERVER["PHP_SELF"])?>">
        <label>Nombre:</label> 
        <input type="text" name="nombre" value="<?=$nombre?>">
        <span class="error">* <?=$nombreErr?></span>
        <br><br>
        <input id="alta" type="submit" name="alta" value="Buscar">
    </form>
</body>
</html>
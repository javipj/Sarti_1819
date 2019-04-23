<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Page Title</title>
    <link rel="stylesheet" type="text/css" href="main.css" />
    <script src="main.js"></script>
    <?php
        require("funcionsT.php");
    ?>
</head>
<body>
    <?php
    /* La funció només s'encarrega de validar si 
    la data enviada es una data correcta en format
    europeo. 
    Per poder treballar directament amb aquesta data
    amb el nostre idioma farem un setlocale()
    Per formatar treballarem amb la funció strftime()
    */
        $fecha_A = "19-03-2014"; // Amb - format europeo
        if (formatoEuropeo($fecha_A)){
            setlocale(LC_TIME, "es_ES");
        // https://www.php.net/manual/es/function.strftime.php
            echo ucfirst(strftime("%A, %d %B del %Y", 
                                    strtotime($fecha_A)));
        }else{
            print ("<p>La fecha $fecha_A no está en 
                    formato europeo</p>\n");
        }
    ?>
</body>
</html>


      

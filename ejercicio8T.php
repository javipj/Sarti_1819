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
    /*Passem a la funció dos paràmetres, un amb la data
    i un altra que ens diu el format amb el que va.
    Proposta de solució:
        Transformar la data a un array explode()
        Validar que els valors que li arriban son correctes
        tenint en compte el format passat checkdate()
        Formar la nova data concatenant els seus elements
    */
        $fecha_A = "30-12-2018";
        $pais = "EUR";
        $resultado = transformarFecha($fecha_A,$pais);
        print ("<p>Fecha inicial de $pais: $fecha_A</p>\n");
        print ("<p>Fecha transformada: $resultado</p>\n");
    ?>
</body>
</html>


      

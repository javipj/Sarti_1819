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
        $fecha_A = "30/12/2018";
        $pais = "EUR";
        $resultado = transformarFecha($fecha_A,$pais);
        print ("<p>Fecha inicial de $pais: $fecha_A</p>\n");
        print ("<p>Fecha transformada: $resultado</p>\n");
    ?>
</body>
</html>


      

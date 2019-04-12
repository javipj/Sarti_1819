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
        $fecha_A = ("2018-12-03");
        $fecha_B = ("03-12-2018 00:00:00");
        $resultado = fechaMayor($fecha_A,$fecha_B);
        print ("<p>$resultado</p>\n");
    ?>
</body>
</html>


      

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Page Title</title>
    <link rel="stylesheet" type="text/css" href="estiloT.css" />
    <script src="main.js"></script>
    <?php
        require("funcionsT.php");
    ?>
</head>
<body>
    <?php
        $str = "patata";
        if (validaPassword($str)){
            print ("<p class='correcto'>Todo correcto.</p>\n");
        }else{
            print ("<p class='error'>Contraseña incorrecta.</p>\n");
        }
    ?>
</body>
</html>


      

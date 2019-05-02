<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Page Title</title>
    <link rel="stylesheet" type="text/css" href="css/estilo.css" />
    <script src="main.js"></script>
</head>
<body>
    <?php
        $nombre = $apellidos = $edad = $email = $comentarios = "";
        $nombreErr = $edadErr = $emailErr="";
        if (isset($_REQUEST['submit'])){
            if (empty($_REQUEST["nombre"])) {
                $nombreErr = "Es obligatorio informar el nombre.";
            }else{
                $nombre = test_input($_REQUEST["nombre"]);
            }
            if (!empty($_REQUEST["apellidos"])) {
                $apellidos = test_input($_REQUEST["apellidos"]);
            }
            if (empty($_REQUEST["email"])) {
                $emailErr = "Es obligatorio informar el email.";
            }else{
                $email = test_input($_REQUEST["email"]);
                if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    $emailErr = "Formato de email incorrecto";
                }
            }
            if (!empty($_REQUEST["edad"])){           
                if (is_numeric($_REQUEST["edad"])){
                    $edad = test_input($_REQUEST["edad"]);
                    if ($edad<=18){
                        $edadErr = "La edad a informar ha de ser igual o superior a 18.";
                    }
                }else{
                    $edadErr = "La edad tiene que ser un número.";
                }
            }
            if (!empty($_REQUEST["comentarios"])) {
                $comentarios = test_input($_REQUEST["comentarios"]);
            }
        }
        function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
    ?>
            <form  method="post" action="<?=htmlspecialchars($_SERVER["PHP_SELF"])?>">
                <label>Nombre:</label> 
                <input type="text" name="nombre" value="<?=$nombre?>">
                    <span class="error">* <?=$nombreErr?></span>
                    <br><br>
                <label>Apellidos:</label> 
                <input type="text" name="apellidos" value="<?=$apellidos?>">
                    <br><br>
                <label>Edad:</label> 
                <input type="number" name="edad" value="<?=$edad?>">
                    <span class="error"> <?=$edadErr?></span>
                    <br><br>
                <label>Email:</label> 
                <input type="email" name="email" value="<?=$email?>">
                    <span class="error">* <?=$emailErr?></span>
                    <br><br> 
                <label>Comentarios:</label> 
                <textarea name="comentarios" rows="5" cols="40">
<?=$comentarios?>
                </textarea>
                <br><br>
                <input type="submit" name="submit" value="aceptar">
            </form>
</body>
</html>
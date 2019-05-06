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
        $usuario = $contrasena1 = $contrasena2 = "";
        $errUsu = $errCont1 = $errCont2 = $errors = "";
        if (isset($_REQUEST['submit'])){
            if (empty($_REQUEST["usuario"])) {
                $errUsu = "Es obligatorio informar el usuario.";
            }else{
                $usuario = test_input($_REQUEST["usuario"]);
            }            
            if (empty($_REQUEST["contrasena1"])) {
                $errCont1 = "Es obligatorio informar la contraseña.";
            }else{
                $contrasena1 = test_input($_REQUEST["contrasena1"]);
            }
            if (empty($_REQUEST["contrasena2"])) {
                $errCont2 = "Es obligatorio informar la contraseña.";
            }else{
                $contrasena2 = test_input($_REQUEST["contrasena2"]);
            }
            if (empty($errCont1) && empty($errCont2) && empty($errUsu)){
                if($contrasena1 != $contrasena2){
                    $errors=("<li>Las contraseñas no coinciden.</li>");
                }else{
                    $errors=valida_contrasena($contrasena1,$errors);
                    if (empty($errors)){
                        header('Location:ejercicio5_loginOK.php');
                    }
                }
            } 
        }

        function valida_contrasena($contrasena,$errors){
            if(strlen($contrasena) < 6 || strlen($contrasena) > 8){
                $errors = $errors . "<li>La contraseña debe tener entre 6 y 8 caracteres</li>";
            }
            if (!preg_match('/[a-z]/',$contrasena)){
                $errors = $errors . "<li>La contraseña debe tener al menos una letra minúscula</li>";
            }
            if (!preg_match('/[A-Z]/',$contrasena)){
                $errors = $errors . "<li>La contraseña debe tener al menos una letra mayúscula</li>";
            }
            if (!preg_match('/[0-9]/',$contrasena)){
                $errors = $errors . "<li>La contraseña debe tener al menos un caracter numérico</li>";
            }
            if (!preg_match('/[#~$%!]/',$contrasena)){
                $errors = $errors . "<li>La contraseña debe tener al menos un caracter de estos '#~$%!'</li>";
            }
            return $errors;
        }

        function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
    ?>
            <form  method="post" action="<?=htmlspecialchars($_SERVER["PHP_SELF"])?>">
                <label>Usuario:</label> 
                <input type="text" name="usuario" value="<?=$usuario?>">
                <span class="error">* <?=$errUsu?></span>
                <br><br>
                <label>Contraseña:</label> 
                <input type="password" name="contrasena1" value="<?=$contrasena1?>">
                <span class="error">* <?=$errCont1?></span>
                    <br><br>
                <label>Repite contraseña:</label> 
                <input type="password" name="contrasena2" value="<?=$contrasena2?>">
                <span class="error">* <?=$errCont2?></span>
                    <br><br>
                <input type="submit" name="submit" value="aceptar">
            </form>
            <?php
            if ($errors != ""){
                print ("<p>Error en la contraseña:</p>");
                print ("<ul>");
                print ($errors);
                print ("</ul>");
            }
            ?>
</body>
</html>
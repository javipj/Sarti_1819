<?php
$mostraF=true;
$missatge="";
if(isset($_REQUEST["submit"])){

    if($_REQUEST["username"]=="USER" &&
    $_REQUEST["password"]=="PASSWORD"){
        header('Location:ejercicio5_loginOK.php'); 
        $mostraF=false;          
    }else{
        $missatge="<p class='error'>Usuario o contraseña incorrecta.</p>\n";
    }
}
if ($mostraF){
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="css/estilo.css" />
    <title>Document</title>
</head>
<body>

    <?=$missatge?>


    <form  method="post">
    User:<input type="text" name="username" id=""><br>
    Pass:<input type="password" name="password" id=""><br>
    <input type="submit" name="submit" value="Enviar">


    
    
    </form>
</body>
</html>
<?php
}
?>
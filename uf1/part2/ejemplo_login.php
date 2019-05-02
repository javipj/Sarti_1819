<?php
session_start();


$error="";

if(isset($_SESSION["login"])){
    header('Location:ejemplo_privado.php');           
}

if(isset($_COOKIE["password"])){

    if($_COOKIE["password"]==1234){

        $_SESSION["login"]=true;
        $_SESSION["nom"]=$_COOKIE["nomusuari"];
        header('Location:ejemplo_privado.php');  

    }else{
        $error="credenciales incorrectas";
    }

         

}

if(isset($_REQUEST["submit"])){

        if($_REQUEST["password"]=="1234"){
            $_SESSION["login"]=true;
            $_SESSION["nom"]=$_REQUEST["username"];

            if(isset($_REQUEST["recordar"])&&$_REQUEST["recordar"]==1){
                setcookie("password",$_REQUEST["password"],time()+365*24*60*60);
                setcookie("nomusuari",$_REQUEST["username"],time()+365*24*60*60);

            }

            header('Location:ejemplo_privado.php');           
        }else{
            $error="Usuario o contraseña incorrecta.";
        }



}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <?=$error?>


    <form  method="post">
    User:<input type="text" name="username" id=""><br>
    Pass:<input type="password" name="password" id=""><br>
    Recordar: <input type="checkbox" name="recordar" value="1"><br>
    <input type="submit" name="submit" value="Enviar">


    
    
    </form>
</body>
</html>
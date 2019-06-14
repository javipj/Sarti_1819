<?php
session_start();

if(isset($_REQUEST["logout"])){
    session_destroy(); 
    setcookie("password",0,1);
    setcookie("nomusuari",0,1);

    header('Location:ejemplo_login.php');           

}




if(isset($_SESSION["login"])&&$_SESSION["login"]==true){
?>
Bienvenido......<?=$_SESSION["nom"]?>

<a href="ejemplo_privado.php?logout">[logout]</a>
<?php
}else{
    header('Location:ejemplo_login.php');           

}
?>
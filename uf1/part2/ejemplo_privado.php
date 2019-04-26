<?php
session_start();

if(isset($_REQUEST["logout"])){
    session_destroy(); 
    header('Location:ejemplo_login.php');           

}




if(isset($_SESSION["login"])){
?>
Bienvenido......<?=$_SESSION["nom"]?>

<a href="ejemplo_privado.php?logout">[logout]</a>
<?php
}else{
    header('Location:ejemplo_login.php');           

}
?>
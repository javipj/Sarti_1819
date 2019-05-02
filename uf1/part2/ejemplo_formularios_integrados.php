<?php
/*
mostrar un formulario para recoger un número, 

y ese número se debe procesar y mostrar por pantalla


Si se recibe el número
    mostrarlo
sino
    mostrar formulario para recoger ese número

*/

print_r($_REQUEST);
echo "<br>";

echo $_REQUEST["enviadsdsdsr"];


if(isset($_REQUEST["enviar"])){
    //mostrar el numero
    echo "El número es:".$_REQUEST["numero"];
}else{



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
    <form action="ejemplo_formularios_integrados.php" method="post">
        Dime un número:<input type="text" name="numero"><br>
        <input type="submit" name="enviar" value="enviar">
    </form>
</body>
</html>

<?php
    
}

?>
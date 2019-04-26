<?php
/*


EJERCICIO 1
• Formulario con campo de texto que:
- si se han enviado los datos se procesan,
- sino se muestra el formulario.

*/

if(isset($_REQUEST['frase'])){

    echo "La frase es: ".$_REQUEST['frase'];

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
    <form method="post">
        Dime algo:<input type="text" name="frase"><br>
        <input type="submit" value="Enviar">  
    
    </form>
</body>
</html>


<?php




}


?>

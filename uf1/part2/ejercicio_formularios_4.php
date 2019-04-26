<?php
require("funcions.php");
/*

- Aprovecharemos que tenemos funciones definidas para hacer una
calculadora que haga las diferentes operaciones de dos valores
- Formulario con dos campos de texto.
- 4 botones de envío de datos
*/


if(isset($_REQUEST["operacio"])){

    echo operacio($_REQUEST["v1"],$_REQUEST["v2"],$_REQUEST["operacio"]);
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
    <form  method="post">
        N1:<input type="number" name="v1" id=""><br>
        N2:<input type="number" name="v2" id=""><br>
        <input type="submit" name="operacio" value="+"><br>
        <input type="submit" name="operacio" value="-"><br>
        <input type="submit" name="operacio" value="*"><br>
        <input type="submit" name="operacio" value="/"><br>




    
    </form>
</body>
</html>

<?php

}

?>
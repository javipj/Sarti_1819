<?php

if(isset($_REQUEST["sexe"])){
    echo $_REQUEST["sexe"];
    echo "<br>";
    print_r($_REQUEST["opcions"]);

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
       Home:<input type="radio" name="sexe" value="Home"><br>
       Dona:<input type="radio" name="sexe" value="Dona" checked>


       <br>
       A<input type="checkbox" name="opcions[]" value="A">
       B<input type="checkbox" name="opcions[]"  value="B">
       C<input type="checkbox" name="opcions[]"  value="C">
       D<input type="checkbox" name="opcions[]" value="D" >


        <input type="submit" value="Enviar">
    </form>
</body>
</html>


    <?php

}

?>


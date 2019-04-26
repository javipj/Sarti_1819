<?php

if(isset($_REQUEST["submit"])){ 

    print_r($_FILES);
    echo "<br>^<br>";

    if(!is_uploaded_file($_FILES['fichero']['tmp_name'])){
        echo "otro error";
    }




    $dir_subida = 'imgs/';
    $fichero_subido = $dir_subida . time()."_".basename($_FILES['fichero']['name']);

    if (move_uploaded_file($_FILES['fichero']['tmp_name'], $fichero_subido)) {
        echo "El fichero es válido y se subió con éxito.\n";
        echo "<a href=\"$fichero_subido\">imagen</a>";
        echo "<img src=\"$fichero_subido\">";

    } else {
        echo "¡error!\n";
    }


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
    <form action="" method="post" enctype="multipart/form-data">
    
    <input type="file" name="fichero"><br>
    <input type="submit" name="submit" value="Enviar">
    
    </form>
</body>
</html>

<?php


}

?>


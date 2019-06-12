<?php

if(isset($_POST["Afegir"])){

    // check errors

     // dades de configuració
     $ip = 'localhost';
     $usuari = 'demoweb';
     $password = 'LeH6TAoqCiQEGY1h';
     $db_name = 'demoweb';

     // connectem amb la db
     $con = mysqli_connect($ip,$usuari,$password,$db_name);
     if (!$con)  {
         echo "Ha fallat la connexió a MySQL: " . mysqli_connect_errno();
             echo "Ha fallat la connexió a MySQL: " . mysqli_connect_error();
     }

     $sql=" insert into coches (modelo,color) values ('".$_POST["modelo"]."','".$_POST["color"]."')  ";
     $resultat = mysqli_query($con,$sql) or die('Consulta fallida: ' . mysqli_error($con));

     //tot ok... 

     header("location:coches.php");


    echo "alguna cosa";
}elseif(isset($_POST["Modificar"])){

      // dades de configuració
      $ip = 'localhost';
      $usuari = 'demoweb';
      $password = 'LeH6TAoqCiQEGY1h';
      $db_name = 'demoweb';
 
      // connectem amb la db
      $con = mysqli_connect($ip,$usuari,$password,$db_name);
      if (!$con)  {
          echo "Ha fallat la connexió a MySQL: " . mysqli_connect_errno();
              echo "Ha fallat la connexió a MySQL: " . mysqli_connect_error();
      }

      $sql=" update coches set modelo='".$_POST["modelo"]."',color='".$_POST["color"]."'  where id=".$_POST["id"];
      $resultat = mysqli_query($con,$sql) or die('Consulta fallida: ' . mysqli_error($con));
      header("location:coches.php");





}


else{

    $accio="Afegir";
    $modelo="";
    $color="";

    if(isset($_GET["id"])){
        $accio="Modificar";

         // dades de configuració
         $ip = 'localhost';
         $usuari = 'demoweb';
         $password = 'LeH6TAoqCiQEGY1h';
         $db_name = 'demoweb';

         // connectem amb la db
         $con = mysqli_connect($ip,$usuari,$password,$db_name);
         if (!$con)  {
             echo "Ha fallat la connexió a MySQL: " . mysqli_connect_errno();
                 echo "Ha fallat la connexió a MySQL: " . mysqli_connect_error();
         }

         $sql="select * from coches where id=".$_GET["id"];
         $resultat = mysqli_query($con,$sql) or die('Consulta fallida: ' . mysqli_error($con));
         $registre = mysqli_fetch_array($resultat, MYSQLI_ASSOC);
         $modelo=$registre["modelo"];
         $color=$registre["color"];









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
    <form method="post">
        Modelo:<input type="text" name="modelo" value="<?=$modelo?>" id="modelo"><br>
        Color:<input type="text" name="color" value="<?=$color?>" id="color"><br>
        <input type="submit" value="<?=$accio?>" name="<?=$accio?>">
        <input type="hidden" name="id" value="<?=$_GET["id"]?>">
    
    
    
    </form>
</body>
</html>


<?php

}

?>
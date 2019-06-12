<?php

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


 $sql = 'delete from coches where id='.$_GET["id"];
 $resultat = mysqli_query($con,$sql) or die('Consulta fallida: ' . mysqli_error($con));
 header("location:coches.php");



?>

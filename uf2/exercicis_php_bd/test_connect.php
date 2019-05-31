<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php


// dades de configuració
$ip = 'localhost';
$usuari = 'alumne';
$password = 'alumne';
$db_name = 'empresa';

// connectem amb la db
$con = mysqli_connect($ip,$usuari,$password,$db_name);
if (!$con)  {
       echo "Ha fallat la connexió a MySQL: " . mysqli_connect_errno();
         echo "Ha fallat la connexió a MySQL: " . mysqli_connect_error();
}else{
    echo "todo ha ido bien<br>";
}

$sql = 'SELECT * FROM EMPLEATS where edat > '.$_GET["edat"];
$resultat = mysqli_query($con,$sql) or die('Consulta fallida: ' . mysqli_error($con));


echo "<table>";
 while ($registre = mysqli_fetch_array($resultat, MYSQLI_ASSOC)){
    echo "<tr>";
    // només si volem mostrar tots els camps de la consulta
    echo "--->".$registre["nom"]."<----";
    foreach ($registre as $key=>$col_value) {
	     echo "<td>($key)$col_value</td>";
         
    }
    echo "</tr>";
}
echo "</table>";










mysqli_close($con);



?>
</body>
</html>
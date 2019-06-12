<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <a href="add.php">Afegir</a>
    <table>
        <tr>
            <td>id</td>
            <td>modelo</td>
            <td>color</td>
            <td>edit</td>
            <td>delete</td>
        </tr>

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


            $sql = 'SELECT * FROM coches';
            $resultat = mysqli_query($con,$sql) or die('Consulta fallida: ' . mysqli_error($con));


            while ($registre = mysqli_fetch_array($resultat, MYSQLI_ASSOC)){
                echo "<tr>";
                    echo "<td>".$registre["id"]."</td>";
                    echo "<td>".$registre["modelo"]."</td>";
                    echo "<td>".$registre["color"]."</td>";
                    echo "<td><a href=\"add.php?id=".$registre["id"]."\">edit</a></td>";
                    echo "<td><a href=\"del.php?id=".$registre["id"]."\"   onclick=\"if(!confirm('¿Estás seguro?')){return false;} \"  >del</a></td>";              
                echo "</tr>";
            }

        ?>

    </table>
</body>
</html>
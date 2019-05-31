<?php
function checklogin($username,$password){

    $retorna=false;
    /*

        obrir connexió a la db
        fer consulta amb les credencials
        comprovar que ha tornat UN resultat

    */

    // dades de configuració
    $ip = 'localhost';
    $usuari = 'alumne';
    $pass = 'alumne';
    $db_name = 'test45';



    // connectem amb la db
    $con = mysqli_connect($ip,$usuari,$pass,$db_name);
    if (!$con)  {
        echo "Ha fallat la connexió a MySQL: " . mysqli_connect_errno();
            echo "Ha fallat la connexió a MySQL: " . mysqli_connect_error();
    }else{
        echo "todo ha ido bien<br>";
    }

    $sql = 'SELECT * FROM usuaris where username="'.$username.'" and password=md5("'.$password.'")     ';
    $resultat = mysqli_query($con,$sql) or die('Consulta fallida: ' . mysqli_error($con));
    mysqli_close($con);

   
    if($resultat->num_rows==1){
        $retorna=true;
    }

    return $retorna;
}


function newuser($nom){


    // dades de configuració
    $ip = 'localhost';
    $usuari = 'alumne';
    $pass = 'alumne';
    $db_name = 'test45';



    // connectem amb la db
    $con = mysqli_connect($ip,$usuari,$pass,$db_name);
    if (!$con)  {
        echo "Ha fallat la connexió a MySQL: " . mysqli_connect_errno();
            echo "Ha fallat la connexió a MySQL: " . mysqli_connect_error();
    }

    $sql = "insert into usuaris (username,password) values ('$nom',md5('1234') )";
    $resultat = mysqli_query($con,$sql) or die('Consulta fallida: ' . mysqli_error($con));
    mysqli_close($con);





}
?>
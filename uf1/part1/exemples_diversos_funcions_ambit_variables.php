<?php

function f1($parametro1,$parametro2="NOLOSE",$parametro3="NOLOSE2"){

    $respuesta="Hola ".$parametro1." ".$parametro2." ".$parametro3;

    return $respuesta;
}





$respuestadelafuncion="";
echo "<br>Antes de la llamada:$respuestadelafuncion";
$respuestadelafuncion=f1("Javi","Puit","Juste");
echo "<br>Despues de la llamada: $respuestadelafuncion";
echo "<br>Despues de la llamada: ".f1("Javi","Juste");

echo "<br><br>";

$n="Javi";

function f2($nombre){
    global $n;
    $n="modificar";
    return $nombre." ".$n;
}

function f3(){
    $n="otra cosa";
    return $n;
}




echo "<br>antes de la llamada: $n";
echo "<br>la llamada:".f2("Javi");
echo "<br>Después de la llamada: $n";
echo "<br>Llamada f3:".f3();
echo "<br>El primer javi:".$n;

echo "<br><br>";
echo "<br> f2 con n:".f2($n);
echo "<br> f2 con Javi:".f2("Javi");
echo "<br> f2 con Javier".f2("Javier");
echo "<br> f2 con n:".f2($n);


echo "<br>";
echo (2+2);
echo "<br>";
$cadena="echo (2+2);";
echo $cadena;
echo "<br>";
eval($cadena);




?>

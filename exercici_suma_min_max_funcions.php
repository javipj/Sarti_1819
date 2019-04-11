<?php

function generaarray($longitud){

    $numeros=array();
    for($i=0;$i<$longitud;$i++){
            $numeros[]=rand(0,100);
    }
    return $numeros;
}
function _max($array){


    
}
function _min($array){}
function _suma($array){}

$numeros=generaarray(10);
echo "<br>El max es "._max($numeros);
echo "<br>El min es "._min($numeros);
echo "<br>La suma es "._suma($numeros);



?>

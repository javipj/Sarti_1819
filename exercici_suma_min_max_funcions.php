<?php

function generaarray($longitud){

    $numeros=array();
    for($i=0;$i<$longitud;$i++){
            $numeros[]=rand(0,100);
    }
    return   $numeros;
}
function _max($array){
    $max=$array[0];
    foreach($array as $numero){
        if($numero>$max) $max=$numero;
    }
    return $max;

}
function _min($array){
    $min=$array[0];
    foreach($array as $numero){
        if($numero<$min) $min=$numero;
    }
    return $min;
}
function _suma($array){
    $sum=0;
    foreach($array as $numero){
        $sum+=$numero;
    }
    return $sum;
}


$numeros=generaarray(10);
print_r($numeros);
echo "<br>El max es "._max($numeros);
echo "<br>El min es "._min($numeros);
echo "<br>La suma es "._suma($numeros);



?>

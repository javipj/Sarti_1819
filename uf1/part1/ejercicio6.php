<?php

/*
Función que dado un string :
    -Devuelve la letra que más aparece
    -Devuelve la letra que menos aparece

    usar: 
        array_count_values --> de un array retorna la frecuencia de cada carácter
           --> https://www.php.net/manual/es/function.array-count-values.php
        str_split --> string to array
           --> https://www.php.net/manual/es/function.str-split.php
    alternativas:
        count_chars:
           --> https://www.php.net/manual/es/function.count-chars.php

*/


function letraquemasymenosaparece($cadena){

    $frec=array_count_values(str_split($cadena));

    
    /*

    ('e'=>5,'d'=>2,'o'=>8 )
    (a,b,c)
    (2,3,4,5)

    $frec[0]

    */
/*    
    
    $max=$freq[array_key_first($freq)];
    $min=$freq[array_key_first($freq)]; */

    $max=0;
    $min=strlen($cadena);

    foreach($frec as $value){
        if($value>$max) $max=$value;
        if($value<$min) $min=$value;
    }


    $letrasmax=array();
    $letrasmin=array();

    foreach($frec as $letra=>$repeticiones){
        if($repeticiones==$max){
            $letrasmax[]=$letra;
        }
        if($repeticiones==$min){
            $letrasmin[]=$letra;
        }
    }



    return array($letrasmax,$letrasmin);

  //  return array("letrasqueMASaparecen"=>$letrasmax,"letrasqueMENOSaparecen"=>$letrasmin);


}



$resultado=letraquemasymenosaparece("hhHoooolllaajjaaammmmm");

print_r($resultado);

echo "<br>Las letras que más aparecen son:";

foreach($resultado[0] as $value){
    echo "<br>".($value);
}


echo "<br>Las letras que menos aparecen son:";

foreach($resultado[1] as $value){
    echo "<br>".$value;
}

/* echo "<br>Las letras que más aparecen son:";

foreach($resultado['letrasqueMASaparecen'] as $value){
    echo "<br>".($value);
}


echo "<br>Las letras que menos aparecen son:";

foreach($resultado['letrasqueMENOSaparecen'] as $value){
    echo "<br>".$value;
} */

?>
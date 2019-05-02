<?php
/*

Con el ejercicio anterior:
- muestra la cadena que se envía (como antes).
- Nos dice si todas las palabras de la cadena están
encadenadas:
Bicicleta tambor oruga - > SI
Hola que tal -> NO

*/


if(isset($_REQUEST['frase'])){

    echo "La frase es: ".$_REQUEST['frase'];

    /*

        - Se recibe una frase
        - Se obtienen las palabras de la frase
        - Para cada par de palabras:
            - check que:
                los 2 últimos carácteres de la 1º palabra del par
                        coincidan
                los 2 primeros carácteres de la 2º palabra del par

                Si no coinciden ---> LA FRASE NO ES ENCADENADA
                Si coinciden --> HAY OPCIONES QUE SEA ENCADENADA
        - Si salgo del "para" y la frase NO es encadenada
            ----> ENCADENADA
    */

    $encadenada=true;
    $lafrase=$_REQUEST['frase'];
    $palabras=explode(' ',$lafrase);
    
    echo "<br>";
    print_r($palabras);
    

    for($i=0;$i<count($palabras)-1;$i++){
        $primeraPalabraDelPar=$palabras[$i];
        $segundaPalabraDelPar=$palabras[$i+1];

        $dosultimoscaracteres=substr($primeraPalabraDelPar,-2);
        $dosprimeroscaracteres=substr($segundaPalabraDelPar,0,2);

        if($dosultimoscaracteres!=$dosprimeroscaracteres){
            $encadenada=false;
            break;
        }


    }

    if($encadenada){
        echo "<br>La frase está encadenada";
    }else{
        echo "<br>La frase no está encadenada";
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
    <form method="post">
        Dime algo:<input type="text" name="frase"><br>
        <input type="submit" value="Enviar">  
    
    </form>
</body>
</html>


<?php




}


?>

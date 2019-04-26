<?php

function test(){
    return "funciona";
}

function suma($a,$b){
    return $a+$b;
}

function operacio($a,$b,$o){

    $string = "a $o b";

    $result = eval('return ' . preg_replace('/([a-zA-Z0-9])+/', '\$$1', $string) . ';');

    return $result;
}


?>
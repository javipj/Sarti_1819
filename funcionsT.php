<?php
   function fechaMayor($fecha1,$fecha2){
   //   $fecha1 = strtotime(date("d-m-Y H:i:00",time()));
      $fecha1 = strtotime($fecha1);
      $fecha2 = strtotime($fecha2);
	
      if($fecha1 > $fecha2){
         $comparacion = "La fecha1 es mayor a la fecha2.";
      }elseif($fecha1 < $fecha2){
         $comparacion = "La fecha1 es menor a la fecha2.";
      }else{
         $comparacion = "La fecha1 es igual a la fecha2.";
      }
      //print ("<p>fecha1: $fecha1</p>\n");
      //print ("<p>fecha2: $fecha2</p>\n");

      return $comparacion;
   }

   function transformarFecha($fecha,$regio){
      $valores = explode('/', $fecha);
      if(count($valores) == 3 
         && checkdate($valores[1], $valores[0], $valores[2] )
         && $regio=="EUR"){
         // Formato europeo, pasar a eeuu
         
         $newDate = $valores[1].'/'.$valores[0].'/'.$valores[2];

      }elseif(count($valores) == 3 
               && checkdate($valores[0], $valores[1], $valores[2])
               && $regio=="EEUU"){
         // Formato eeuu, pasar a europeo
         
         $newDate = $valores[1].'/'.$valores[0].'/'.$valores[2];

      }else{
         $newDate = "Fecha incorrecta";
      }
      return $newDate;
   }

   function formatoEuropeo($fecha){
      $valores = explode('-', $fecha);
      if(count($valores) == 3 && checkdate($valores[1], $valores[0], $valores[2])){
         return true;
       }
      return false;
   }

   function validaPassword($valor){
      $contraseña = "11a5b35f9b1bb15fd3b431d7489ffbc8";
      if(md5(sha1($valor))==$contraseña){
         return true;
       }
      return false;
   }
?>

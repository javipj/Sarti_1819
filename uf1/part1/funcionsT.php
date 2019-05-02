<?php
   function fechaMayor($fecha1,$fecha2){
   //   $fecha1 = strtotime(date("d-m-Y H:i:00",time()));
      $fecha1 = strtotime($fecha1);
      $fecha2 = strtotime($fecha2);
	
      if($fecha1 > $fecha2){
         $comparacion = "La fecha1/A es mayor a la fecha2/B.";
      }elseif($fecha1 < $fecha2){
         $comparacion = "La fecha1/A es menor a la fecha2/B.";
      }else{
         $comparacion = "La fecha1/A es igual a la fecha2/B.";
      }
      //print ("<p>fecha1: $fecha1</p>\n");
      //print ("<p>fecha2: $fecha2</p>\n");

      return $comparacion;
   }

   function transformarFecha($fecha,$regio){
      if ($regio=="EUR"){
         $valores = explode('-', $fecha);
         if(count($valores) == 3){
            if (checkdate($valores[1], $valores[0], 
            $valores[2] )){ 
            // Formato europeo, pasar a eeuu

               $newDate = $valores[1].'/'.$valores[0].'/'.$valores[2];
            }else{
               $newDate = "Fecha incorrecta";
            }
         }else{
            $newDate = "No es una fecha";
         }
      }elseif($regio=="EEUU"){
         $valores = explode('/', $fecha);
         if(count($valores) == 3){
            if(checkdate($valores[0], $valores[1], $valores[2])){
         // Formato eeuu, pasar a europeo
         
               $newDate = $valores[1].'-'.$valores[0].'-'.$valores[2];
            }else{
               $newDate = "Fecha incorrecta";
            }
         }else{
            $newDate = "No es una fecha";
         }
      }      
      return $newDate;
   }

   function formatoEuropeo($fecha){
      $resultado=false;
      $valores = explode('-', $fecha);
      if(count($valores) == 3 && 
         checkdate($valores[1], $valores[0], 
         $valores[2])){
         $resultado=true;
      }
      return $resultado;
   }

   function validaPassword($valor){
      $valida=false;
      $contraseña = "11a5b35f9b1bb15fd3b431d7489ffbc8";
      if(md5(sha1($valor))==$contraseña){
         $valida=true;
       }
      return $valida;
   }
?>

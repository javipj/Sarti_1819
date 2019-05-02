<!DOCTYPE html>
<html>
<head>
   <title>Tabla de multiplicar</title>
   <link rel="stylesheet" type="text/css" href="estiloT.css">
</head>

<body>

<h1>Tabla de multiplicar</h1>

<?php
   for ($n=0; $n<=10; $n++){
      print ("<P>La tabla de multiplicar del $n es:</P>");
      print ("<table>");
      print ("<tr>");
      print ("   <th>Multiplicacio</th>");
      print ("   <th>Resultat</th>");
      print ("</tr>");
      for ($i=1; $i<=10; $i++){
         print ("<tr'>");
         print ("   <td>$n x $i = </td>");
         print ("   <td>" . $n*$i . "</td>");
         print ("</tr>");
      }
      print ("</table>");
   }
?>

</body>
</html>
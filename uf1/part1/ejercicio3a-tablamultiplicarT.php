<!DOCTYPE html>
<html>
<head>
   <title>Tabla de multiplicar</title>
   <link rel="stylesheet" type="text/css" href="estiloT.css">
</head>

<body>

<h1>Tabla de multiplicar</h1>

<?php
   for ($n=0; $n<=10;$n++){
      print ("<P>La tabla de multiplicar del $n es:</P>\n");
      for ($i=1; $i<=10; $i++)
         print ("<li>$n x $i = " . $n*$i . "</li>\n");
      print ("<br>");
   }

?>

</body>
</html>

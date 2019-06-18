<?php
    if (isset($_REQUEST['alta'])){
        if (empty($_REQUEST["nombre"])) {
            $nombreErr = "Es obligatorio informar el nombre.";
        }else{
            $nombre = test_input($_REQUEST["nombre"]);
            $resultat = busca($nombre);
            $nfilas = $resultat->num_rows;
            $registre = mysqli_fetch_array($resultat, MYSQLI_ASSOC);
            $i=0;
            if ($nfilas>0){
                echo "<table>";
                echo "<tr>";
                foreach ($registre as $key=>$col_value) {
                    echo "<th>$key</th>";
                }
                    
                echo "</tr>";
                    
                do{
                    echo "<tr>";
                    
                    foreach ($registre as $key=>$col_value) {
                        echo "<td>$col_value</td>";
                
                    }
                    echo "</tr>";  
                    $registre = mysqli_fetch_array($resultat, MYSQLI_ASSOC);
                    $i=$i+1;
                }while($i<$nfilas);
                echo "</table>";

            }else{
                echo "<p>Client sense comandes.</p>";
            }
        }
    }
?>
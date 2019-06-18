<?php
    $resultat = consulta();
    $nfilas = $resultat->num_rows;
    $i=0;
    if ($nfilas>0){
        $registre = mysqli_fetch_array($resultat, MYSQLI_ASSOC);
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
    }
?>
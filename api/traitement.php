<?php
function tableMultiplication($lignes, $colonnes){
    echo "<table border='1' cellpadding='5' cellspacing='0'>";

    for($i = 1; $i <= $lignes; $i++){
        echo "<tr>";

        for($j = 1; $j <= $colonnes; $j++){
            echo "<td>" . ($i * $j) . "</td>";
        }

        echo "</tr>";
    }

    echo "</table>";
}


?>
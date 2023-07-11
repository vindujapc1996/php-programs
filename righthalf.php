<?php
 $n = 8;
    for($i = 0; $i < $n; $i++) {
        
        for($j = 1; $j < $n- $i; $j++) {
            echo "&nbsp;&nbsp;";
        }
        for($k = 0; $k <= $i; $k++) {
            echo "*";
        }
        echo "<br>";
    }
?>
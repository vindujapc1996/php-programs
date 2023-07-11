<?php
    $size = 7;
    for($i = 0; $i < $size; $i++) {
        for($j = 0; $j < $size - $i; $j++) {
            echo "*";
        }
        echo "<br>";
    }
?>
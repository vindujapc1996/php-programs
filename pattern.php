<?php
$n = 6;
for ($i = 1; $i <= $n; $i++) {
    for ($j = 1; $j <= $n; $j++) {
        if ($j <= ($n - $i)) {
            echo " ";
        } else {
            echo "*";
        }
    }
    echo "</br>";
}
?>

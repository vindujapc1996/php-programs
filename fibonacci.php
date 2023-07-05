<?php
$a = 0;  
$b = 0;  
$c = 1;  
echo "<h3>Fibonacci series for first 12 numbers: </h3>";  
echo "\n";  
echo $b.' '.$c.' ';  
while ($a < 10 )  
{  
    $d = $c + $b;  
    echo $d.' ';  
    $b = $c;  
    $c = $d;  
    $a = $a + 1;  
}
?>
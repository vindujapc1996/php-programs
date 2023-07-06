<h2>swapping two numbers without using third variable:-</h2>
<?php
echo "before swapping:- <br>";
$a=60;
$b=70;
echo "a=$a . b=$b . <br>";

$a=$a+$b;
$b=$a-$b;
$a=$a-$b;
echo "after swapping:- <br>";
echo "a=$a . b=$b";
?>
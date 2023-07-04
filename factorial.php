<h2>factorial of a number:-</h2>
<?php
$a=6;
$fact=1;
for($i=1;$i<=$a;$i++)
{
    $fact=$fact*$i;
}
echo "Factorial of $a is $fact.";

?>
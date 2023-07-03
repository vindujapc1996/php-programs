<?php
$number = 11;  
$count=0;  
for ( $a=1; $a <= $number; $a++)  
{  
if (($number % $a)==0)  
{  
$count++;  
}  
}  
if ($count < 3)  
{  
echo "$number is a prime number.";  
}
else
{
echo "$number is not a prime number."; 
}
?>

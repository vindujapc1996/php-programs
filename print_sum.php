<?php  
$a = 14597;  
$b=0; $c=0;  
  for ($i =0; $i<=strlen($a);$i++)  
 {  
  $c=$a%10;  
   $b = $b + $c;  
   $a=$a/10;  
  }  
 echo "Sum of digits 14597 is $b";  
 ?>  

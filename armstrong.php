 <?php
$n=371;
$sum=0;
$i=$n; 
while($i!=0)
{
$a=$i%10;
$sum=$sum+$a*$a*$a;
$i=$i/10;
} if($n==$sum)
{
echo "$n is an Armstrong Number.";
} else
{
echo "$n is not an Armstrong Number.";
}
?> 
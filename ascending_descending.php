<?php
echo "<h2>elements into ascending order:-</h2>";
$colors=array("red","green","blue","yellow");
sort($colors);
$arrlength = count($colors);
for($x = 0; $x < $arrlength; $x++) {
  echo $colors[$x];
  echo "<br>";
}
echo"<h2>elements into descending order:-</h2>";
$numbers=array(4,16,37,2,9,27);
rsort($numbers);
$arrlength=count($numbers);
for($x=0;$x<$arrlength;$x++){
echo $numbers[$x];
echo "<br>";
}
?>
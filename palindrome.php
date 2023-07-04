<h2>given number is palindrome or not :-</h2>
<?php
$input = 1235321;
$num = $input;
$reverse = 0;

while ($num != 0) {
    $remainder = $num % 10;
    $reverse = $reverse * 10 + $remainder;
    $num = (int)($num / 10);
}

if ($input == $reverse) {
    echo "$input is a palindrome number";
} else {
    echo "$input is not a palindrome";
}
?>

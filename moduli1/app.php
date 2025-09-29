<?php
#phpinfo();

$x = "Data";
print_r($x);
echo "<br>";
$y = 5;
echo gettype($y) . "<br>";

$z = 5.2;
echo gettype($z) . "<br>";

$s = "Hello";
echo gettype($s) . "<br>";

function test()
{
    echo "blabla";
}

test();
echo "<br>";

function sum()
{
    $value = 120 + 20;
    echo $value;
}

sum();
echo "<br>";

function mymax($x, $y)
{
    if ($x > $y) {
        return ($x);
    } else {
        return ($y);
    }
}

$a = 5;
$b = 10;

$game = mymax($a, $b);

echo "The max of $a and $b is $game";

<?php
/*
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


$u = 5;

function local() {
    $x = 7;
    echo $x;
}

local();
echo "\n, $u";

$x = 5;
$y = 6;
function sum() {
    global $x, $y;
    $z = $x + $y;
}

sum();
echo $y;
*/

$sport = ["Volleyball", "Handball"];
echo $sport[0];
echo "<br>";
echo end($sport);
echo "<br>";
echo count($sport);
echo "<br>";
$food = array("Hamburger", "Drink", "Chesse");
for ($i=0; $i < 3; $i++) { 
    echo $food[$i], "\n";

}

array_push($food, "apple");
echo "<br>";
var_dump($food);
echo "<br>";
array_pop($food);
var_dump($food);
echo "<br>";
array_unshift($food, "china food");
var_dump($food);
echo "<br>";
array_shift($food);
var_dump($food);
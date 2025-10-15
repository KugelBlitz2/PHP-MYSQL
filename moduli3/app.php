<?php

//$file = fopen("file.csv", "w");


$test = "fille.txt";

$test2 = fopen($test, "r");

$test3 = filesize($test);

$test4 = fread($test2, $test3);

echo $test4;

$brug = fopen("fille.txt", "r");

while (!feof($brug)) {
    echo fgets($brug). "<br>";
}

fclose($brug);

$blob = fopen("file.csv", "w");

$orrrrg = "ibhorthtbhntyyy";

fwrite($blob, $orrrrg);
?>
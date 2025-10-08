<?php
/*
$consoles = array(
    array("Nintendo Switch", "Japan", 138),
    array("Steam Deck", "USA", 11),
    array("ROG Ally Claw", "England", 5),
);

echo $consoles[0][0] . " Origin: " . $consoles[0][1] . " Units Sold: " . $consoles[0][2];
echo $consoles[1][0] . " Origin: " . $consoles[1][1] . " Units Sold: " . $consoles[1][2];
echo $consoles[2][0] . " Origin: " . $consoles[2][1] . " Units Sold: " . $consoles[2][2];

$something = array(
    array(1, 2, 3),
    array(1, 2, 3),
    array(1, 2, 3)
);

for ($i=0; $i < 4; $i++) { 
    for ($j=0; $j < 4; $j++) { 
        echo "Array $i Element $j <br>";
    };
};
*/

$grade = array(
    "Math" => 5,
    "History" => 5,
    "English" => 5
);

echo "Math grade is " . $grade["Math"];
echo "<br>";
foreach($grade as $subject => $grade) {
    echo "Subject: " . $subject, ", Grade: " . $grade;
    echo "<br>";      
}

?>
<?php 

$host = "localhost";
$user = "root";
$password = "";

try {
    $conn = new PDO("mysql:host=$host; , $user, $password");
    echo "Connect";
} catch (Exception $e) {
    echo "Not Connected";
};

?>
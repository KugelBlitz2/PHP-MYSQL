<?php 

$host = "localhost";
$user = "root";
$password = "";
$dbname = "db";

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname , $user, $password");
} catch (\Throwable $th) {
    echo "wuuorevhquoervhuirvbqeu";
}

?>
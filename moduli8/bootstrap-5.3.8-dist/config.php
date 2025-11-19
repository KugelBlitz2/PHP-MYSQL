<?php


session_start();
ini_set('display_errors', 1);
error_reporting(E_ALL);

$user   = "root";
$pass   = "";
$server = "localhost";
$dbname = "db"; 

try {
    $conn = new PDO("mysql:host=$server;dbname=$dbname;charset=utf8mb4", $user, $pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("DB connection failed: " . $e->getMessage());
}

?>
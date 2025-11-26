<?php

include_once __DIR__ . '/config.php';
ini_set('display_errors', 1);
error_reporting(E_ALL);


if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: signup.php');
    exit;
}

$name    = trim($_POST['name'] ?? '');
$surname = trim($_POST['surname'] ?? '');
$email   = trim($_POST['email'] ?? '');


if ($name === '' || $surname === '' || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    header('Location: signup.php');
    exit;
}

try {
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO users (name, surname, email) VALUES (:name, :surname, :email)";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':surname', $surname);
    $stmt->bindParam(':email', $email);
    $stmt->execute();

    $lastId = $conn->lastInsertId();
    $_SESSION['user'] = [
        'id' => $lastId,
        'name' => $name,
        'surname' => $surname,
        'email' => $email
    ];


    header('Location: dashboard.php');
    exit;
} catch (PDOException $e) {

    die('Database error: ' . $e->getMessage());
}
?>
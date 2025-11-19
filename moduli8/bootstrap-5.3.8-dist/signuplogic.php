<?php

include_once __DIR__ . '/config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit'])) {
    $name    = trim($_POST['name'] ?? '');
    $surname = trim($_POST['surname'] ?? '');
    $email   = trim($_POST['email'] ?? '');

    if ($name === '' || $surname === '' || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header('Location: signup.php');
        exit;
    }

    try {
        $sql = "INSERT INTO users (name, surname, email) VALUES (:name, :surname, :email)";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':surname', $surname);
        $stmt->bindParam(':email', $email);
        $stmt->execute();

        $lastId = $conn->lastInsertId();
        $_SESSION['user'] = ['id' => $lastId, 'name' => $name, 'surname' => $surname, 'email' => $email];

        header('Location: dashboard.php');
        exit;
    } catch (PDOException $e) {
        die('Database error: ' . $e->getMessage());
    }
} else {
    header('Location: signup.php');
    exit;
}

?>

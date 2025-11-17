<?php
include_once('config.php');

if (isset($_POST['submit'])) {

    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $email = $_POST['email'];

    $sql = "INSERT INTO users (name, surname, email) 
            VALUES (:name, :surname, :email)";
    $query = $conn->prepare($sql);

    $query->bindParam(':name', $name);
    $query->bindParam(':surname', $surname);
    $query->bindParam(':email', $email);

    if ($query->execute()) {
        echo "Data saved successfully!";
    } else {
        echo "Error saving data!";
    }
}
?>

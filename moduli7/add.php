<?php


    include_once("config.php");


    if(isset($_POST['submit'])){
        
        $name = $_POST['name'];
        $surname = $_POST['surname'];
        $email = $_POST['email'];


        $sql = "INSERT INTO users(name,surname,email) VALUES (:name, :surname, :email)";


        $sqlQuery = $conn->prepare($sql);


        $sqlQuery->bindParam(':name', $name);
        $sqlQuery->bindParam(':surname', $surname);
        $sqlQuery->bindParam(':email', $email);


        $sqlQuery->execute();


        echo "The user was added successfully!";
    }
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="POST">
    <input type="text" name="name" placeholder="name">
    <br>
    <input type="text" name="surname" placeholder="surname">
    <br>
    <input type="text" name="email" placeholder="email">
    <br>
    <button type="submit" name="submit">Submit</button>

    </form>

</body>
</html>
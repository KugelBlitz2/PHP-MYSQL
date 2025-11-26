<?php
include_once("config.php");

if (isset($_POST["submit"])) {
    $name = $_POST["name"];
    $username = $_POST["username"];
    $email = $_POST["email"];
    $tempPass = $_POST["tempPass"];
    $confirmPass = $_POST["confirmPass"];
}

if (empty($name) || empty($username) || empty($email) || empty($tempPass) || empty($confirmPass)) {
    echo "OHH no not working";
}

if($tempPass !== $confirmPass) {
    echo "Password does not match";
}

$password = password_hash($tempPass, PASSWORD_DEFAULT);

$sql = "INSERT INTO users (name, username, email, password, confirm_password, is_admin)
          VALUES (:name, :username, :email, :password, :confirm_password, :is_admin)";

$insertSql = $conn -> prepare($sql);

$is_admin = true;

$insertSql -> bindParam(":name", $name);
$insertSql -> bindParam(":username", $username);
$insertSql -> bindParam(":email", $email);
$insertSql -> bindParam(":password", $password);
$insertSql -> bindParam(":confirm_password", $password);
$insertSql -> bindParam(":is_admin", $is_admin);

$insertSql->execute();

header("Location: login.php");
?>
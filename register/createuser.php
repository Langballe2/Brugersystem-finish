<?php
include '../mysql/mydb.php';

$firstname = $_POST["firstname"];
$lastname = $_POST["lastname"];
$email = $_POST["email"];
$username = $_POST["username"];
$password = md5($_POST["password"]);

if (empty($firstname) || empty($lastname) || empty($email) || empty($username) || empty($password)){
    echo "Du skal udfylde alle felter";
} else {
    $stmt = $conn->prepare("INSERT INTO users (firstname, lastname, email, username, password)
VALUES (?,?,?,?,?)");

    $stmt->bind_param("sssss", $firstname, $lastname, $email, $username, $password);
    $stmt->execute();
    header("Location: /../index.php");
}
?>
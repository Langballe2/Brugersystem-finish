<?php
session_start();
include 'mysql/mydb.php';
$conn = dbcon();

$user = $_POST['user'];
$pass = $_POST['pass'];

$stmt = $conn->prepare("SELECT id, username, password, firstname FROM users WHERE username = ? LIMIT 1"); // Only check for one user and get all info
$stmt->bind_param("s", $user);
$stmt->execute();

if ($stmt->num_rows > 0) {
    $stmt->bind_result($id, $username, $password, $firstname);
    $stmt->close(); // Moved up to a more useful place, as $stmt isn't needed anymore

    if (password_verify($pass, $password)) // The correct way to verify a hashed password
    {
        header("refresh: 2; members.php");
        echo "Du er nu logget ind";
        $_SESSION['user_id'] = $id; // Makes it easier to get the user details later
        exit;
    }
}


header("refresh: 2; index.php");
echo "Forkert brugernavn eller password";
exit; // Make sure to stop parsing from here.
<?php
    session_start();
    include 'mysql/mydb.php';
    
    $user = $_POST['user'];
    $pass = md5($_POST['pass']);

    $stmt = $conn->prepare("SELECT username, password, firstname FROM users WHERE username = ? && password = ?");
    $stmt->bind_param("ss", $user, $pass);
    $stmt->execute();
    $stmt->bind_result($username, $password, $firstname);
    $stmt->fetch();
    
    if ($username == $user && $password == $pass) {
        header("refresh: 2; members.php");
        echo "Du er nu logget ind";
        $_SESSION['user'] = $user;
        
    } else {
        header("refresh: 2; index.php");
        echo "Forkert brugernavn eller password";
    }
    $stmt->close();
?>
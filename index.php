<?php
    session_start();
?>
<html>
    <head>
        <title>Forside</title>
    </head>
    <body>
        
        <form action="login.php" method="post">
            Username: <input type="text" name="user"><br>
            Password: <input type="password" name="pass"><br>
            <input type="submit" value="Login">
        </form>
        <a href="register/register.php">Registere</a>
        

    </body>
</html>
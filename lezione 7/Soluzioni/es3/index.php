<?php

    session_start();

    if(isset($_SESSION['ID'])) {
        header("location: areaPersonale.php");
    }

?>

<!DOCTYPE html>
<html lang="it-IT">
    <head>
        <title>Login</title>
        <meta charset="UTF-8">
    </head>

    <body>

        <h1>Login</h1>

        <form method="POST" action="login.php">
            <input type="text" placeholder="Indirizzo mail" name="mail" required><br><br>
            <input type="password" placeholder="Password" name="password" required><br><br>
            <input type="submit" value="Accedi">
        </form>

    </body>

    <style>

        body {
            text-align: center;
            margin: 10%;
        }

        h1 {
            margin-bottom: 2%;
        }

    </style>

</html>
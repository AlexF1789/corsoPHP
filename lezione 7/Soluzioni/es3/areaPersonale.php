<?php

    session_start();

    if(!isset($_SESSION['ID']))
        header("location: /");

?>
<!DOCTYPE html>
<html lang="it-IT">
    <head>
        <title>Area personale</title>
        <meta charset="UTF-8">
    </head>

    <body>

        <h1>Area personale</h1>

        <ul>

            <?php

                $campi = ['ID','cognome','nome','mail'];
                foreach($campi as $campo) {
                    echo "<li><b>$campo</b>: {$_SESSION[$campo]}</li>";
                }

            ?>

        </ul>

        <br><br>
        <a href="logout.php">logout</a>

    </body>

</html>
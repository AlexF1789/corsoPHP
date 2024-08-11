<?php

    require 'dati.php';

    if($_SERVER['REQUEST_METHOD']=="GET" && isset($_GET['fiume'])) {

        if(array_key_exists($_GET['fiume'],$dati)) {
            $dati_fiume = $dati[$_GET['fiume']];
        } else {
            echo "Fiume non trovato!";
            die;
        }

    } else {
        echo "Richiesta non valida!";
        die;
    }

?>

<!DOCTYPE html>
<html lang="it-IT">
    <head>
        <title>Fiume <?= $_GET['fiume'] ?></title>
        <meta charset="UTF-8">
    </head>

    <body>
        <h1>Fiume <?= $_GET['fiume'] ?></h1>

        <ul>
        <?php

            proprietaFiume($dati_fiume);

        ?>
        </ul>
    </body>
</html>
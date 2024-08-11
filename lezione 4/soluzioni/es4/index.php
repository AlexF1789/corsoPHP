<!DOCTYPE html>

<html lang="it-IT">
    <head>
        <title>Fiumi italiani</title>
        <meta charset="UTF-8">
    </head>

    <body>
        <h1>Fiumi italiani</h1>

        <ul>
        <?php

            require 'dati.php';

            legendaFiumi($dati);

        ?>
        </ul>
    </body>
</html>
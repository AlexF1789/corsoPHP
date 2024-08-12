<?php

    require 'dati.php';

    if($_SERVER['REQUEST_METHOD']=='GET' && isset($_GET['nome_utente'])) {
        $dati = $utenti[$_GET['nome_utente']]['dati'];
    } else
        header("location: / ");

?>

<!DOCTYPE html>
<html lang="it-IT">
    <head>
        <title>Area Riservata</title>
        <meta charset="UTF-8">
    </head>

    <body>
        <section>
            <article>
                <h1>Area Riservata</h1>

                <ul>
                    <?php

                        foreach($dati as $chiave => $valore) {
                            echo "<li>$chiave: $valore</li>";
                        }

                    ?>
                </ul>
                
                <a href="/"><button>Homepage</button></a><br><br>

            </article>
        <section>
    </body>
</html>
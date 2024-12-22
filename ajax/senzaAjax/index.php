<?php

    // ci colleghiamo al database
    $db = new mysqli('localhost','studente','studente','studente');

    // specifichiamo rispettivamente il numero di libri da estrarre e il numero di libri da ignorare
    $limit = 15;
    $offset = 0;

    // controlliamo se sono stati specificati come parametri di tipo GET
    if(isset($_GET['limit']) and $_GET['limit'] > 0)
        if($_GET['limit'] > 50)
            $limit = 50;
        else
            $limit = $_GET['limit'];

    if(isset($_GET['offset']) and $_GET['offset'] > 0)
        $offset = $_GET['offset'];

?>

<!DOCTYPE html>
<html lang="it-IT">
    <head>
        <title>Libri</title>
        <meta charset="UTF-8">

        <link rel="stylesheet" href="sources/style/style.css" type="text/css">
    </head>

    <body>
        <header>
            <h1>Libri senza Ajax</h1>
        </header>
        
        <section>
            <article>
                <!-- spiegazione iniziale (testo della pagina) -->
                <h1>Estrazione libri senza Ajax</h1>
                <p>In questo caso adottiamo un approccio per cui il server costruisce la pagina e la invia già <i>completa</i> al client; pertanto l'estrazione dei libri dal database avviene prima che l'utente <i>veda</i> la pagina a livello del server.</p>
                <br>
                <p>Questa soluzione è più semplice da scrivere, richiede un file con estensione <b>.php</b> e vede una parte di HTML, che state leggendo e uno script integrato che ricava i libri dal database e li colloca all'interno dell'HTML. Abbiamo però degli <b>aspetti negativi</b> fra cui il maggiore tempo per elaborare la richiesta da parte del server (che comporta che l'utente aspetti di più la pagina e abbia l'impressione di una maggiore lentezza), la maggiore difficoltà nel modificare il codice, che si trova ora in mezzo all'HTML, e la scarsissima scalabilità: non possiamo infatti riusare il codice all'interno della pagina senza la sua struttura HTML. Inoltre, quando l'utente va avanti nell'elenco (prendendo per esempio i libri da 15 a 30) dovrà ricaricare completamente la pagina: ciò sottopone a maggiore stress il server che dovrà ricomporre per intero la pagina e reinviarla <i>tutta</i> e in più darà un'impressione di minore fluidità all'utente.<br><br>Pertanto <b>riassumendo</b>:</p>

                <ul>
                    <li>approccio più semplice e vecchio</li>
                    <li>tempi di caricamento e carico del server maggiore</li>
                    <li>percezione di lentezza da parte dell'utente</li>
                    <li>impossibilità di aggiungere barre/icone di caricamento</li>
                    <li>scarsamente scalabile e non immediato da modificare</li>
                </ul>   
            </article>

            <article id="contenitoreTabella">
                <label for="offset">ignora i primi</label><input id="offset" type="number" onclick="" placeholder="offset" value="<?= $offset ?>"><br>
                <label for="limit">numero libri</label><input id="limit" type="number" onclick="" placeholder="limit" value="<?= $limit ?>"><br>
                <button onclick="location.href = 'index.php?limit='+document.getElementById('limit').value+'&offset='+document.getElementById('offset').value">Estrai libri</button>
                <button onclick="location.href = 'index.php'" style="margin-left: 1%">Reset</button>

                <table border="1">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Titolo</th>
                            <th>Autore</th>
                            <th>Anno Pubblicazione</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php

                            // impostiamo la query
                            $query = $db->prepare("SELECT * FROM libri LIMIT ? OFFSET ?");
                            $query->bind_param('ii', $limit, $offset);
                            
                            // inoltriamo la query e ne salviamo la risposta
                            $query->execute();
                            $risposta = $query->get_result();

                            if($risposta->num_rows > 0) {
                                // iteriamo sulle righe
                                while($record = $risposta->fetch_assoc()) {
                                    echo '<tr>';

                                    foreach(['ID', 'titolo', 'autore', 'annoPubblicazione'] as $campo)
                                        echo '<td>'.$record[$campo].'</td>';

                                    echo '</tr>';
                                }

                            } else
                                echo '<tr><td colspan="4" class="nonTrovato">Nessun libro trovato!</td></tr>';

                            // chiudiamo la connesione al database
                            $db->close();

                        ?>
                    </tbody>
                </table>
            </article>
        </section>
    </body>
</html>
<?php

    // script che estrae i libri dal database e li stampa in formato JSON a schermo, verrà usata come API dal client

    // impostiamo il contenuto della risposta su JSON
    header("Content-Type: application/json");

    if($_SERVER['REQUEST_METHOD'] == 'GET') {

        // assegnamo $limit e $offset
        $limit = 50;
        if(isset($_GET['limit']) and $_GET['limit'] > 0 and $_GET['limit'] < 50)
            $limit = intval($_GET['limit']);

        $offset = 0;
        if(isset($_GET['offset']) and $_GET['offset'] > 0)
            $offset = intval($_GET['offset']);

        // ci connettiamo al database e prepariamo la query
        $db = new mysqli('localhost','studente','studente','studente');
        $query = $db->prepare("SELECT * FROM libri LIMIT ? OFFSET ?");
        $query->bind_param('ii', $limit, $offset);

        // eseguiamo la query e ne otteniamo il risultato
        $query->execute();
        $risposta = $query->get_result();

        // stampiamo la risposta
        echo json_encode([
            'esito' => true,
            'limit' => $limit,
            'offset' => $offset,
            'data' => $risposta->fetch_all(MYSQLI_ASSOC)
        ]);

    } else {
        echo json_encode([
            'esito' => false,
            'messaggio' => 'metodo della richiesta errato'
        ]);
    }

?>
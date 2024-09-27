<?php

    require 'crypt.php';

    $db = new mysqli('localhost','studente','studente','studente');

    $query = $db->prepare("SELECT * FROM utenti");
    $query->execute();
    $risposta = $query->get_result();

    while($riga = $risposta->fetch_assoc()) {
        $crypt = [
            'cognome' => cripta_stringa($riga['cognome']),
            'nome' => cripta_stringa($riga['nome']),
            'mail' => cripta_stringa($riga['mail'])
        ];

        $modifica = $db->prepare("UPDATE utenti SET cognome=?, nome=?, mail=? WHERE ID=?");
        $modifica->bind_param('sssi',$crypt['cognome'],$crypt['nome'],$crypt['mail'],$riga['ID']);

        echo "utente {$riga['ID']}: ".($modifica->execute() ? 'ok' : 'ko').'<br>';
    }

    $db->close();


?>
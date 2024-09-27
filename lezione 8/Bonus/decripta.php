<?php

    require 'crypt.php';

    $db = new mysqli('localhost','studente','studente','studente');

    $query = $db->prepare("SELECT * FROM utenti");
    $query->execute();
    $risposta = $query->get_result();

    while($riga = $risposta->fetch_assoc()) {
        $decrypt = [
            'cognome' => decripta_stringa($riga['cognome']),
            'nome' => decripta_stringa($riga['nome']),
            'mail' => decripta_stringa($riga['mail'])
        ];
        echo "utente {$riga['ID']}: {$decrypt['cognome']} {$decrypt['nome']} - {$decrypt['mail']}<br>";
    }

    $db->close();

?>
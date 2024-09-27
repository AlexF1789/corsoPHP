<?php

    require 'crypt.php';

    if($_SERVER['REQUEST_METHOD']=="POST") {

        if(isset($_POST['nome']) && isset($_POST['cognome']) && isset($_POST['mail'])) {

            $crypt = [
                'nome' => cripta_stringa($_POST['nome']),
                'cognome' => cripta_stringa($_POST['cognome']),
                'mail' => cripta_stringa($_POST['mail'])
            ];

            $db = new mysqli('localhost','studente','studente','studente');
            $query = $db->prepare("INSERT INTO `utenti`(`cognome`, `nome`, `mail`) VALUES (?,?,?)");
            $query->bind_param('sss',$crypt['cognome'],$crypt['nome'],$crypt['mail']);
            $query->execute();

        }

    }

    header("location: /");

?>
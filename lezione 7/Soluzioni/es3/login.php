<?php

    session_start();

    if(isset($_SESSION['ID'])) {
        header("location: areaPersonale.php");
    } else {

        if($_SERVER['REQUEST_METHOD'] == "POST") {

            if(isset($_POST['mail']) && isset($_POST['password'])) {

                $db = new mysqli('localhost','studente','studente','studente');
                $query = $db->prepare("SELECT * FROM utenti WHERE mail=? AND password=?");
                $query->bind_param('ss',$_POST['mail'],$_POST['password']);

                if($query->execute()) {
                    $risposta = $query->get_result();

                    $record = $risposta->fetch_all(MYSQLI_ASSOC)[0];
                    
                    // $_SESSION['ID'] = $record['ID'];
                    // $_SESSION['nome'] = $record['nome'];
                    // $_SESSION['cognome'] = $record['cognome'];
                    // $_SESSION['mail'] = $record['mail'];

                    $campi = ['ID','nome','cognome','mail'];
                    foreach($campi as $campo) {
                        $_SESSION[$campo] = $record[$campo];
                    }

                    header("location: areaPersonale.php");
                }

            }

        }

        header("location: /");

    }

?>
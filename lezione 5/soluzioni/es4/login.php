<?php

    require 'dati.php';

    if($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['nome_utente']) && isset($_POST['password'])) {

        if(array_key_exists($_POST['nome_utente'],$utenti) && $utenti[$_POST['nome_utente']]['password']==$_POST['password']) {
            header("location: /areaPersonale.php?nome_utente=".$_POST['nome_utente']);
        } else
            header("location: /index.php?errore=1");

    } else
        header("location: /");

?>
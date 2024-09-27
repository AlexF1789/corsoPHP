<?php

    session_start();

    $campi = ['ID','cognome','nome','mail'];
    foreach($campi as $campo) {
        unset($_SESSION[$campo]);
    }

    session_destroy();

    header("location: /");

?>
<?php

    require "Studente.php";
    require "Docente.php";

    $s1 = new Studente("Rossi","Mario");
    $d1 = new Docente("Verdi","Bianca","Matematica");

    $d1->aggiungiVoto($s1,8);

    $s1->stampaVoti();

?>
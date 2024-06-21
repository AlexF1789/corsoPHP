<?php

    require "Studente.php";

    $s1 = new Studente("Rossi","Mario");

    $s1->stampaGeneralita();

    $s1->aggiungiVoti(array(8,9,10,2,4,5,6));

    $s1->stampaGeneralita();

    $s1->stampaVoti();

?>
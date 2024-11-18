<?php

    $alpha = 60;
    $beta = 30;

    $rapporto = pi()/180;

    // coseno
    $coseno_somma = cos($rapporto * $alpha) * cos($rapporto * $beta) - sin($rapporto * $alpha) * sin($rapporto * $beta);

    // seno
    $seno_somma = sin($rapporto * $alpha) * cos($rapporto * $beta) + cos($rapporto * $alpha) * sin($rapporto * $beta);

    // stampiamo
    echo "il coseno di $alpha + $beta equivale a $coseno_somma<br>";
    echo "il seno di $alpha + $beta equivale a $seno_somma<br>";

?>
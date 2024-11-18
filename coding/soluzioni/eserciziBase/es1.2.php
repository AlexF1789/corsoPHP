<?php

    // es 1.2
    
    $a = 4;
    $potenze = [
        2,
        3,
        1/2,
        1/3
    ];

    foreach($potenze as $esponente) {
        echo "$a ^ $esponente = ".$a**$esponente."<br>";
    }

?>
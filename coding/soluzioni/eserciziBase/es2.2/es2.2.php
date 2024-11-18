<?php

    // es 2.2

    $voti = [3,4,7.5,6,8.75,5.5];

    $somma = 0;
    foreach($voti as $voto) {
        $somma += $voto;
        //$somma = $somma + $voto;
    }

    echo $somma;
    $media = $somma / count($voti);

    echo 'la media è '.$media;

    /* // alternativamente potevamo usare un for che itera sugli indici
    for($i=0; $i<count($voti); $i++) {
        echo $voti[$i]."<br>";
    } */

    // vediamo quanti 6 occorrono per portare la media a un valore sufficiente
    // ($media >= 6)

    $num_aggiunte = 0;
    $tol = 0.5;
    while($media < 6 && 6-$media >= $tol) {
        //echo "<br>media: $media"; ci può essere comoda per vedere come varia la media
        $num_aggiunte++;
        $media = ($somma + 6*$num_aggiunte) / (count($voti) + $num_aggiunte);
    }


    /* $num_aggiunte+=99999999;
    $media = ($somma + 6*$num_aggiunte) / (count($voti) + $num_aggiunte); */

    echo "<br>occorrono $num_aggiunte voti 6 per ottenere la media sufficiente ($media + $tol = ".$media+$tol.")<br>";


?>
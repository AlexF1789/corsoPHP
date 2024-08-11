<?php

    $autori = [
        'George Orwell',
        'Ernest Hemingway',
        'Primo Levi',
        'George Orwell',
        'Ernest Hemingway'
    ];

    $libri = array(
        '1984',
        'Per chi suona la campana',
        'Se questo è un uomo',
        'La fattoria degli animali',
        'Il vecchio e il mare'
    );

    $autori_libri = [];

    // creiamo le chiavi e i vettori vuoti

    foreach($autori as $autore) {
        if(!array_key_exists($autore,$autori_libri)) {
            $autori_libri[$autore] = [];
        }
    }

    // popoliamo il vettore

    for($i=0;$i<count($libri);$i++) {
        array_push($autori_libri[$autori[$i]],$libri[$i]);
    }

    print_r($autori_libri);

?>

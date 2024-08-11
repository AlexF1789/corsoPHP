<?php

    $dati = [
        "Po" => [
            'Regioni' => [
                'Piemonte',
                'Lombardia',
                'Emilia-Romagna',
                'Veneto'
            ],
            'Lunghezza' => 651.8,
            'Altitudine' => 2022
        ],

        'Arno' => [
            'Regioni' => 'Toscana',
            'Lunghezza' => 241,
            'Altitudine' => 1358
        ],

        'Tevere' => [
            'Regioni' => [
                'Emilia-Romagna',
                'Toscana',
                'Umbria',
                'Lazio'
            ],
            'Lunghezza' => 405,
            'Altitudine' => 1268
        ]
    ];

    function legendaFiumi($fiumi) {
        foreach(array_keys($fiumi) as $fiume) {
            echo '<li><a href="fiume.php?fiume='.$fiume.'">fiume '.$fiume.'</a></li>';
        }
    }

    function proprietaFiume($fiume) {
        foreach($fiume as $proprieta => $valore) {
            echo "<li>$proprieta: ";

            if(is_array($valore)) {
                echo "<ul>";
                foreach($valore as $sottovalore) {
                    echo "<li>$sottovalore</li>";
                }
                echo "</ul>";
            } else
                echo "$valore";

            echo "</li>";
        }
    }

?>
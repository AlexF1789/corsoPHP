<?php

    ///////////////////////////////////////////////////////////
    //                                                       //
    //               CRITTOGRAFIA SIMMETRICA                 //
    //                                                       //
    //  richiedere questo file oppure ricopiare le seguenti  //
    //  funzioni all'interno dello script interessato        //
    //                                                       //
    ///////////////////////////////////////////////////////////

    // rilasciato sotto licenza GNU GPL v3.0 o successive - maggiori informazioni all'indirizzo
    // https://github.com/AlexF1789/corsoPHP/crypt.php

    // NB: questo materiale viene rilasciato con il solo scopo di fornire del materiale didattico
    //     ogni altro uso è, oltre che FORTEMENTE SCONSIGLIATO, svolto sotto la PROPRIA RESPONSABILITÀ
    //     e assolutamente svolto a insaputa del/i docente/i del corso

    function cripta_stringa(string $stringa): bool|string {
        // funzione che cripta una stringa in input mediante l'algoritmo AES-128 a blocchi
        // restituisce la stringa criptata oppure il booleano false in caso di errore
        $crypt = [
            'algo' => 'aes-128-cfb',
            'iv' => 'E759F3F75FFFCDE9',
            'chiave' => 'EBEF2C48A21042FDEAA99AD5D80EE0F7'
        ];

        return openssl_encrypt($stringa,$crypt['algo'],$crypt['chiave'],$options=0,$crypt['iv']);
    }

    function decripta_stringa(string $stringa): bool|string {
        // funzione che decripta una stringa in input mediante l'algoritmo AES-128 a blocchi
        // restituisce la stringa decriptata oppure il booleano false in caso di errore
        $crypt = [
            'algo' => 'aes-128-cfb',
            'iv' => 'E759F3F75FFFCDE9',
            'chiave' => 'EBEF2C48A21042FDEAA99AD5D80EE0F7'
        ];

        return openssl_decrypt($stringa,$crypt['algo'],$crypt['chiave'],$options=0,$crypt['iv']);
    }

    // piccola demo del codice, per vederla in funzione decommentarla

    // $stringa = 'Hello, World!';
    // $crypt = cripta_stringa($stringa);
    // echo $crypt."<br><br>".decripta_stringa($crypt);



?>
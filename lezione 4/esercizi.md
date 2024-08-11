Esercizi
===
_Lezione 4:_ PHP, HTML e le richieste GET e POST

Per affrontare i seguenti esercizi potrebbero essere utili le slide ed eventuale documentazione reperita online.

## Esercizio 1

## Esercizio 2

## Esercizio 3
_province_

_Attenzione: prima di buttarsi a capofitto sulla risoluzione dell'esercizio leggere **attentamente** l'intera consegna; non viene infatti richiesto di creare un sito web statico come siete certamente già capaci ma di creare una base statica che verrà popolata di contenuti grazie al codice PHP_

Costruire un sito web usando HTML, CSS e PHP che contenga le seguenti pagine:

- _index.php_
- generiche pagine _nomeProvincia.php_ (per esempio potrebbero esserci le pagine _torino.php_, _milano.php_, ...) [almeno 3]
- _dati.php_ che contenga le informazioni delle province sotto forma di array annidato

Nella pagina **index.php** (ovvero la homepage del sito) dovranno comparire i seguenti elementi:

- il titolo **Alcune province italiane**
- un elenco puntato contenente i nomi delle province scelte (tali nomi dovranno essere dei collegamenti ipertestuali a ciascuna pagina _nomeProvincia.php_ specificate in precedenza)

Nelle pagine **nomeProvincia.php** dovranno invece essere presenti:

- il titolo contenente il nome della provincia
- le informazioni relative alla provincia quali gli abitanti, la regione, la collocazione geografica, ... formattate in una tabella

Si noti che per il front-end basta creare una pagina per le province e ricopiarla cambiando il nome ogni volta. Per l'aspetto grafico seguire un template a piacere purché si faccia uso del CSS e che siano presenti gli elementi citati in precedenza

Una volta realizzato il front-end si proceda a integrare il codice PHP come segue:

- nella pagina _dati.php_ sarà presente un array annidato che associa a ogni nome di provincia un array contenente i dati (organizzati per _chiave parlante_ ovvero dove ogni chiave in formato stringa specifica il dato, per esempio alla chiave _Regione_ sarà associata la regione che contiene la provincia)
- nella pagina _index.php_ l'elenco puntato sarà generato da un istruzione `foreach` che stamperà gli elementi dell'elenco puntato mediante un'istruzione `echo`
- nelle pagine _nomeProvincia.php_ invece i campi della tabella saranno stampati attraverso un `echo` che stamperà ogni campo della tabella

Naturalmente, essendo il vettore annidato dichiarato all'interno del file _dati.php_ servirà usare l'istruzione `require` per accedere ai dati contenuti nello stesso dalle altre pagine.

## Esercizio 4 - svolto
_fiumi italiani_

Costruire un sito web usando HTML, CSS e PHP che contenga le seguenti pagine:

- _index.php_
- _fiume.php_
- _dati.php_ che contenga le informazioni di alcuni fiumi sotto forma di un vettore associativo

La pagina **index.php** dovrà mostrare il titolo `Fiumi italiani` e un link denominato _fiume nomeFiume_ che porti alla pagina **fiume.php** passando come parametro GET il nome del fiume (che è la chiave del vettore associativo definito nel vettore della pagina **dati.php**)

Esercizi
===
_Lezione 5:_ PHP, HTML e richiami di JavaScript

Per affrontare i seguenti esercizi potrebbero essere utili le slide ed eventuale documentazione reperita online.

## Esercizio 1

## Esercizio 2

## Esercizio 3

## Esercizio 4 - svolto
_utente_

_Attenzione: l'approccio per il login utilizzato in questo esercizio è altamente rudimentale e insicuro ma viene usato solamente a fini didattici, attendere l'ultima lezione per l'analisi delle variabili di sessione e dei meccanismi di hash per la password._

Costruire un sito web usando HTML, CSS e PHP che contenga le seguenti pagine:

- _index.php_
- _login.php_
- _areaRiservata.php_
- _dati.php_ che contenga le informazioni degli utenti sotto forma di array annidato

Nella pagina **index.php** (ovvero la homepage del sito) dovranno comparire i seguenti elementi:

- il titolo **Portale web**
- un paragrafo che spiega cosa svolge il sito web
- un form di login contenente i campi nome utente e password

Il form di login della pagina **index.php** dovrà portare alla pagina **login.php** dove avverrà il controllo dei dati e il reindirizzamento alla pagina **areaPersonale.php** passando come parametro GET il nome utente oppure alla pagina **index.php** dove l'utente riceverà una notifica di avvertimento delle credenziali errate.

All'interno della pagina **areaPersonale.php** dovranno essere presenti i seguenti elementi:

- il titolo **Area Riservata**
- un elenco puntato con i dati dell'utente
- un bottone che riporta alla pagina **index.php**

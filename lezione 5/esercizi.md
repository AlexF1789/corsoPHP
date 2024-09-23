Esercizi
===
_Lezione 5:_ PHP, HTML e richiami di JavaScript

Per affrontare i seguenti esercizi potrebbero essere utili le slide ed eventuale documentazione reperita online.

## Esercizio 1
_costruzione di un form_

Creare una pagina HTML che includa un form che richieda i seguenti dati all'utente:

- nome - mediante un input testuale
- cognome - mediante un input testuale
- mail - mediante un input testuale
- telefono - mediante un input numerico
- password - mediante un input di tipo password
- colore preferito - mediante un input di colore

## Esercizio 2
_invio di un form a uno script PHP_

Creare una pagina HTML contenente un form con _action_ impostata a _elabora.php_ e _method_ impostato a _POST_ che richieda l'indirizzo mail di un utente, tale input dovrà avere i seguenti parametri impostati:

- _name_ impostato a _mail_
- _placeholder_ impostato a _Indirizzo Mail_
- _required_ impostato (non è necessario inserire un valore, basta mettere la keyword _required_ prima di chiudere il tag)

Aggiungere dunque un input di tipo submit.

Scrivere dunque uno script PHP denominato _elabora.php_ collocato nella stessa cartella della pagina HTML precedente che svolga le seguenti operazioni:

- estrapoli l'indirizzo mail inserito dall'utente nel form mediante l'uso di un vettore globale
- lo stampi nella pagina

## Esercizio 3
_creazione di notifiche_

Creare una pagina HTML al cui interno viene riportata la chiamata allo script per l'uso delle Swal2 (copiarla direttamente dalle slide) e definire, mediante il tag _script_ HTML, uno script JavaScript che chiami una notifica Swal2 con i seguenti connotati:

- deve mostrare l'icona di avvertimento (warning)
- il titolo deve essere impostato a _Notifica di prova_
- deve riportare il testo _Questa notifica mostra tutti gli elementi possibili_
- deve mostrare i tasti di chiusura, conferma e annullamento
- il testo del tasto di annullamento deve essere _Annulla_
- il testo del tasto di conferma deve essere _Conferma_


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

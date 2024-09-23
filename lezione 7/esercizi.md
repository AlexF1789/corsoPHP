Esercizi
===
_Lezione 7:_ Sessioni e variabili globali

Per affrontare i seguenti esercizi potrebbero essere utili le slide ed eventuale documentazione reperita online.

## Esercizio 1
_primi passi nelle sessioni_

Creare due script denominati `index.php` e `creaSessione.php` di modo che seguano le seguenti specifiche:

- lo script `index.php` verifica se è impostato il nome dell'utente e in tal caso lo stampa nella pagina
- lo script `creaSessione.php` crea una nuova sessione impostando la variabile `$_SESSION['nome']` a un valore a scelta

Cosa succede se visitiamo la pagina `index.php` prima di aver visitato la pagina `creaSessione.php`? Ha senso? Cos'è la variabile `$_SESSION`? Abbiamo già visto qualcosa di simile parlando di vettori?

## Esercizio 2
_distruzione di sessioni_

Dati gli script creati nello svolgimento dell'esercizio precedente creare un ulteriore script denominato `logout.php` contenente le istruzioni necessarie per distruggere la sessione in corso (guarda le slide se non le ricordi).
Raggiungendo lo script `logout.php` inserendo nella barra degli indirizzi l'indirizzo `localhost/logout.php` cosa succede? È possibile recuperare la sessione una volta fatto ciò?

## Esercizio 3 - svolto
_sistema di login avanzato_

Creare un applicazione web utilizzando i linguaggi PHP ed SQL che presenti all'utente all'interno della homepage un form di login; una volta inseriti i dati e verificata la loro presenza e correttezza all'interno della tabella _utenti_ della base di dati allegata agli esercizi creare una sessione corrispondente.
L'utente dovrà dunque recarsi alla pagina `areaPersonale.php` dove gli verranno elencati i dati (salvati nella sessione corrente).
Completare l'applicazione web con una pagina di logout delegata alla distruzione della sessione e al reindirizzamento dell'utente alla homepage.
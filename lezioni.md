Lezioni PHP
===
Pianificazione delle videolezioni per argomenti; ogni lezione ha una durata di circa 15 minuti e deve includere uno o più esercizi per la durata complessiva di 40-45 minuti di lavoro.

## Lezione 0
In questa lezione si dovrà introdurre il linguaggio PHP e l'ambiente su cui gli studenti lavoreranno. In particolare si tratteranno:

### Prima parte: lo sviluppo lato server
- lo sviluppo web: richiami a HTML, CSS e JavaScript
- siti web dinamici: cosa sono e quanto sono diffusi
- i linguaggi lato server: React JS, Java, Python
- il linguaggio PHP
	- perchè studiarlo: PHP never dies (con meme), principali siti web scritti usando PHP, importanza didattica (è molto facile ma estremamente potente)
	- come funziona: logica degli script e possibilità di inserire il codice nelle pagine HTML per farlo caricare prima delle stesse

### Seconda parte: il setup di lavoro
- breve presentazione dei server Apache2 e NGINX
- breve presentazione del software phpMyAdmin (peraltro scritto in PHP)
- breve presentazione del software Visual Studio Code
- come lavorare sui siti web e sulle basi di dati in laboratorio (setup con Ubuntu)

Nel video saranno anche presenti dei rimandi ad altri video circa il setup del server su Linux, Windows e macOS per poter lavorare anche da casa.

## Lezione 1
In questa lezione si tratteranno alcuni aspetti del linguaggio PHP, in particolare si discuterà della sintassi e dei primi passi nell'uso del linguaggio

### Teoria
- come costruire uno script PHP, apertura di Visual Studio Code nella cartella e creazione del primo file index.php
- la sintassi di base: tag `<?php ?>`, dichiarazione di variabili (scalari), operazioni aritmetiche di base e confronti mediante gli `if   else if    else`
- la funzione `echo` e la stampa di testo HTML nella pagina
- creazione di una pagina HTML con alcuni testi generati lato server: osservazione della natura _pre-interpretata_ del linguaggio

### Esercizi in aula
- variabili e operazioni aritmetiche:
	- realizzazione delle quattro operazioni date due variabili **$a $b**
	- realizzazione dei possibili incrementi delle due variabili sopra citate
	- date due stringe **\$str1** e **\$str2** concatenarle 
- confronti:
	- confrontare due variabili **\$a $b** e stampare mediante la funzione `echo` il valore maggiore tra quelli contenuti, se il primo e divisibile per il secondo e viceversa, se il primo o il secondo (o entrambi) sono pari o dispari
	- confrontare due stringhe **\$str1** e **\$str2** e dire se sono uguali, diverse, vuote

## Lezione 2
In questa lezione si affronteranno i cicli `while` e `do while` tipici del linguaggio C. In particolare la loro trattazione avverrà a partire da semplici incrementi fino a strutture più complesse (con annidazione).

### Teoria
- logica dei cicli: ripetizione delle operazioni per un numero non noto di volte, logica precondizionale e postcondizionale
- il ciclo `while` con esempi e analisi di funzionamento
- il ciclo `do while` con esempi e analisi di funzionamento

### Esercizi in aula
- stampare i primi 100 numeri positivi e negativi (da 0 a 100 e da 0 a -100)
- stampare i primi 50 numeri pari e dispari
- stampare i primi 20 multipli di 15 e di 27
- dalla pagina wikipedia dell'algoritmo di ordinamento Shell Sort ([link](https://it.wikipedia.org/wiki/Shell_sort)) ricavare l'espressione della successione di Knuth e calcolarne i primi 20 termini (soluzione: l'n-esimo elemento è tre volte il precedente incrementato di uno)

## Lezione 3
In questa lezione si affronteranno due elementi fondamentali della programmazione (in generale); i vettori (o _array_) e i cicli `for`, a questi andremo ad affiancare il `foreach` tipico di PHP e di altri linguaggi ad alto livello.

### Teoria
- array: cosa sono e perché sono utili
- gli array "classici" e gli array associativi, dichiarazione in PHP e il loro scorrimento
- le funzioni:
	* `array_exist_key()`
	* `array_search()`
	* `array_keys()` e `array_values()`
	* `array_combine()`
- i cicli `for` visti per iterare matematicamente e per scorrere un array
- il ciclo `foreach` per scorrere un vettore "classico" e un vettore associativo

### Esercizi in aula
- costruire un array secondo le seguenti specifiche mediante l'uso di un ciclo `for`:
    * ha dimensione N = 25
    * alla posizione 0 ha valore N
    * alla posizione i ha valore N-i
    * alla posizione N-1 ha valore 0
- dichiarare il seguente array associativo secondo le seguenti specifiche:
    * il nome è **\$province**
    * le chiavi sono delle stringhe di due caratteri maiuscoli che rappresentano la sigla della provincia
    * i valori sono le corrispondenti province espressi come stringhe formattate con la prima lettera maiuscola e la restante parte minuscola
    * la dimensione del vettore è 5
- iterare mediante un ciclo sul vettore **\$province** stampando una struttura HTML a piacere (tabella, elenco puntato, ...) che riporti la sigla della provincia e il nome della stessa
- dichiarare ora un altro vettore chiamato **\$province2** che a differenza del precedente vettore **\$province** non è formattato usando una struttura `$chiave => $valore` ma è semplicemente un vettore "classico" al cui interno sono presenti anche alcune province non inserite precedentemente (rispettando sempre la dimensione pari a 5); a questo punto iterare mediante un ciclo `foreach` sui valori di **\$province2** e, mediante la funzione `array_key_search()`, stabilire se ognuna delle province è presente anche nell'array **\$province2**; in tal caso stamparne la sigla, altrimenti stampare una dicitura di errore.


## Lezione 4
In questa lezione si ultimerà la parte relativa alla pura programmazione in PHP; a seguito di questa le lezioni verteranno sulla scrittura di codice PHP all'interno di progetti che integrano HTML, CSS, JavaScript e MySQL. In questa lezione verranno trattate le funzioni e le istruzioni `require` e `require_once` per integrare il codice presente in più pagine.

### Teoria
- cos'è una funzione e perché è utile
- come dichiarare e usare una funzione
- parametri e valori restituiti da una funzione
- le variabili globali
- l'istruzione `require` con esempi
- il problema del riuso e l'istruzione `require_once`
- la funzione `header()`

### Esercizi in aula
- scrivere una funzione che, date due stringhe verifichi se le stesse sono identiche usando un approccio _C-like_ (ovvero confrontando carattere per carattere); nel caso in cui queste fossero identiche restituire 0, altrimenti restituire una stringa contenente i primi due caratteri diversi
- scrivere una funzione che, dato come parametro un numero, restituisca la somma dello stesso per un altro numero definito come variabile globale al di fuori della funzione
- scrivere una funzione che, dato un numero, verifichi se lo stesso è pari o dispari; restituire un booleano (`true` per pari o `false` per dispari)
- mediante l'istruzione `require` chiamare il file `richiesto.php` appositamente scritto per stampare una frase a piacere; una volta fatto ciò dichiarare dentro `richiesto.php` una variabile e verificare che la stessa sia accessibile dal file da cui è stato richiesto.

## Lezione 5
In questa lezione si tratteranno i richiami alla programmazione _front-end_, in particolare verrà spiegato come integrare il codice PHP all'interno di una pagina HTML eventualmente comprensiva di codice CSS per la grafica e di parti JavaScript per la programmazione lato client.

### Teoria
- come possiamo usare PHP oltre che come linguaggio di programmazione classico
- richiami di HTML, CSS e JavaScript (molto generali)
- integrare il codice PHP nella pagina HTML (logica della pre-interpretazione del codice)
- spiegazione iniziale dell'esercizio in aula (array annidati)

### Esercizio in aula
_Attenzione: prima di buttarsi a capofitto sulla risoluzione dell'esercizio leggere **attentamente** l'intera consegna; non viene infatti richiesto di creare un sito web statico come siete certamente già capaci ma di creare una base statica che verrà popolata di contenuti grazie al codice PHP_

Costruire un sito web usando HTML, CSS e PHP che contenga le seguenti pagine:

- _index.php_
- generiche pagine _nomeProvincia.php_ (per esempio potrebbero esserci le pagine _torino.php_, _milano.php_, ...)
- _dati.php_ che contenga le informazioni delle province sotto forma di array annidato

Nella pagina **index.php** (ovvero la homepage del sito) dovranno comparire i seguenti elementi:

- il titolo **Alcune province italiane**
- un elenco puntato contenente i nomi delle province scelte (tali nomi dovranno essere dei collegamenti ipertestuali a ciascuna pagina _nomeProvincia.php_ specificate in precedenza)

Nelle pagine **nomeProvincia.php** dovranno invece essere presenti:

- il titolo contenente il nome della provincia
- le informazioni relative alla provincia quali gli abitanti, la regione, la collocazione geografica, ... formattate in una tabella

Si noti che per il front-end basta creare una pagina per le province e ricopiarla cambiando il nome ogni volta. Per l'aspetto grafico è possibile seguire l'immagine presente nella cartella `lezione5/demo/` di questo repository.

Una volta realizzato il front-end si proceda a integrare il codice PHP come segue:

- nella pagina _dati.php_ sarà presente un array annidato che associa a ogni nome di provincia un array contenente i dati (organizzati per _chiave parlante_ ovvero dove ogni chiave in formato stringa specifica il dato, per esempio alla chiave _Regione_ sarà associata la regione che contiene la provincia)
- nella pagina _index.php_ l'elenco puntato sarà generato da un istruzione `foreach` che stamperà gli elementi dell'elenco puntato mediante un'istruzione `echo`
- nelle pagine _nomeProvincia.php_ invece i campi della tabella saranno stampati attraverso un `echo` che stamperà ogni campo della tabella

Naturalmente, essendo il vettore annidato dichiarato all'interno del file _dati.php_ servirà usare l'istruzione `require` per accedere ai dati contenuti nello stesso dalle altre pagine.

## Lezione 6
In questa lezione si approfondirà il legame tra HTML e PHP, aggiungendo anche qualche elemento di JavaScript

### Teoria
- il passaggio di dati mediante GET e POST e i relativi vettori
- passare dei parametri mediante GET e POST, l'integrazione con i _form_ HTML
- richiami di JavaScript e uso di Swal2 per le notifiche
- alcuni elementi di programmazione a oggetti in PHP (sarà utile per la lezione successiva circa l'uso delle query SQL)
- suggerimenti per svolgere l'esercizio in aula

### Esercizio in aula
Creare un sito web sfruttando HTML, CSS, JavaScript e PHP che contenga tre pagine:

- una pagina `index.php` (ovvero la _homepage_ del sito) che mostri al suo interno due `form` HTML identici che richiedano i seguenti dati al visitatore:
    * Cognome
    * Nome
    * Data di nascita
    * Luogo di nascita
    * Indirizzo email
    * Numero di Telefono

	Questi due `form` avranno come differenza grafica i bottoni di invio che saranno rispettivamente **GET** e **POST**

- una pagina chiamata _schedaGET.php_ e una chiamata _schedaPOST.php_ che riportino in maniera identica i dati dell'utente formattati in una tabella e due tasti **\+** e **\-** che rispettivamente aprano una notifica Swal2 di successo e di errore (possiamo intendere il loro significato come approvazione o disapprovazione del profilo come per una candidatura per un posto di lavoro)

Sebbene, a livello di front-end, le pagine siano identiche ciò che cambia è il back-end delle pagine; in particolare la prima pagina riceverà i dati come parametro GET mentre la seconda come parametro POST. Deduciamo perciò ora la necessità di avere due `form` separati nella pagina iniziale.

Si noti quanto segue nella progettazione del back-end:

 - entrambe le pagine dovranno verificare che tutti i dati siano stati recapitati; per farlo un approccio può essere quello di usare un vettore di comodo contenente il nome dei campi richiesti e iterare sullo stesso mediante un `foreach` che controlli con la funzione `array_key_exist()` sui campi dei vettori `$_GET` e `$_POST`
- se dovessero mancare l'utente dovrà essere rimandato alla pagina iniziale (*feature extra:* sarebbe bello se l'utente ricevesse anche una notifica mediante Swal2 ma non è fondamentale, farlo solo se avanza tempo; in tal caso un approccio che si può seguire è quello di controllare la presenza di un parametro GET quale potrebbe essere `notify` fissato a un valore e, in tal caso, mediante `echo` stampare del codice JavaScript nella pagina)
- il fatto che non sia specificata la necessità di una pagina di appoggio contenente i dati usati da entrambe le pagine non implica che questa non possa essere utilizzata; non è comunque un errore scrivere tutto il codice nelle due pagine _schedaGET.php_ e _schedaPOST.php_

## Lezione 7
In questa lezione viene introdotto il legame tra PHP e basi di dati; in particolare si effettua un generale richiamo circa le basi di dati e su come effettuare le query da PHP.

### Teoria
- richiami di basi di dati: cosa sono e a cosa servono
- perché è importante che le richieste vengano elaborate lato server
- alcuni strumenti per gestire le basi di dati, presentazione di _phpMyAdmin_ e spiegazione di alcune sue funzioni fondamentali
- come si effettua una query (richiami di sintassi _MySQL_)
- la classe _mysqli_ con particolare riferimento ai metodi e alle funzioni:
    * _num_rows_
    * _mysqli_fetch_row_
    * _query_
- consigli per risolvere l'esercizio in aula

### Esercizio in aula
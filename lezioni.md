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
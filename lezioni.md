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
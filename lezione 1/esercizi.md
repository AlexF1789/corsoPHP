Esercizi
===
_Lezione 1:_ introduzione al linguaggio e richiami di programmazione

Per affrontare i seguenti esercizi potrebbero essere utili le slide e eventuale documentazione reperita online.


## Esercizio 1
_Variabili e operazioni aritmetiche_

Creare uno script PHP che, una volta definite due variabili:

- `$a = 4`
- `$b = 5`
- `$c = 'hello,`
- `$c = ' world!'`

svolga le seguenti operazioni:

- realizzi le sei operazioni aritmetiche `+ - * / % **` sfruttando `$a` come primo operatore e `$b` come secondo; salvare il risultato delle operazioni in una variabile denominata `$res` e commentare a seguito di ogni operazione cosa si sta calcolando (somma, differenza, ...)
- concateni le due stringhe `$c` e `$d` in una variabile denominata `$res`

A seguito di ogni modifica della variabile `$res` stamparne il contenuto mediante il comando `echo`.

NB: per rendere più pulito l'output è opportuno usare l'istruzione `echo $variabile."<br>";` di modo che si concateni un _a capo_ HTML.

## Esercizio 2
_Il costrutto if - else if - else_

Dato lo script precedentemente costruito stampare mediante un costrutto `if- else if - else` quale tra le variabili `$a` e `$b` è la maggiore. In particolare l'utente dovrà vedere stampata la frase `La variabile b è la maggiore` se il valore di `$b` e maggiore di quello di `$a` e viceversa.

## Esercizio 3
_Il costrutto while_

Creare uno script PHP che stampi a schermo:

- i primi 100 numeri pari
- i primi 20 termini della [sequenza di Knuth](https://it.wikipedia.org/wiki/Shell_sort#Analisi) per l'algoritmo Shell sort. _soluzione: la successione parte con 1 e vede ogni elemento successivo il triplo del precedente addizionato di 1, dunque i primi termini saranno 1, 4, 13, 40, ..._

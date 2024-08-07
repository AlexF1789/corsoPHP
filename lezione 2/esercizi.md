Esercizi
===
_Lezione 2:_ i vettori in PHP

Per affrontare i seguenti esercizi potrebbero essere utili le slide e eventuale documentazione reperita online.


## Esercizio 1
_creazione di un vettore classico tramite un ciclo for_

Creare uno script PHP che inizializzi un vettore classico secondo le seguenti specifiche:

- la dimensione deve essere pari a N=25
- alla posizione 0 deve contenere N
- alla posizione i deve contenere N-i
- alla posizione N deve contenere 0

NB: per la creazione dello stesso si dovrà utilizzare un ciclo for (o al massimo un ciclo while, è sbagliato dichiararlo a mano).

## Esercizio 2
_creazione di un vettore associativo_

Creare in uno script PHP un vettore associativo secondo le seguenti specifiche:

- il nome è `$province`
- le chiavi sono delle stringhe di due caratteri maiuscoli che rappresentano una sigla di provincia
- il valore associato a ogni chiave deve essere il nome della provincia corrispondente con la prima lettera maiuscola e il resto della stringa minuscola
- la dimensione del vettore è 5

Ordinare ora tale vettore in base ai valori e stamparne il contenuto mediante un ciclo foreach sfruttando una struttura HTML a piacere (tabella, elenco puntato, paragrafi, ...)

## Esercizio 3
_combinazione di vettori_

Creare in uno script PHP due vettori classici contenenti rispettivamente delle matricole (codici numerici di 6 cifre) e dei nomi composti da una singola stringa contenente cognome e nome di 5 studenti; naturalmente i nomi possono essere creati a caso.

Usare ora la funzione `array_combine` per ottenere una vettore associativo che associ a ogni matricola il rispettivo studente. Ordinare dunque per chiavi e stampare i risultati in una tabella ordinando per matricola crescente.

## Esercizio 4: svolto
_fusione di due vettori in una struttura dati complessa_

Creare uno script PHP contenente un vettore classico denominato `$libri` contenente i titoli di almeno 5 libri a piacere (anche inventati). Creare dunque un vettore denominato `$autori` contenente nell'ordine corrispondente gli autori dei libri inseriti nel vettore creato in precedenza.

NB: è importante che in almeno un caso sia presente lo stesso autore per almeno 2 libri.

Fondere ora il primo vettore con il secondo in una struttura dati denominata `$autori_libri` così costruita:

- è un vettore associativo con chiavi i nomi degli autori (pertanto non potranno essere ripetuti)
- a ogni autore viene associato un vettore inizialmente vuoto
- iterando sul vettore `$libri` e sul vettore `$autori` contemporaneamente (conviene dunque iterare sugli indici) si aggiunge il libro al vettore associato al corrispondente autore

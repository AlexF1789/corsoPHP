Esercizi di base
===

Questa serie di esercizi di difficoltà (e competenze richieste) crescente è da intendersi come materiale propedeutico al corso. Gli esercizi riportati possono essere svolti in qualunque linguaggio di programmazione (o volendo anche usando strutture per l'espressione di algoritmi quali diagrammi di flusso o pseudocodice).

La **competenza** sviluppata in questi esercizi è il **problem solving** di semplici problemi di stampo perlopiù matematico o comunque inerente alla logica di base.

# 1 - problemi con variabili
In questi esercizi si lavora con variabili scalari (non vettori) e utilizzando costrutti semplici che si basano sul confronto numerico e/o alfabetico di valori.

## 1. Proporzioni
_Competenze:_ manipolazione di variabili e numeri

Scrivere un programma che, dato un rapporto (3/4, 6/5, 10/8, ...) ne calcoli il corrispondente rapporto (espresso come numero decimale) nella proporzione _rapporto = 5:1728_. Stampare il risultato a schermo.

## 1. Modulo e radice
_Competenze:_ manipolazione di variabili e numeri

Scrivere un programma che dato un numero ne estragga la radice quadrata, la radice cubica, il quadrato e il cubo. Stampare tutto a schermo.

## 1. Media di 3 voti
_Competenze:_ manipolazione di variabili e numeri, costrutti _if - else if - else_

Scrivere un programma che dati tre voti salvati sotto forma di variabili ne calcoli la media, la stampi e in base alla stessa riporti se lo studente è risultato essere sufficiente o insufficiente. Si può scegliere in autonomia la base della valutazione (per esempio decimi, quindicesimi, trentesimi, ...).

## 1. Equazioni di secondo grado
_Competenze:_ manipolazione di variabili e numeri, costrutti _if - else if - else_

Scrivere un programma che, dati i tre coefficienti di una funzione polinomiale di secondo grado, calcoli le soluzioni della corrispondente equazione di secondo grado associata. Stampare a schermo tali risultati.

## 1. Equazioni di secondo grado con casi particolari
_Competenze:_ manipolazione di variabili e numeri, costrutti _if - else if - else_

Ampliare il programma precedente di modo che riconosca i casi particolari in cui uno dei tre coefficienti (naturalmente escluso quello del termine di secondo grado) sia nullo; stampare anche un messaggio nel caso in cui le soluzioni non siano reali ma complesse.

## 1.

# 2 - problemi con vettori
In questi esercizi è necessario utilizzare i vettori classici come struttura dati d'appoggio.

## 2. Media di N numeri
_Competenze:_ manipolazione di variabili, vettori e numeri, costrutti _if - else if - else_, ciclo _for_

Scrivere un programma che dato un vettore di voti ne calcoli la media e stampi a video se questa è sufficiente o insufficiente.

## 2. Recupero della media
_Competenze:_ manipolazione di variabili, vettori e numeri, costrutti _if - else if - else_, ciclo _for_, ciclo _while_

Date le specifiche del programma precedente aggiungere al vettore di voti il minimo numero di voti sufficienti (6/10, 18/30, ...) per ottenere la media sufficiente. Si noti che non è necessario aggiungere elementi al vettore; provare comunque entrambe le modalità.

## 2. Determinante matrici 2x2
_Competenze:_ manipolazione di variabili, vettori, matrici e numeri

Data una matrice quadrata 2x2 è possibile definirne il determinante come la differenza tra il prodotto degli elementi collocati sulla diagonale principale e il prodotto di quelli collocati sulla diagonale secondaria. Per esempio la matrice [[a, b], [c, d]] ha determinante ad-bc.

Scrivere un programma che data una matrice 2x2 definita come sopra ne calcoli il determinante e stampi a video la matrice stessa indicandone il determinante.

## 2. Sistemi lineari 2x2
_Competenze:_ manipolazione di variabili, vettori, matrici e numeri

Dato un sistema 2x2 scrivere un programma che lo risolva utilizzando il metodo di Cramer.

# 2. Ricerca lineare del massimo e del minimo di un vettore
_Competenze:_ manipolazione di variabili, vettori, matrici e numeri, il ciclo _for_ e i costrutti _if - else if - else_

Dato un vettore di interi stabilirne l'elemento massimo e l'elemento minimo usando un approccio lineare (scandendo uno per uno gli elementi del vettore e aggiornando l'attuale minimo e massimo). Stampare poi tali valori a video.

# 2. Ricerca lineare dell'elemento maggioritario
_Competenze:_ manipolazione di variabili, vettori, matrici e numeri, il ciclo _for_ e i costrutti _if - else if - else_

L'elemento maggioritario di un vettore di N elementi è definito come l'elemento, se esiste, presente almeno N/2 + 1 volte. Per esempio nel vettore [1,2,2,2,1,2,4,2] l'elemento maggioritario è 2 mentre nel vettore [1,2] non esiste elemento maggioritario.

Scrivere un programma che dato un vettore determini se è presente un elemento maggioritario e che, nel caso fosse presente, lo stampi a video.

# 3 - strutture dati complesse
Questi esercizi richiedono l'uso di strutture dati complesse ovvero non fornite in autonomia dal linguaggio di programmazione; dovremo infatti adoperare delle strutture dati create ad hoc sfruttando alcuni principi come l'annidazione (vettori all'interno di vettori) o, eventualmente _oggetti_ (non obbligatoriamente, è comunque possibile usarle se si hanno conoscenze pregresse di programmazione a oggetti).

# 3. media ponderata
_Competenze:_ manipolazione e creazione di vettori annidati

Realizzare un programma che sfruttando la seguente struttura dati ne calcoli 
Corso PHP - lezione A1
===
Lezione A1: Programmazione a oggetti

Link alla videolezione su YouTube

### Disclaimer: lezione aggiuntiva

Questa lezione del corso è una lezione **aggiuntiva** e, in quanto tale, potrebbe non essere richiesta dal programma trattato in aula. È però innegabile che gli argomenti trattati siano decisamente utili per le applicazioni reali.

### Teoria

- richiami di programmazione a oggetti: concetti base e frammenti di codice Java
- i concetti di base: classe, attributo, metodo, costruttore, distruttore, sottoclasse, incapsulamento, livelli di visibilità, override
- l'implementazione del method overload a causa dell'assenza dei tipi
- sintassi e applicazione in PHP dei precedenti concetti

### Esercizio svolto
Costruire in un file **Studente.php** classe PHP denominata _Studente_ che presenti i seguenti attributi privati:

- `$cognome` che sarà una stringa contenente il cognome dello studente
- `$nome` che sarà una stringa contenente il nome dello studente
- `$voti` che sarà un vettore contenente i voti assegnati allo studente

che presenti un costruttore adeguato e che includa i seguenti metodi pubblici:

- `stampaGeneralita()` per stampare cognome, nome e media
- `media()` per calcolare la media partendo dal vettore di voti
- `aggiungiVoto()` per aggiungere un voto al vettore `$voti`
- `aggiungiVoti()` per aggiungere un vettore di voti al vettore `$voti`
- `stampaVoti()` per stampare il vettore di voti

Scrivere inoltre un file **index.php** che, richiedendo il file **Studente.php** effettui dei test di funzionamento sul codice scritto in precedenza.

### Esercizio proposto
A partire dal codice precedentemente scritto aggiungere un file denominato **Docente.php** contenente l'analoga classe _Docente_ che presenti i seguenti attributi:

- `$cognome` che sarà una stringa contenente il cognome del docente
- `$nome` che sarà una stringa contenente il cognome del docente
- `$materia` che sarà una stringa contenente la materia insegnata dal docente

La classe dovrà essere corredata del relativo costruttore e dovrà presentare i seguenti metodi:

- `aggiungiVoto()` che riceve come parametro un oggetto di tipo Studente al quale andrà ad aggiungere al vettore `$voti` un array contenente la materia e il voto; ne segue che la classe _Studente_ dovrà essere modificata relativamente al contenuto del vettore `$voti` che non sarà più un semplice vettore di voti ma un vettore contenente vettori che presentano i campi `voto` e `materia`
- `stampaGeneralita()` che stampa le generalità del docente analogamente a quanto fatto per la classe _Studente_
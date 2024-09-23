Esercizi
===
_Lezione 6:_ le basi di dati e l'integrazione con PHP

Per affrontare i seguenti esercizi potrebbero essere utili le slide ed eventuale documentazione reperita online.

## Esercizio 1
_introduzione a SQL_

Utilizzando phpMyAdmin come mostrato nella spiegazione di teoria importare la base di dati `province.sql` analizzata nell'esercizio svolto in un database denominato _studente_. Premendo ora sul menu di sinistra prima sul database _studente_ e, in seguito, sulla tabella _province_ recarsi sulla scheda **SQL** e, anche utilizzando le query pre-impostate, impostare delle query SQL per svolgere le seguenti operazioni:

- una _SELECT_ per selezionare l'intera tabella
- una _SELECT_ per selezionare i primi 5 risultati
- una _INSERT_ per inserire una riga nella tabella (ricavare i dati da Wikipedia o da altra fonte)
- una _DELETE_ per cancellare la riga precedentemente inserita
- una _UPDATE_ per aggiornare una riga della tabella modificando alcuni dati a piacere

Riportare le query svolte su un file: non saranno recuperabili per la valutazione una volta eseguite.

## Esercizio 2
_cancellazione di tabelle e basi di dati_

Utilizzando phpMyAdmin come mostrato nella spiegazione di teoria recarsi sulla tabella _province_ della base di dati _studente_ utilizzata nell'esercizio svolto e nel primo esercizio di questa lezione.
Utilizzando la scheda **SQL** impostare le seguenti query per cancellare la tabella e/o la base di dati:

- una _DELETE_ per eliminare alcune righe (a piacere) della tabella
- una _TRUNCATE TABLE_ sulla tabella _province_
- una _DROP DATABASE_ sull'intero database _studente_

Riportare le query svolte su un file: non saranno recuperabili per la valutazione una volta eseguite. Cosa cambia tra le query precedenti? Quale è più forte e che differenza c'è tra cancellare tutte le righe di una tabella e troncarla? (_suggerimento: pensa all'ID che si auto-incrementa_).

## Esercizio 3
_utenti_

Utilizzando phpMyAdmin come mostrato nella spiegazione di teoria importare la base di dati `utenti.sql` presente in questo repository in un database denominato _studente_, **NB:** cancellare eventualmente la tabella _province_ utilizzata negli esercizi precedenti mediante il comando SQL `DROP TABLE province` da scrivere nella scheda **SQL** una volta selezionato il database _studente_.

Una volta fatto ciò la base di dati conterrà la tabella _utenti_ così formattata:

- ID - _intero assegnato arbitrariamente come chiave primaria_
- cognome - _stringa che rappresenta il cognome dell'utente_
- nome - _stringa che rappresenta il nome dell'utente_
- indirizzo mail - _stringa che contiene l'indirizzo mail dell'utente_

**NB:** i dati sono assolutamente casuali e non c'è alcuna correlazione intenzionale con persone reali; gli stessi indirizzi mail presentano il dominio fittizio _@example.com_

Creare ora uno script PHP che raccolga i dati di tutti gli utenti in una tabella posta a centro pagina la cui prima riga rappresenta il nome dei campi (possono essere o inseriti manualmente oppure raccolti utilizzando la funzione `array_keys` applicata su un vettore risultato associativo della query).

Il design della pagina viene lasciato alla creatività dello studente.


## Esercizio 4 - svolto
_province_

Utilizzando phpMyAdmin come mostrato nella spiegazione di teoria importare la base di dati `province.sql` presente in questo repository in un database denominato _studente_.
La base di dati contiene una singola tabella denominata **Province** che, a sua volta, contiene i seguenti dati relativi a cinque province:

- ID - _intero assegnato arbitrariamente come chiave primaria_
- nome - _stringa che rappresenta il nome della provincia_
- dimensione - _intero che indica la superficie della provincia in km quadrati_
- regione - _stringa che rappresenta la regione di appartenenza_
- popolazione - _intero che indica la popolazione_
- densita_popolazione - _numero reale (float) che indica la densità di popolazione in ab/kmq_

Una volta caricata creare un'applicazione web che contenga le seguenti pagine:

- _index.php_ ovvero la homepage del sito contenente un elenco puntato con dei link alle province contenute nella base di dati; si noti che le province dovranno essere estratte dalla base di dati mediante una query di tipo _SELECT_ sul campo nomi
- _provincia.php_ ovvero una pagina che mostri i dati relativi alla provincia il cui ID viene passato come parametro GET

Si utilizzi la classe _mysqli_ come interfaccia per accedere alla base di dati come mostrato nella lezione di teoria; la scelta del design della pagina viene lasciato allo studente.

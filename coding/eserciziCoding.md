Esercizi
===
Questa serie di esercizi corrisponde agli esercizi svolti al corso di Coding ed è relativa alla parte di sviluppo di applicazioni web.

Si consiglia vivamente di aver svolto in precedenza gli esercizi _base_ per recuperare eventuali lacune di programmazione. Questi esercizi seguono un taglio completamente diverso e sicuramente più difficile a causa della manipolazione di strutture dati ben più complesse.

## Clinica

Sviluppare un'applicazione web che usi i linguaggi HTML, CSS e PHP per gestire i dati di una clinica medica; i dati che verranno utilizzati sono i seguenti e andranno salvati all'interno di uno script denominato `dati.php`:

```
$prestazioni = [
	'01A8HJ' => [
		'nome' => 'esame del sangue',
		'prezzo' => 25.00
	],

	'8J30K5' => [
		'nome' => 'visita medico-sportiva',
		'prezzo' => 32.50
	],

	'6H3J90' => [
		'nome' => 'ecografia',
		'prezzo' => 130.00 
	],

	'K201G9' => [
		'nome' => 'radiografia',
		'prezzo' => 51.50
	]
];

$pazienti = [
	[
		'paziente' => [
			'cognome' => 'Rossi',
			'nome' => 'Mario',
			'anno_nascita' => 1987
		],

		'prestazioni' => ['01A8HJ', '8J30K5']
	],

	[
		'paziente' => [
			'cognome' => 'Verdi',
			'nome' => 'Bianca',
			'anno_nascita' => 2001
		],

		'prestazioni' => ['K201G9', '8J30K5']
	],

	[
		'paziente' => [
			'cognome' => 'Ferrero',
			'nome' => 'Giorgio',
			'anno_nascita' => 1998
		],

		'prestazioni' => ['K201G9']
	]
];
```

Naturalmente il vettore `$prestazioni` salva al suo interno le prestazioni fornite dalla clinica mentre il vettore `$pazienti` salva al suo interno i dati di ogni paziente insieme alle prestazioni richieste (di cui ne viene salvato solamente il codice univoco).

Creare uno script chiamato `calcolaDati.php` che contenga all'interno le seguenti funzioni:
- `calcolaMax()` che dati come parametri due vettori come da specifiche precedenti restituisca il codice della prestazione più richiesta
- `riassumiPrestazioni()` che dati come parametri due vettori come da specifiche precedenti restituisca un vettore che associa a ogni codice di prestazione un vettore (possibilmente associativo) contenente il nome, il numero di richieste e l'incasso totale
- `calcolaIncasso()` che dati come parametri due vettori come da specifiche precedenti restituisca il ricavo totale

Creare quindi una pagina `index.php` che contenga sotto forma di paragrafo il nome della prestazione più richiesta e il ricavo totale. Successivamente dovrà mostrare una tabella contenente il risultato dell'elaborazione della funzione `riassumiPrestazioni()`.

## Università

Sviluppare un'applicazione web che usi i linguaggi HTML, CSS e PHP per gestire i dati di un'università. Adoperare le seguenti strutture dati:

```
$corsi = [
	'MFN0570' => [
		'nome' => 'Analisi Matematica',
		'CFU' => 9,
		'semestre' => 2,
		'obbligo_frequenza' => false,
		'esame' => [
			'scritto' => true,
			'orale' => false
		]
		'ore' => [
			'teoria' => 48,
			'esercitazione' => 30
		],
		'docenti' => [
			[
				'ID' => 'D003',
				'ruolo' => 'titolare'
			],

			[
				'ID' => 'D004',
				'ruolo' => 'collaboratore'
			]
		]
	],

	'INF0326' => [
		'nome' => 'Architettura degli elaboratori',
		'CFU' => 6,
		'semestre' => 2,
		'obbligo_frequenza' => false,
		'esame' => [
			'scritto' => true,
			'orale' => true
		]
		'ore' => [
			'teoria' => 32,
			'esercitazione' => 20
		],
		'docenti' => [
			[
				'ID' => 'D001',
				'ruolo' => 'titolare'
			],

			[
				'ID' => 'D002',
				'ruolo' => 'collaboratore'
			]
		]
	],

	'INF0348' => [
		'nome' => 'Fondamenti dell'informatica',
		'CFU' => 9,
		'semestre' => 1,
		'obbligo_frequenza' => false,
		'esame' => [
			'scritto' => true,
			'orale' => false
		]
		'ore' => [
			'teoria' => 72,
			'esercitazione' => 0
		],
		'docenti' => [
			[
				'ID' => 'D005',
				'ruolo' => 'titolare'
			]
		]
	],

	'INF0328' => [
		'nome' => 'Matematica Discreta, Algebra e Geometria',
		'CFU' => 12,
		'semestre' => 1,
		'obbligo_frequenza' => false,
		'esame' => [
			'scritto' => true,
			'orale' => false
		]
		'ore' => [
			'teoria' => 64,
			'esercitazione' => 40
		],
		'docenti' => [
			[
				'ID' => 'D003',
				'ruolo' => 'titolare'
			]
		]
	],

	'MFN0582' => [
		'nome' => 'Programmazione 1',
		'CFU' => 9,
		'semestre' => 1,
		'obbligo_frequenza' => false,
		'esame' => [
			'scritto' => true,
			'orale' => false
		]
		'ore' => [
			'teoria' => 48,
			'esercitazione' => 30
		],
		'docenti' => [
			[
				'ID' => 'D002',
				'ruolo' => 'titolare'
			],

			[
				'ID' => 'D001',
				'ruolo' => 'collaboratore'
			]
		]
	],
];

$docenti = [
	'D001' => [
		'cognome' => 'Rossi',
		'nome' => 'Mario',
		'dipartimento' => 'Informatica',
		'ruolo' => 'Dottorando'
	],

	'D002' => [
		'cognome' => 'Verdi',
		'nome' => 'Bianca',
		'dipartimento' => 'Informatica',
		'ruolo' => 'Professoressa ordinaria'
	],

	'D003' => [
		'cognome' => 'Rossini',
		'nome' => 'Tommaso',
		'dipartimento' => 'Matematica',
		'ruolo' => 'Professore Associato'
	],

	'D004' => [
		'cognome' => 'Ferrero',
		'nome' => 'Giorgio',
		'dipartimento' => 'Matematica',
		'ruolo' => 'Docente esterno e/o collaboratore didattico'
	],

	'D005' => [
		'cognome' => 'De Santis',
		'nome' => 'Federica',
		'dipartimento' => 'Informatica',
		'ruolo' => 'Professoressa Ordinaria'
	]
]
```

dove i due vettori contengono rispettivamente i dati circa alcuni insegnamenti erogati e alcuni docenti.

Creare una pagina `dati.php` che contenga i vettori sopra riportati insieme alla definizione delle seguenti funzioni:
- `getDocenti()` che, dato il codice di un corso, ne restituisce sotto forma di vettore i docenti del corso con le relative mansioni
- `getSemestre()` che, dati gli insegnamenti e un intero che rappresenta il semestre (1 o 2) restituisca un vettore contenente gli insegnamenti di tale semestre limitandosi solamente al nome e al codice

Creare quindi una pagina denominata `index.php` che contenga l'indice degli insegnamenti organizzati per semestre dove ogni insegnamento è un link che porta alla pagina `schedaInsegnamento.php` passando come parametro GET il codice del corso

La pagina `schedaInsegnamento.php` che andiamo quindi a creare ora conterrà sotto forma di tabella la scheda riassuntiva dell'insegnamento comprensiva dei docenti del corso con la loro mansione.

## Carte di credito

Sviluppare un'applicazione web indirizzata alla gestione di un circuito di carte di credito che sfrutti come sua base di dati il file `carteCredito.sql` collocato all'interno della cartella _carteCredito_

A partire dallo stesso sviluppare le seguenti pagine:
- `index.php` che fungerà da homepage contenente un form contenente due elenchi tendinda di scelta e due bottoni, il primo menù a tendina riporterà i clienti registrati sotto forma di _COGNOME nome - codice_ mentre il secondo le carte registrate con i loro numeri identificativi; una volta premuto il bottone corrispondente a ciascun menù a tendina si verrà riportati alla pagina scheda corrispondente
- `schedaUtente.php` che fungerà da pagina scheda utente che, ricevendo come parametro GET il codice dell'utente, ne mostrerà tutti i dati con, in formato tabellare, le carte di credito registrate (ciascuna riporterà un link per raggiungere la pagina scheda carta di credito)
- `schedaCarta.php` che fungerà da pagina scheda carta di credito che, ricevendo come parametro GET il codice della carta, ne mostra cognome e nome dell'intestatario (che sarà un link che porta alla scheda utente) insieme ai movimenti della carta in formato tabellare

Provare a determinare in autonomia come avviene il salvataggio delle informazioni nella base di dati; alternativamente consultare il modello ER presente nella cartella _carteCredito_.

## Stazione radiofonica

Una stazione radiofonica vi incarica di creare un portale per gestire le richieste musicali per la programmazione musicale. Tale portale dovrà essere composto dalle seguenti pagine:
- `index.php` che fungerà da homepage e che conterrà in formato tabellare le richieste musicali pervenute fino a quel momento e che conterrà, in cima alla tabella, un form HTML contenente i campi _titolo_, _autore_, _anno_ di eventuali canzoni richieste;
- `inviaRichiesta.php` che si occuperà di salvare la richiesta musicale e che, una volta fatto ciò, reindirizzi l'utente alla pagina `index.php` con uno stato di uscita (errore o successo) che corrisponderà all'invio di una notifica all'utente.

Per creare il portale sarà necessario creare una base di dati opportuna per poi interrogarla nella pagina `index.php` e inserire i dati nella pagina `inviaRichiesta`; provare a creare in autonomia tale base di dati e controllare la corretta base di dati usando il modello ER presente nella cartella _stazioneRadiofonica_.
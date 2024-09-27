Bonus lezione 8
===

Tramite gli script cripta e decripta è possibile passare dal database della lezione 7 al database della lezione 8.

**NB:** prima di farlo occorre ridimensionare la dimensione dei campi del database, per esempio ponendo _cognome_ e _nome_ a 64 caratteri massimi e _mail_ a 128.

Una volta fatto ciò gli script operano come segue:

 - lo script `cripta.php` seleziona tutti gli utenti dalla tabella, ne cripta i dati che ci interessano e tramite una query di update li va a modificare
 - lo script `decripta.php` seleziona tutti i dati e li va a decriptare per ogni utente
# script per generare i dati demo della base di dati

import random
import string
from pprint import pprint

# costanti
NUM_UTENTI = 1000
LEN_CODICE_UTENTE = 8
NUM_CARTE = 1750
LEN_CODICE_CARTA = 10
NUM_MOVIMENTI = 5250

# vettori con dati da scegliere

cognomi = [
    "Rossi",
    "Russo",
    "Ferrari",
    "Esposito",
    "Bianchi",
    "Romano",
    "Colombo",
    "Ricci",
    "Marino",
    "Greco",
    "Bruno",
    "Gallo",
    "Conti",
    "Rizzo",
    "Lombardi",
    "Moretti",
    "Ferraro",
    "Sorrentino",
    "Fontana",
    "Valentini",
    "Giordano",
    "Mancini",
    "Silvestri",
    "Cattaneo",
    "Palumbo",
    "Martini",
    "De Luca",
    "Guerra",
    "Carbone",
    "Barbieri",
    "Fabbri",
    "Santi",
    "Parisi",
    "Pellegrini",
    "Lazzari",
    "Serra",
    "Cappelli",
    "Rinaldi",
    "Marchetti",
    "Della Valle",
    "Grassi",
    "Rovere",
    "Venturi",
    "Battaglia"
]
nomi = [
    "Francesco",
    "Alessandro",
    "Giuseppe",
    "Matteo",
    "Antonio",
    "Giovanni",
    "Lorenzo",
    "Daniele",
    "Marco",
    "David",
    "Gabriele",
    "Nicola",
    "Leonardo",
    "Riccardo",
    "Andrea",
    "Filippo",
    "Tommaso",
    "Emanuele",
    "Federico",
    "Simone",
    "Vincenzo",
    "Giulio",
    "Stefano",
    "Alberto",
    "Raffaele",
    "Massimiliano",
    "Cristiano",
    "Luca",
    "Salvatore",
    "Angelo",
    "Roberto",
    "Pietro",
    "Francesca",
    "Giulia",
    "Martina",
    "Sara",
    "Chiara"
]
caratteri_codice_carte = '0123456789'
caratteri_codice_utente = string.ascii_uppercase + caratteri_codice_carte

# funzioni di generazione codici

def genera_codici(codici, lunghezza, caratteri_possibili):
    valido = False
    codice = ''

    while not valido:
        for _ in range(lunghezza):
            codice += random.choice(caratteri_possibili)
        
        if codice not in codici:
            valido = True
            codici.add(codice)
        else:
            codice = ''

    return codice

def genera_data(futura):
    data = list()

    # aggiungiamo l'anno
    if futura==1:
        # usiamo un anno dal 2025 al 2030
        data.append(str(random.randint(2025,2030)))
    elif futura==0:
        # usiamo un anno dal 1950 al 2006
        data.append(str(random.randint(1950,2006)))
    else:
        data.append(str(random.randint(2020,2023)))


    # aggiungiamo il mese
    data.append(str(random.randint(1,12)))

    # aggiungiamo il giorno
    data.append(str(random.randint(1,28))) # per comodità escludiamo giorni che potrebbero non far parte di mesi, per esempio il 30 febbraio

    for i in range(len(data)):
        if len(data[i]) == 1:
            data[i] = '0'+data[i]

    return '-'.join(data)

def scrivi_utente(utente, file):
    stringa = f"INSERT INTO `utenti`(`codice`, `cognome`, `nome`, `dataNascita`) VALUES ('{utente['codice']}','{utente['cognome']}','{utente['nome']}','{utente['data_nascita']}');"
    file.write(stringa+'\n')

def scrivi_carta(carta, file):
    stringa = f"INSERT INTO `carte`(`codice`, `utente`, `scadenza`) VALUES ('{carta['codice']}','{carta['utente']}','{carta['scadenza']}');"
    file.write(stringa+'\n')

def scrivi_movimento(movimento, file):
    stringa = f"INSERT INTO `movimenti`(`carta`, `importo`, `data`) VALUES ('{movimento['carta']}','{movimento['importo']}','{movimento['data']}');"
    file.write(stringa+'\n')

# generazione degli utenti
utenti_generati = []
codici_utenti_generati = set()

for i in range(NUM_UTENTI):
    utenti_generati.append({
        'codice': genera_codici(codici_utenti_generati,LEN_CODICE_UTENTE,caratteri_codice_utente),
        'cognome': random.choice(cognomi),
        'nome': random.choice(nomi),
        'data_nascita': genera_data(0)
    })


# pprint(utenti_generati)

# generazione delle carte
codici_utenti_generati = list(codici_utenti_generati)
carte_generate = []
codici_carte_generate = set()

for i in range(NUM_CARTE):
    carte_generate.append({
        'codice': genera_codici(codici_carte_generate,LEN_CODICE_CARTA,caratteri_codice_carte),
        'scadenza': genera_data(1),
        'utente': random.choice(codici_utenti_generati)
    })

# pprint(carte_generate)

# generazione dei movimenti
codici_carte_generate = list(codici_carte_generate)
movimenti_generati = list()

for i in range(NUM_MOVIMENTI):
    movimenti_generati.append({
        'carta': random.choice(codici_carte_generate),
        'data': genera_data(2),
        'importo': round(random.random() * 10 ** (random.randint(1,3)),2)
    })

# pprint(movimenti_generati)

# salvataggio in un file
with open('output.sql','w',encoding='utf-8') as file:
    file.write('\n/* UTENTI */\n')

    for utente in utenti_generati:
        scrivi_utente(utente, file)

    file.write('\n/* CARTE */\n')

    for carta in carte_generate:
        scrivi_carta(carta, file)

    file.write('\n/* MOVIMENTI */\n')

    for movimento in movimenti_generati:
        scrivi_movimento(movimento, file)
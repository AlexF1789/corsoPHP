function estraiLibri() {
    // recuperiamo dalla pagina i valori di limit e offset
    let limit = parseInt($('#limit').val())
    let offset = parseInt($('#offset').val())

    // limitiamo il limite massimo a 50 e minimo a 0
    if(limit > 0) {
        if(limit > 50)
            limit = 50
    } else
        limit = 0

    // limitiamo l'offset minimo a 0
    if(offset < 0)
        offset = 0

    // aggiorniamo i campi di testo
    aggiornaLimitOffset(limit, offset)

    // determiniamo il server a cui formulare la richiesta
    switch(parseInt($('#server').val())) {
        case 1:
            server = 'sources/php/getLibri.php'
            break
        case 2:
            server = 'http://localhost:8080/getLibri'
            break
        default:
            server = ''
            window.alert('Errore nella selezione del server!')
            break
    }

    // ricaviamo dal backend l'elenco dei libri in formato JSON
    $.ajax(server, {
        type: 'GET',
        crossDomain: true,
        data: {
            offset: offset,
            limit: limit
        },

        success: (risposta) => {
            // nel caso in cui la richiesta venga evasa con successo (codice di ritorno 200 effettuiamo quanto segue usando il JSON prodotto dalla pagina come risposta)
            if(risposta.esito) {
                // svuotiamo la tabella attuale
                $('#contenutoTabella').empty()

                // per comodità definiamo i campi
                let campi = ['ID', 'titolo', 'autore', 'annoPubblicazione']

                // iteriamo su tutte le righe del vettore data ordinandolo prima per ID crescente
                risposta.data
                .sort((a, b) => a.ID - b.ID)
                .forEach((record) => {
                    $('#contenutoTabella').append('<tr>')

                    campi.forEach((campo) => {
                        $('#contenutoTabella').append('<td>'+record[campo]+'</td>')
                    })

                    $('#contenutoTabella').append('</tr>')
                })

                aggiornaLimitOffset(risposta.limit, risposta.offset)

            } else
                window.alert("Errore nel processare la richiesta")
        },

        error:() => {
            // nel caso in cui la richiesta venga evasa con insuccesso (codici 40x) effettuiamo quanto segue
            window.alert("Errore nell'effettuare la richiesta")
        }
    })
}

function aggiornaLimitOffset(limit, offset) {
    $('#limit').val(limit)
    $('#offset').val(offset)
}

function resetLibri() {
    aggiornaLimitOffset(15, 0)
    estraiLibri()
}

estraiLibri()
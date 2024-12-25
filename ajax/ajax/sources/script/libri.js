function estraiLibri() {
    // mostriamo lo slider di caricamento
    $('#contenitoreCaricamento').empty()
    $('#contenitoreCaricamento').append('<div class="loader"></div>')

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
            // rimuoviamo l'icona di caricamento
            $('#contenitoreCaricamento').empty()

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

            } else {

                // nel caso in cui ottenessimo un esito negativo dal server PHP tentiamo con il server Java, se invece la richiesta fosse già stata
                // inoltrata al serer Java mostriamo un messaggio di errore

                if($('#server').val() == '1') {
                    $('#server').val(2)
                    estraiLibri()
                } else
                    window.alert("Errore nel processare la richiesta")

            }
        },

        error:() => {
            // rimuoviamo l'icona di caricamento
            $('#contenitoreCaricamento').empty()

            // nel caso in cui fallisca la richiesta e questa fosse indirizzata verso il server PHP tentiamo dapprima di inoltrarla al server Java e, nel caso in cui
            // fallisse anche questa, stampiamo un messaggio di errore

            // volendo, passando un parametro alla funzione oppure adoperando la programmazione a oggetti, si potrebbe anche inserire un controllo che
            // provi a invertire il server una volta sola indipendentemente dal server precedentemente selezionato (ora invece stiamo intendendo il
            // server PHP come primario e Java come di backup); se mettessimo in queste condizioni un cambio del server ogni volta otterremo un loop
            // infinito di chiamate alla funzione estraiLibri()

            if($('#server').val() == '1') {
                $('#server').val(2)
                estraiLibri()
            } else
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
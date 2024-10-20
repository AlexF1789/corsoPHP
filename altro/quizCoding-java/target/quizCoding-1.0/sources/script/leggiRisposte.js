const domande = [
    {
        ID: 'everProgrammato',
        type: 'radio_tf',
        label: 'Hai mai programmato?'
    },

    {
        ID: 'solveProblems',
        type: 'radio_tf',
        label: 'Trovi la programmazione un metodo per risolvere problemi?'
    },

    {
        ID: 'languages',
        type: 'checkbox',
        campi: ['C','Java','Python','PHP','HTML','SQL'],
        label: 'Se hai risposto di sì alla domanda precedente, in quali linguaggi hai già programmato? Se non lo hai mai fatto lascia in bianco la risposta'
    },

    {
        ID: 'algoVScode',
        type: 'radio_tf',
        label: 'Ritieni che nell\'atto di programmare sia più importante scrivere codice rispetto a sviluppare un algoritmo efficace (e possibilmente efficiente)'
    },

    {
        ID: 'futureSkill',
        type: 'radio_tf',
        label: 'Ritieni che programmare sarà un\'attività ricercata nel tuo curriculum?'
    },

    {
        ID: 'scaredUni',
        type: 'radio_tf',
        label: 'La presenza di esami attinenti alla programmazione ti rende titubante sulla scelta di un futuro percorso universitario?'
    },

    {
        ID: 'webDeveloped',
        type: 'radio_tf',
        label: 'Hai mai creato un sito web? (anche usando CMS come WordPress, Moodle o Joomla)'
    },

    {
        ID: 'usedCMS',
        type: 'radio_tf',
        label: 'Se sì, hai usato un CMS come WordPress, Moodle, Joomla o altri? Se hai risposto no alla domanda precedente lascia in bianco questa'
    },

    {
        ID: 'knowDB',
        type: 'radio_tf',
        label: 'Hai mai progettato una base di dati o comunque sai a cosa ci si riferisce quando si parla di database? (anche in maniera approssimativa)'
    },

    {
        ID: 'knowCS',
        type: 'radio_tf',
        label: 'Sai cosa significa che un\'architettura di rete è di tipo client-server?'
    },

    {
        ID: 'knowServer',
        type: 'radio_tf',
        label: 'Hai mai sentito parlare di server? Sapresti cosa si intende (anche in maniera approssimativa)?'
    },

    {
        ID: 'knowLinux',
        type: 'radio_tf',
        label: 'Hai mai sentito parlare di Linux?'
    },

    {
        ID: 'knowCrypt',
        type: 'radio_tf',
        label: 'Sai cosa si intende per crittografia (anche vagamente)?'
    },

    {
        ID: 'knowEtE',
        type: 'radio_tf',
        label: 'Sai cosa significa crittografia end-to-end, l\'hai mai letta in qualche app che usi?'
    },

    {
        ID: 'knowHTTPS',
        type: 'radio_tf',
        label: 'Sai cosa significa il lucchetto che compare quando visiti alcuni siti web?'
    }
]

$.ajax('/quizCoding/getRisposte', {
    type: 'POST',
    success: (exit) => {
        if(exit.type == 'OK') {

            let risposte = JSON.parse(exit.data)

            domande.forEach((domanda) => {
                $('#risposte').append(
                    '<div class="container my-5"><div class="row p-4 pb-0 pe-lg-0 py-lg-5 align-items-center rounded-3 border shadow-lg">'+
                    '<h6 class="titoloDomanda">'+domanda.label+'</h6><div class="wrapperGrafico"><canvas id="grafico_'+domanda.ID+'"></canvas></div></div></div>'
                )
            
                let elemento = document.getElementById('grafico_'+domanda.ID)
            
                if(domanda.type == 'radio_tf') {
                    let dati = getTorta(risposte, domanda.ID)
            
                    new Chart(elemento, {
                        type: 'pie',
                        data: {
                            labels: dati.tipo,
                            datasets: [{
                                label: 'completi',
                                data: dati.valori,
                                hoveroffset: 4
                            }]
                        },
                        options: {
                            plugins: {
                                legend: {
                                    position: 'right',
                                    labels: {
                                        font: 'Fira Sans Regular',
                                        padding: 25
                                    }
                                }
                            }
                        }
                    })
                } else {
                    let dati = getPolar(risposte, domanda.ID)
            
                    new Chart(elemento, {
                        type: 'polarArea',
                        data: {
                            labels: dati.tipo,
                            datasets: [{
                                label: 'completi',
                                data: dati.valori,
                                hoveroffset: 4
                            }]
                        },
                        options: {
                            plugins: {
                                legend: {
                                    position: 'right',
                                    labels: {
                                        font: 'Fira Sans Regular',
                                        padding: 25
                                    }
                                }
                            }
                        }
                    })
                }
            })


        } else {
            Swal.fire({
                icon: 'error',
                title: 'Errore nel recuperare i dati!',
                text: 'Si è verificato un errore mentre si cercava di recuperare i dati dal database',
                showConfirmButton: true,
                customClass: {
                    confirmButton: 'btn btn-primary'
                },
                showCloseButton: true
            })
        }
    },
    error: () => {
        Swal.fire({
            icon: 'error',
            title: 'Errore di comunicazione',
            text: 'Si è verificato un errore mentre si cercava di comunicare con la servlet per recuperare i dati dal database',
            showConfirmButton: true,
            customClass: {
                confirmButton: 'btn btn-primary'
            },
            showCloseButton: true
        })
    }
})

function getTorta(risposte, id) {
    let return_finale = {
        tipo: ['Sì','No','ND'],
        valori: [0,0,0]
    }

    risposte.forEach((risposta) => {
        let indice

        if(risposta[id] == 'ND')
            indice = 2
        else
            indice = risposta[id]

        return_finale.valori[indice]++;
    })

    return return_finale
}

function getPolar(risposte, id) {
    let domanda

    domande.forEach((temp) => {
        if(temp.ID == id)
            domanda = temp
    })

    let return_finale = {
        tipo: domanda.campi,
        valori: {}
    }

    for(let i=0;i<return_finale.tipo.length;i++)
        return_finale.valori[return_finale.tipo[i]] = 0

    risposte.forEach((risposta) => {
        risposta[id].forEach((linguaggio) => {
            console.log(linguaggio)
            return_finale.valori[linguaggio]++
        })
    })

    let appoggio = []

    return_finale.tipo.forEach((campo) => {
        appoggio.push(return_finale.valori[campo])
    })

    return_finale.valori = appoggio

    return return_finale
}
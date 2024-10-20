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

function inviaRisposta() {
    let campi = {}

    domande.forEach((domanda) => {
        let risposta

        if(domanda.type == 'open')
            risposta = $('#'+domanda.ID).val()
        else if(domanda.type == 'radio_tf') {
            if(document.getElementById(domanda.ID+'_true').checked)
                risposta = '0'
            else if(document.getElementById(domanda.ID+'_false').checked)
                risposta = '1'
            else
                risposta = 'ND'
        } else if(domanda.type == 'checkbox') {
            risposta = []
            domanda.campi.forEach((campo) => {
                if(document.getElementById(domanda.ID+'_'+campo).checked)
                    risposta.push(campo)
            })
        }
        

        campi[domanda.ID] = risposta
    })

    $.ajax('/quizCoding/inviaRisposta', {
        type: 'POST',
        data: 'data='+JSON.stringify(campi),
        success: (risposta) => {
            if(risposta.type == 'OK') {
                Swal.fire({
                    icon: 'success',
                    title: 'Risposta salvata',
                    text: 'La risposta è stata salvata!',
                    showConfirmButton: true,
                    showCancelButton: false,
                    showCloseButton: true,
                    customClass: {
                        confirmButton: 'btn btn-primary'
                    }
                })
            } else {
                Swal.fire({
                    icon: 'error',
                    title: 'Errore nel salvataggio',
                    text: 'Si è verificato un errore nel salvataggio della tua risposta',
                    showConfirmButton: true,
                    showCancelButton: false,
                    showCloseButton: true,
                    customClass: {
                        confirmButton: 'btn btn-primary'
                    }
                })
            }
        },
        error: () => {
            Swal.fire({
                icon: 'error',
                title: 'Errore nell\'invio',
                text: 'Si è verificato un errore nell\'invio della tua risposta',
                showConfirmButton: true,
                showCancelButton: false,
                showCloseButton: true,
                customClass: {
                    confirmButton: 'btn btn-primary'
                }
            })
        }
    })
}
const express = require('express')
const mariadb = require('mariadb')

const app = express()
const porta = 80

app.use(express.static('static'))
app.use(express.json())

class Database {

    constructor() {
        this.pool = mariadb.createPool({
            host: '127.0.0.1',
            port: 3306,
            user: 'java',
            password: 'java',
            database: 'java'
        })
    }

    async getRisposte() {
        let conn, rows=null

        try {
            conn = await this.pool.getConnection()
            rows = await conn.query('SELECT risposta FROM risposte')
        } catch(err) {
            throw err
        } finally {
            if(conn)
                conn.end()
        }

        return rows
    }

    async inviaRisposta(risposta) {
        let conn, inserimento, esito = false

        try {
            conn = await this.pool.getConnection()
            inserimento = await conn.query("INSERT INTO risposte(risposta) VALUES (?)",[risposta])
        } catch(err) {
            throw err
        } finally {
            if(conn)
                conn.end()
        }

        if(inserimento.affectedRows == 1)
            esito = true

        return esito
    }

    chiudiPool() {
        this.pool.end()
    }

}

app.post('/getRisposte', (req, res) => {
    res.type('application/json')
    let db = new Database()
    let risposta_finale = {
        type: 'KO',
        message: 'ERRDB'
    }

    db.getRisposte().then((risposta) => {
        if(risposta != null) {
            risposta_finale = {
                type: 'OK',
                data: []
            }

            risposta.forEach((riga) => {
                risposta_finale.data.push(JSON.parse(riga.risposta))
            })
        }

        res.send(risposta_finale)

        db.chiudiPool()
    })
})

app.post('/inviaRisposta', (req, res) => {
    res.type('application/json')
    let db = new Database()
    let risposta_finale = {
        type: 'KO',
        message: 'ERRDB'
    }

    console.log('registrata risposta da '+req.ip)

    if(req.body != '') {

        db.inviaRisposta(JSON.stringify(req.body)).then((esito) => {
            if(esito) {
                risposta_finale = {
                    type: 'OK'
                }
            }
            db.chiudiPool()
            res.send(risposta_finale)
        })
    
    } else
        errin(res)
})

app.get('/getRisposte', (req, res) => {
    errin(res)
})

app.get('/inviaRisposta', (req, res) => {
    errin(res)
})

function errin(res) {
    res.type('application/json')
    let risposta_finale = {
        type: 'KO',
        message: 'ERRIN'
    }

    res.send(risposta_finale)
}

app.listen(porta,() => {
    console.log('Server in ascolto sulla porta '+porta)
})
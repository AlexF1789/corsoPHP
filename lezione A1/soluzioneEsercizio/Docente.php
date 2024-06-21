<?php

    // Definizione della classe Docente


    class Docente {
        
        // attributi della classe

        private $cognome, $nome, $materia;

        // costruttore della classe

        function __construct($cognome, $nome, $materia) {
            $this->cognome = $cognome;
            $this->nome = $nome;
            $this->materia = $materia;
        }

        // metodi della classe

        function stampaGeneralita() {
            echo "--- docente ---<br>Cognome: $this->cognome<br>Nome: $this->nome<br>Materia: $this->materia<br>----------------<br><br>";
        }

        function aggiungiVoto($studente, $voto) {
            if($voto<=0 || $voto>10)
                echo "Errore! il voto inserito non è valido!<br>";
            else
                $studente->aggiungiVoto($voto,$this->materia);
        }

    }


?>
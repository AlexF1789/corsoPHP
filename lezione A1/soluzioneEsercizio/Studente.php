<?php

    // Definizione della classe Studente


    class Studente {
        
        // attributi della classe

        private $cognome, $nome, $voti;

        // costruttore della classe

        function __construct($cognome, $nome) {
            $this->cognome = $cognome;
            $this->nome = $nome;

            $this->voti = Array();
        }

        // metodi della classe

        function stampaGeneralita() {
            echo "--- studente ---<br>Cognome: $this->cognome<br>Nome: $this->nome<br>Media: ".$this->media()."<br>----------------<br><br>";
        }

        function media() {
            $somma = 0;

            if(count($this->voti)==0)
                return "nessun voto registrato";
            else {
                
                foreach($this->voti as $voto)
                    $somma += $voto['voto'];

                return number_format($somma/count($this->voti),2,',','');
            }
        }

        function aggiungiVoto($voto,$materia) {
            if($voto<=0 || $voto>10)
                echo "Errore! il voto inserito non è valido!<br>";
            else
                array_push($this->voti,array('voto'=>$voto,'materia'=>$materia));
        }

        function aggiungiVoti($voti) {
            if(!is_array($voti))
                echo "Errore! Puoi chiamare questa funzione solo con un vettore di voti!";
            else {
                foreach($voti as $voto)
                    array_push($this->voti,array('voto'=>$voto,'materia'=>''));
            }
        }

        function stampaVoti() {
            echo "Voti dello studente $this->cognome $this->nome:<br>";

            foreach($this->voti as $voto)
                echo $voto['materia'].": ".$voto['voto']."<br>";

            echo "<br>Media dei voti: ".$this->media()."<br>";
        }

    }


?>
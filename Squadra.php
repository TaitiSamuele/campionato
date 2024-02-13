<?php
    class Squadra{
        private Allenatore $allenatore;
        private $nome;
        private $squadra = array();

        public function __construct($nome, $allenatore){
            $this -> allenatore = $allenatore;
            $this -> nome = $nome;
        }

        public function addPlayer($giocatore){
            array_push($this -> squadra, $giocatore);
        }
        public function removePlayer($giocatore){
            array_pop($this -> squadra, $giocatore);
        }



    }


?>
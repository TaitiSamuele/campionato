<?php
    class Partita{
        private Squadra $casa;
        private Squadra $ospite;
        private $risultato;

        public function __construct(Squadra $squadra1, Squadra $squadra2){
            $this->casa = $squadra1;
            $this->ospite = $squadra2;
        }
    }

?>
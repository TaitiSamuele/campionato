<?php
    class Persona{
        private $nome;
        private $cognome;
        private $eta;

        public function __construct($nome, $cognome, $eta){
            $this->nome = $nome;
            $this->cognome = $cognome;
            $this->eta = $eta;
        }
    }

?>
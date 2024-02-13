<?php
    class Giocatore extends Persona{
        private $ruolo;

        public function __construct($nome, $cognome, $eta, $ruolo){
            parent::__construct($nome, $cognome, $eta);
            $this->ruolo = $ruolo;
        }

        
    }



?>
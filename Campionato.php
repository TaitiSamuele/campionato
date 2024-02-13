<?php 
    class Campionato{
        private $squadre = array();
        private $giornate = array();

        public function __construct($giornate){
            $this->giornate = $giornate;
        }

        public function get_squadre(){
            return $this -> squadre;
        }


    }
?>

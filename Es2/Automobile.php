<?php
require_once("./Veicolo.php");
    class Automobile extends Veicolo{
        protected $modello;

        public function __construct($marca, $anno, $modello){
            $this->modello = $modello;
            parent::__construct($marca, $anno);
        }
        
        function getModello(){
            return $this->modello;
         }

         function setMarca($modello){
            $this->modello = $modello;
         }

    }
?>
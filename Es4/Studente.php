<?php
require_once("./Persona.php");
    class Studente extends Persona{
        protected $matricola;

        function getCoggetMatricola(){
            return $this->matricola;
         }

         function setMatricola($matricola){
            $this->matricola = $matricola;
         }
    }
?>
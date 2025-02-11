<?php
    class Persona{
        protected $nome;
        protected $cognome;

        function getNome(){
            return $this->nome;
         }
            
         function setNome($nome){
            $this->nome = $nome;
         }

         function getCognome(){
            return $this->cognome;
         }
            

         function setCognome($cognome){
            $this->cognome = $cognome;
         }

        function presentati(){
            return "nome: " .  $this ->getNome()  . ", cognome: " . $this ->getCognome();
        }
    }
?>
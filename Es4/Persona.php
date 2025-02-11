<?php
    class Persona implements JsonSerializable{
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

        public function jsonSerialize() : array {
            return [
               'nome' => $this->nome,
               'cognome' => $this->cognome,
            ];
           }
    }
?>
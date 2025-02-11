<?php
    class Alunno{
        protected $nome;
        protected $cognome;
        protected $eta;

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
            

         function getEta(){
            return $this->eta;
         }
            

         function setEta($eta){
            $this->eta = $eta;
         }
             
         function stampa(){
            echo "nome: " .  $this ->getNome()  . ", cognome: " . $this ->getCognome() . ", eta': " . $this ->getEta();
        }
    }

?>
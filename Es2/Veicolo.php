<?php
    class Veicolo{
        protected $marca;
        protected $anno;

        public function __construct($marca, $anno){
            $this->marca = $marca;
            $this->anno = $anno;
        }

        function getMarca(){
            return $this->marca;
         }
            
         function setMarca($marca){
            $this->marca = $marca;
         }

         function getAnno(){
            return $this->anno;
         }
            
         function setAnno($anno){
            $this->anno = $anno;
         }



    }
?>
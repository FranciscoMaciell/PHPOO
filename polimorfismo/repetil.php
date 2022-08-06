<?php
    require_once 'animal.php';
    class Reptil extends Animal{
        private $corEscama;

        function get_corEscama(){
            return $this->corEscama;
        }

        function set_corEscama($e){
            $this->corEscama=$e;
        }

        function locomover(){
            echo "rastejando";
        }

        function alimentar(){
            echo "Come vegetais";
        }

        function emitirSom(){
            echo "Som de reptil";
        }
    }

    class Cobra extends Reptil{
        
    }

    class Tartaruga extends Reptil{
        function locomover(){
            echo "andando bem devagar";
        }
    }
?>
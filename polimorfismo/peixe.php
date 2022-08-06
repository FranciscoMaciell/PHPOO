<?php
    require_once 'animal.php';
    class Peixe extends Animal{
        private $corEscama;

        function get_corEscama(){
            return $this->corEscama;
        }

        function set_corEscama($e){
            $this->corEscama=$e;
        }

        function locomover(){
            echo "Nadando";
        }

        function alimentar(){
            echo "Comendo Substâncias";
        }

        function emitirSom(){
            echo "Peixe não faz sons";
        }

        function soltarBolha(){
            echo "soltor uma bolha";
        }
    }


    class Goldfish extends Peixe{
        
    }
?>
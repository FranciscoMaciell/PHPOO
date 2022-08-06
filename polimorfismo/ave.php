<?php
    require_once 'animal.php';
    class Ave extends Animal{
        private $corPena;

        function get_corPena(){
            return $this->corPena;
        }

        function set_corPena($p){
            $this->corPena=$p;
        }

        function fazerNinho(){
            echo "Fez um ninho";
        }

        function locomover(){
            echo "voando";
        }

        function alimentar(){
            echo "Comendo frutas";
        }

        function emitirSom(){
            echo "som de ave";
        }
    }

    class Arara extends Reptil{
        
    }
?>
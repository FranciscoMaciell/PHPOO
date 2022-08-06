<?php

    require_once 'animal.php';
    class Mamifero extends Animal{
        private $corPelo;

        function get_cor_pelo(){
            return $this->corPelo;
        }

        function set_cor_pelo($c){
            $this->corPelo=$c;
        }

        function locomover(){
            echo "<p>correndo</p>";
        }

        function alimentar(){
            echo "<p>mamando</p>";
        }

        function emitirSom(){
            echo "<p>Som de mamifero</p>";
        }
    }

    class Canguru extends Mamifero{
        function usar_bolsa(){
            echo "<p>Usando bolsa</p>";
        }

        function locomover(){
            echo "<p>Saltando</p>";
        }
    }

    class Cachorro extends Mamifero{
        function enterrarOsso(){
            echo "<p>Enterrando osso</p>";
        }

        function abanarRabo(){
            echo "<p>Abanando o rabo</p>";
        }
    }
?>
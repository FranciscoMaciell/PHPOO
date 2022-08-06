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

    class Lobo extends Mamifero{
        function emitirSom(){
            echo "<p>Auuuuuu!!!</p>";
        }
    }

    class Cachorro extends Lobo{
        function enterrarOsso(){
            echo "<p>Enterrando osso</p>";
        }

        function abanarRabo(){
            echo "<p>Abanando o rabo</p>";
        }
    }

    function reagirFrase($s){
        if($s=="Iai amigão"){
            echo "abanar o rabo";
        }else{
            echo "Levantar as orelhas";
        }
    }

    function reagirhora($h, $m){
        if($h>6&&$h<12&&$m>=00&&$m<60){
            echo "abana o rabo";
        }else if($h>=12&&$h<16&&$m>=00&&$m<60){
            echo "saltar e abanar o rabo";
        }
    }

    function reagirDono($dono){
        if($dono==true){
            echo "Abana o rabo";
        }else{
            echo "rosnar";
        }
    }

    function reagirIdade($id, $p){
        if($id<5){
            if($p<10){
                echo "abanar";
            }else{
                echo "Latir";
            }
        }else{
            if($p<10){
                echo "rosnar";
            }else{
                echo "ignorar";
            }
        }
    }
?>


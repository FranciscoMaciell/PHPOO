<?php
    interface Controlador{
        public function ligar();
        public function desligar();
        public function Menu();
        public function fecharMenu();
        public function maisVol();
        public function menos_Vol();
        public function ligarMudo();
        public function desligarMudo();
        public function play();
        public function pause();
    }
?>
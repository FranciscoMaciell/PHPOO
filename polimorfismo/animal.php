<?php
    abstract class Animal{
        protected $peso, $idade, $membros;

        abstract function locomover();
        abstract function alimentar();
        abstract function emitirSom();

        function get_peso(){
            return $this->peso;
        }

        function set_peso($p){
            $this->peso=$p;
        }

        function get_id(){
            return $this->idade;
        }

        function set_id($i){
            $this->idade=$i;
        }

        function get_membros(){
            return $this->membros;
        }

        function set_membros($m){
            $this->membros=$m;
        }
    }
?>
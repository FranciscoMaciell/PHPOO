<?php
    require_once 'gafanhoto.php';
    abstract class Pessoa{
        protected $nome, $idade, $sexo, $experiencia;

        function __construct($n, $s, $id){
            $this->nome=$n;
            $this->idade=$id;
            $this->sexo=$s;
            $this->experiencia=0;
        }

        protected function ganhar_xp($n){
            $this->experiencia+=$n;
        }

        function get_nome(){
            return $this->nome;
        }

        function set_nome($n){
            $this->nome=$n;
        }

        function get_id(){
            return $this->idade;
        }

        function set_id($i){
            $this->idade=$i;
        }

        function get_sexo(){
            return $this->sexo;
        }

        function set_sexo($s){
            $this->sexo=$s;
        }

        function get_xp(){
            return $this->experiencia;
        }

        function set_xp($x){
            $this->experiencia=$x;
        }
    }
?>
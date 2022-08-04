<?php
    require_once 'interfaceLeitor.php';
    class Pessoa{
        private $nome, $idade, $sexo;

        function niver(){
            $this->set_idade($this->get_idade()+1);
        }

        function __construct($n, $id, $s){
            $this->nome=$n;
            $this->idade=$id;
            $this->sexo=$s;
        }

        function get_nome(){
            return $this->nome;
        }

        function set_nome($n){
            $this->nome=$n;
        }

        function get_idade(){
            return $this->idade;
        }

        function set_idade($id){
            $this->idade=$id;
        }

        function get_sexo(){
            return $this->sexo;
        }

        function set_sexo($s){
            $this->sexo=$s;
        }
    }
?>
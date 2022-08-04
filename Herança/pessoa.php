<?php
    class Pessoas{
        private $nome, $idade, $sexo;

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

        function niver(){
            $this->set_id($this->get_id()+1);
        }
    }
?>
<?php
    require_once 'pessoa.php';
    
    class Gafanhotos extends Pessoa{
        private $login, $totAssistido;

        function __construct($n, $id, $s, $l){
            parent::__construct($n, $s, $id);
            $this->login=$l;
            $this->totAssistido=0;
        }
        
        function get_login(){
            return $this->login;
        }

        function set_login($l){
            $this->login=$l;
        }

        function get_totAssistido(){
            return $this->totAssistido;
        }

        function set_totAssistido($t){
            $this->totAssistido=$t;
        }

        function viuMaisUm(){
            $this->set_totAssistido($this->get_totAssistido()+1);
        }
    }
?>
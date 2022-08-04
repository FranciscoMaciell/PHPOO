<?php
    require_once 'pessoa.php';
    class Funcionario extends Pessoas{
        private $setor, $trabalhando;


        function get_setor(){
            return $this->setor;
        }

        function set_setor($s){
            $this->setor=$s;
        }

        function get_traba(){
            return $this->trabalhando;
        }

        function set_traba($t){
            $this->trabalhando=$t;
        }

        function mudar_trab($tr){
            $this->set_setor(null);
        }
    }
?>
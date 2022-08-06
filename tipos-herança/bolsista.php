<?php
    require_once 'aluno.php';
    class Bolsista extends Aluno{
        private $bolsa;

        function reno_bolsa(){
            echo "<br>A bolsa foi renovada</br>";
        }

        function pagarMensalidade(){
            echo "<br>Menssalidade paga com sucesso com desconto de ".$this->get_bolsa()." para o aluno ". $this->get_nome();
        }

        function get_bolsa(){
            return $this->bolsa;
        }

        function set_bolsa($b){
            $this->bolsa=$b;
        }
    }
?>
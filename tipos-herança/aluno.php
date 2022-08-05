<?php
    require_once 'pessoa.php';

    class Aluno extends Pessoa1{
        private $matricula, $curso;

        function pagarMensalidade(){
            echo "Pagando mensalidade do aluno ". $this->get_nome();
        }

        function get_matr(){
            return $this->matricula;
        }

        function set_matr($m){
            $this->matricula=$m;
        }

        function get_curso(){
            return $this->curso;
        }

        function set_curso($c){
            $this->curso=$c;
        }
    }
?>
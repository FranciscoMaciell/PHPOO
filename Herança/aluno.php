<?php
    require_once 'pessoa.php';
    class Aluno extends Pessoas{
        private $matricula, $curso;

        function cancelar_matr(){
            if($this->get_matr()){
                $this->set_nome(null);
                $this->set_id(null);
                $this->set_sexo(null);
                $this->set_matr(null);
                $this->set_curso(null);
            }
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
<?php

    require_once 'aluno.php';
    class Tecnico extends Aluno{
        private $id_profissional;

        function praticar(){
            echo "assimilado";
        }

        function get_id(){
            return $this->id_profissional;
        }

        function set_id($i){
            $this->id_profissional=$i;
        }
    }
?>
<?php
    require_once 'pessoa.php';
    class Prof extends Pessoas{
        private $especialidade, $salario;

        function get_espec(){
            return $this->especialidade;
        }

        function set_espec($e){
            $this->especialidade=$e;
        }

        function get_sal(){
            return $this->salario;
        }

        function set_sal($s){
            $this->salario=$s;
        }

        function aumento($vlr){
            $this->set_sal($this->get_sal()+($this->get_sal()*$vlr/100));
        }
    }
?>
<?php
    require_once 'pessoa.php';
    class Professor extends Pessoa1{
        private $especialidade, $salario;

        function receberAumento($a){
            echo "Aumento liberado com sucesso:<br>Valor do salario atualizado: ".$this->set_sal($this->get_sal()+($this->get_sal()*$a/100));
        }

        function get_sal(){
            return $this->salario;
        }

        function set_sal($s){
            $this->salario=$s;
        }

        function get_espec(){
            return $this->especialidade;
        }

        function set_espec($e){
            $this->especialidade=$e;
        }
    }
?>
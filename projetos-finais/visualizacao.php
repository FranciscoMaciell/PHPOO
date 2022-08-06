<?php
    require_once 'gafanhoto.php';
    require_once 'pessoa.php';
    require_once 'visualizacao.php';

    class Visual{
        private $espectador, $filme;

        function __construct($e, $f){
            $this->espectador=$e;
            $this->filme=$f;
            $this->filme->set_views=1;
        }

        function get_espec(){
            return $this->espectador;
        }

        function set_espec($e){
            $this->espectador=$e;
        }

        function get_filme(){
            return $this->filme;
        }

        function set_filme($f){
            $this->filme=$f;
        }

        function avaliar(){

        }

        
    }
?>
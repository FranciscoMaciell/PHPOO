<?php
    require_once 'gafanhoto.php';
    require_once 'pessoa.php';
    require_once 'visualizacao.php';

    class Visual{
        private $espectador, $filme;

        function __construct($e, $f){
            $this->espectador=$e;
            $this->filme=$f;
            $this->filme->set_views($this->filme->get_views()+1);
            $this->espectador->set_totassistido($this->espectador->get_totassistido()+1);
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
            $this->filme->set_av(5);
        }

        function avaliarNota($n){
            $this->filme->set_av($n);
        }

        function avaliarPorc($p){
            $nova=0;
            if($p<=20){
                $nova=3;
            }else if($p<=50){
                $nova=5;
            }else if($p<=90){
                $nova=8;
            }else{
                $nova=10;
            }
            $this->filme->set_av($nova);
        }
        
    }
?>
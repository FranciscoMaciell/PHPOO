<?php

    class Caneta{
        private $ponta;
        private $modelo;
        private $tampada;
        private $cor;
        
        public
            function __construct($m, $c, $p, $t){
                $this->modelo=$m;
                $this->cor=$c;
                $this->ponta=$p;
                $this->set_tampada($t);
            }

            function set_tampada(bool $t){
                if($t){
                    $this->tampada=true;
                }else{
                    $this->tampada=false;
                }
            }

            function get_modelo(){
                return $this->modelo;
            }

            function set_modelo($m){
                $this->modelo=$m;
            }

            function get_ponta(){
                return $this->ponta;
            }

            function set_ponta($p){
                $this->ponta=$p;
            }

            function get_cor(){
                return $this->cor;
            }

            function set_cor($c){
                $this->cor=$c;
            }
    }
?>
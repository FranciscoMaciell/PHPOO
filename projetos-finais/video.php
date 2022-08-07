<?php
    require_once 'interface.php';
    class Video implements AcoesVideo{
        private $titulo, $avaliação, $views, $curtidas, $reproduzindo;

        function __construct($t){
            $this->titulo=$t;
            $this->avaliação=1;
            $this->views=0;
            $this->curtidas=0;
            $this->reproduzindo=false;
        }

        function play(){
            $this->set_rep(true);
        }

        function pause(){
            $this->set_rep(false);
        }

        function like(){
            $this->set_curtidas($this->get_curtidas()+1);
        }

        function geta_titu(){
            return $this->titulo;
        }

        function set_titu($t){
            $this->titulo=$t;
        }

        function get_av(){
            return $this->avaliação;
        }

        function set_av($a){
            $media=($this->avaliação+$a)/$this->get_views();
            $this->avaliação=$media;
        }

        function get_views(){
            return $this->views;
        }

        function set_views($v){
            $this->views=$v;
        }

        function get_curtidas(){
            return $this->curtidas;
        }

        function set_curtidas($c){
            $this->curtidas=$c;
        }

        function get_rep(){
            return $this->reproduzindo;
        }

        function set_rep($r){
            $this->reproduzindo=$r;
        }
    }
?>
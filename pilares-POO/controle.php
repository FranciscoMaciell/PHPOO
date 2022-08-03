<?php
    class Control{
        private $vol;
        private $lig;
        private $toc;

        public function __construct(){
            $this->vol=50;
            $this->lig=false;
            $this->toc=false;
        }

        public function get_vol(){
            return $this->vol; 
        }

        public function set_vol($v){
            $this->vol=$v;
        }

        public function get_lig(){
            return $this->lig;
        }

        public function set_lig($l){
            $this->lig=$l;
        }

        public function get_toc(){
            return $this->toc;
        }

        public function set_toc($t){
            $this->toc=$t;
        }

        function ligar(){
            if(!$this->get_lig()){
                $this->set_lig(true);
            }else{
                echo "A radio já esta ligado";
            }
        }

        function desligar(){
            if($this->get_lig()){
                $this->set_lig(false);
            }else{
                echo "O radio ja esta desligado";
            }
        }

        function Menu(){
            echo $this->get_lig()."<br>";
            echo $this->get_vol()."<br>";
            echo $this->get_toc()."<br>";
        }

        function maisVol(){
            if($this->get_lig()){
                if($this->get_vol()==100){
                    $this->set_vol(100);
                }else{
                    $this->set_vol($this->get_vol()+5);
                }

                for($i=0; $i<$this->get_vol(); $i++){
                    echo '-';
                }
            }else{
                echo "O radio está desligado";
            }
        }

        function menos_vol(){
            if($this->get_lig()){
                if(!$this->get_vol()){
                    $this->set_vol(0);
                }else{
                    $this->set_vol($this->get_vol()-5);
                }

                for($i=0; $i<$this->get_vol(); $i++){
                    echo '-';
                }
            }else{
                echo "O radio está desligado";
            }
        }

        function ligarMudo(){
            if($this->get_lig()){
                if($this->get_vol()){
                    $this->set_vol(0);
                }else{
                    echo "O radio ja esta mudo";
                }
            }else{
                echo "O radio esta desligado";
            }
        }

        function desligarMudo(){
            if($this->get_lig()){
                if(!$this->get_vol()){
                    $this->set_vol(50);
                }else{
                    echo "O radio não esta mudo";
                }
            }else{
                echo "O radio esta desligado";
            }
        }

        function play(){
            if($this->get_lig()){
                if(!$this->get_toc()){
                    $this->set_toc(true);
                }else{
                    echo "A musica ha esta tocando";
                }
            }else{
                echo "O radio esta desligado";
            }
        }

        function pause(){
            if($this->get_lig()){
                if($this->get_toc()){
                    $this->set_toc(false);
                }else{
                    echo "A musica ja esta em pausa";
                }
            }else{
                echo "O radio esta desligado";
            }
        }
    }
?>
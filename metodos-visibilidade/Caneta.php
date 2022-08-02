<?php
    class Caneta{
        public $modelo;
        public $cor;
        private $ponta;
        protected $carga;
        protected $tampada;

        public function rabiscar(){
            if($this->tampada==true){
                echo "<p>A caneta está tampada</p>";
            }else{
                echo "<p>Estou rabiscando...</p>";
            }
        }

        public function tampar(){
            $this->tampada=true;
        }

        public function destanpar(){
            $this->tampada=false;
        }
    }
?>
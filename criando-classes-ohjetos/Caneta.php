<?php
    class Caneta{
        var $modelo;
        var $cor;
        var $ponta;
        var $carga;
        var $tampada;

        function rabiscar(){
            if($this->tampada==true){
                echo "<p>A caneta está tampada</p>";
            }else{
                echo "<p>Estou rabiscando...</p>";
            }
        }

        function tampar(){
            $this->tampada=true;
        }

        function destanpar(){
            $this->tampada=false;
        }
    }
?>
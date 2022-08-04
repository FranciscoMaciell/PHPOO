<?php
    require_once 'lutador.php';
    class Lutas{
        private $desafiado;
        private $desafiante;
        private $rouds;
        private $aprovada;

        function get_desafiado(){
            return $this->desafiado;
        }

        function set_desafiado($de){
            $this->desafiado=$de;
        }

        function get_desafiante(){
            return $this->desafiante;
        }

        function set_desafiante($de){
            $this->desafiante=$de;
        }

        function get_rounds(){
            return $this->rouds;
        }

        function set_rounds($ro){
            $this->rounds=$ro;
        }

        function get_apr(){
            return $this->aprovada;
        }

        function set_apr($apr){
            $this->aprovada=$apr;
        }

        function marcarLuta($f1, $f2){
            if($f1->get_cat()===$f2->get_cat()&&($f1!=$f2)){
                $this->aprovada=true;
                $this->desafiado=$f1;
                $this->desafiante=$f2;
            }else{
                $this->aprovada=false;
                $this->desafiado=null;
                $this->desafiante=null;
                echo "<br>Esta luta não pode acontecer<br>";
            }
        }

        function lutar(){
            if($this->get_apr()){
                $this->desafiado->apresentar();
                $this->desafiante->apresentar();
                $vencedor=rand(0, 2);

                switch($vencedor){
                    case 0:
                        echo "<br>Empatou!";
                        $this->desafiado->empatarLuta();
                        $this->desafiante->empatarLuta();
                        break;
                    case 1:
                        echo "<br>O vencedor é ".$this->desafiado->get_nome();
                        $this->desafiado->ganharLuta();
                        $this->desafiante->perderLuta();
                        break;
                    case 2:
                        echo "<br>O vencedor é ".$this->desafiante->get_nome();
                        $this->desafiante->ganharLuta();
                        $this->desafiado->perderLuta();
                        break;
                }
            }
        }
    }
?>
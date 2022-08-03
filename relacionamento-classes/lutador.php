<?php
    require_once 'Controlador.php';
    class Lutador implements Lutas{
        private $nome;
        private $nacionalidade;
        private $idade;
        private $altura;
        private $peso;
        private $categoria;
        private $vitorias;
        private $derrotas;
        private $empates;


        function __construct($no, $na, $id, $al, $pe, $vi, $de, $em){
            $this->nome=$no;
            $this->nacionalidade=$na;
            $this->idade=$id;
            $this->altura=$al;
            $this->set_peso($pe);
            $this->vitorias=$vi;
            $this->derrotas=$de;
            $this->empates=$em;
        }

        function get_Nome(){
            return $this->nome;
        }

        function set_Nome($no){
            $this->nome=$no;
        }

        function get_naci(){
            return $this->nacionalidade;
        }

        function set_naci($na){
            $this->nacionalidade=$na;
        }

        function get_id(){
            return $this->idade;
        }

        function set_id($id){
            $this->idade=$id;
        }

        function get_alt(){
            return $this->altura;
        }

        function set_alt($al){
            $this->altura=$al;
        }

        function get_peso(){
            return $this->peso;
        }

        function set_peso($pe){
            $this->peso=$pe;
            $this->set_cat();
        }

        function get_cat(){
            return $this->categoria;
        }

        private function set_cat(){
            if($this->get_peso()<52.2){
                $this->categoria="Invalido";
            }else if($this->get_peso()<=70.3){
                $this->categoria="Peso Leve";
            }else if($this->get_peso()<=83.9){
                $this->categoria="Peso Medio";
            }else if($this->get_peso()<=120.2){
                $this->categoria="Peso Pesado";
            }else{
                $this->categoria="Invalido";
            }
        }

        function get_vit(){
            return $this->vitorias;
        }

        function set_vit($vi){
            $this->vitorias=$vi;
        }

        function get_emp(){
            return $this->empates;
        }

        function set_emp($em){
            $this->empates=$em;
        }

        function get_der(){
            return $this->derrotas;
        }

        function set_der($de){
            $this->derrotas=$de;
        }

        public function apresentar(){
            echo "<br>";
            echo "Entra na arena o lutador ".$this->get_Nome()." do pais ".$this->get_naci()." com idade de ".$this->get_id()." altura igual a ".$this->get_alt()." e peso de ".$this->get_peso()." na categoria ".$this->get_cat()." com ".$this->get_vit()." vitorias e ".$this->get_der()." derrotas e mais ".$this->get_emp()." empates";
        }

        public function status(){
            echo "<br>Lutador: ".$this->get_Nome()."<br>";

            echo "<br>Categoria: ".$this->get_cat();
            echo "<br>Vitorias: ".$this->get_vit();
            echo "<br>Derrotas: ".$this->get_der();
            echo "<br>Empates: ".$this->get_emp();
        }

        public function ganharLuta(){
            $this->set_vit($this->get_vit()+1);
        }

        public function perderLuta(){
            $this->set_der($this->get_der()+1);
        }

        public function empatarLuta(){
            $this->set_emp($this->get_emp()+1);
        }
    }
?>
<?php
    class ContaBanco{
        public $num_Conta;
        protected $tipo;
        private $Nome;
        private $saldo;
        private $status;

        

        public function __construct(){
            $this->saldo=0;
            $this->status=false;
        }

        function getNum_conta(){
            return $this->num_Conta;
        }

        function setNum_conta($nc){
            $this->num_Conta=$nc;
        }

        function get_tipo(){
            return $this->tipo;
        }

        function set_tipo($t){
            $this->tipo=$t;
        }

        function get_name(){
            return $this->Nome;
        }

        function set_Nome($n){
            $this->Nome=$n;
        }

        function get_saldo(){
            return $this->saldo;
        }

        function set_saldo($s){
            $this->saldo=$s;
        }

        function get_status(){
            return $this->status;
        }

        function set_status($t){
            if($t){
                $this->status=$t;
            }else{
                $this->status=$t;
            }
        }
        
        public function abrir_conta($t){
            if($t!="cc"&&$t!="cp"){
                echo "Tipo de conta invalida";
            }else if($t=='cc'||$t=='cp'){
                $this->tipo=$t;
                $this->set_status(true);
                if($t=='cc'){
                    $this->saldo=50;
                }else if($t=='cp'){
                    $this->saldo=150;
                }
            }
        }

        public function fechar_conta(){
            if(!$this->saldo){
                echo "Conta fechada com sucesso";
            }else{
                echo "A conta não pode ser desativada, você possui saldo na conta";
            }
        }

        public function depositar($valor){
            if($this->get_status()){
                $this->set_saldo($this->get_saldo()+$valor);
            }else{
                echo "<p>Conta fechada. Não é possivel depositar</p>";
            }
        }

        public function sacar($sac){
            if($this->get_status()&&$this->saldo>$sac){
                $this->saldo-=$sac;
                echo "Saque efetuado com sucesso:";
                echo "<br>Saldo atualizado R$ {$this->get_saldo()}";

            }else{
                echo "Você não possui saldo suficiente";
                echo "<br>Saldo atualizado R$ {$this->get_saldo()}";
            }
        }

        public function pagarMensal(){
            if($this->get_status()&&$this->get_tipo()=='cc'){
                $this->saldo-=12;
            }else if($this->get_status()&&$this->get_tipo()=='cp'){
                $this->saldo-=20;
            }
        }
    }
?>
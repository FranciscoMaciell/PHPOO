<?php
    require_once 'pessoa.php';
    require_once 'interfaceLeitor.php';

    class Livro implements PessoaLivro{
        private $titulo, $autor, $totPaginas, $pagAtual, $aberto, $leitor;

        function detalhes(){
            echo "<br>Titulo do livro: ".$this->get_titulo();
            echo "<br>Nome do autor: ".$this->get_autor();
            echo "<br>Total de páginas: ".$this->gettot_Paginas();
            echo "<br>Página atual: ".$this->getpag_Atual();
            echo "<br>Atualmente o leito ".$this->get_leitor()->get_nome()." está com o livro ".$this->get_titulo();

        }

        function abrir(){
            if(!$this->get_aberto()){
                $this->set_aberto(true);
            }else{
                echo "O livro já está aberto";
            }
        }

        function fechar(){
            if($this->get_aberto()){
                $this->set_aberto(false);
            }else{
                echo "O livro já está fechado";
            }
        }

        function folhear($p){
            if($this->get_aberto()&&$p<=$this->gettot_Paginas()){
                $this->setpag_Atual($p);
            }else{
                echo "Pagina não encontrada";
            }
        }

        function avançarPag(){
            if($this->getpag_Atual()==$this->gettot_Paginas()){
                echo "Você terminou de ler o livro";
            }else{
                $this->setpag_Atual($this->getpag_Atual()+1);
            }
        }

        function voltarPag(){
            if(!$this->getpag_Atual()){
                echo "Não tem páginas anteriores";
            }else{
                $this->setpag_Atual($this->getpag_Atual()-1);
            }
        }

        function __construct($t, $a, $tot, $l){
            $this->titulo=$t;
            $this->autor=$a;
            $this->totPaginas=$tot;
            $this->aberto=false;
            $this->pagAtual=0;
            $this->leitor=$l;
        }

        function get_titulo(){
            return $this->titulo;
        }

        function set_titulo($t){
            $this->titulo=$t;
        }

        function get_autor(){
            return $this->autor;
        }

        function set_autor($a){
            $this->autor=$a;
        }

        function gettot_Paginas(){
            return $this->totPaginas;
        }

        function settot_Paginas($tot){
            $this->totPaginas=$tot;
        }

        function getpag_Atual(){
            return $this->pagAtual;
        }

        function setpag_Atual($at){
            $this->pagAtual=$at;
        }

        function get_aberto(){
            return $this->aberto;
        }

        function set_aberto($ab){
            $this->aberto=$ab;
        }

        function get_leitor(){
            return $this->leitor;
        }

        function set_leitor($l){
            $this->leitor=$l;
        }
    }
?>
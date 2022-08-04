<?php
    interface PessoaLivro{
        function fechar();
        function abrir();
        function folhear($p);
        function avançarPag();
        function voltarPag();
    }
?>
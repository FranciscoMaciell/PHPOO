<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <pre>
        <?php
            require_once 'pessoa.php';
            require_once 'livro.php';
            $P=array();
            $L=array();

            $P[0]=new Pessoa("Pedro", 24, "Masculino");
            $L[0]=new Livro("PHP Básico", "José da Silva", 300, $P[0]);
            
            print_r($P[0]);
            echo "<br>";
            
            $L[0]->abrir();
            $L[0]->folhear(80);
            $L[0]->avançarPag();
            $L[0]->detalhes();
            print_r($L[0]);
            
        ?>
    </pre>
</body>
</html>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <?php
            require_once 'animal.php';
            require_once 'mamifero.php';
            $M=new Mamifero;
            $C=new Canguru;
            $K=new Cachorro;

            $M->set_peso(5.70);
            $M->set_id(8);
            $M->set_membros(4);
            $M->locomover();
            echo "<br>";
            $M->alimentar();
            echo "<br>";
            $M->emitirSom();

            echo "<br>";

            $C->set_peso(55.30);
            $C->set_id(3);
            $C->set_membros(4);
            $C->locomover();
            echo "<br>";
            $C->alimentar();
            echo "<br>";
            $C->emitirSom();
            echo "<br>";
            $C->usar_bolsa();
        ?>
</body>
</html>
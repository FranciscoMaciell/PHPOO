<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CLASSES E OBJETOS</title>
</head>
<body>
    <pre>
        <?php
            require_once 'Caneta.php';
            $C1=new Caneta;
            $C1->cor="Azul";
            $C1->ponta=0.5;
            $C1->tampada=false;
            $C1->tampar();
            print_r($C1);

            echo "<br>";

            $C2=new Caneta;
            $C2->cor="Vermelha";
            $C2->ponta=1.0;
            $C2->tampada=true;
            
            print_r($C2);
        ?>
    </pre>
</body>
</html>
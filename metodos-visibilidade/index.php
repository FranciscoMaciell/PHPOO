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
            $C1->modelo="Bic Cristal";
            $C1->cor="Azul";
            $C1->tampar();

            print_r($C1);

        ?>
    </pre>
</body>
</html>
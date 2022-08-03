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
            require_once 'controle.php';

            $Controle1=new Control;
            
            $Controle1->ligar();
            $Controle1->play();
            $Controle1->Menu();
            
            
            



        ?>
    </pre>
</body>
</html>
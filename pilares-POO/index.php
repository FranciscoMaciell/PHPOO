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
            echo "<br>";
            $Controle1->desligar();
            $Controle1->maisVol();
            echo "<br>";
            $Controle1->menos_vol();
            echo "<br>";
            $Controle1->menos_vol();
            echo "<br>";
            $Controle1->menos_vol();
            echo "<br>";
            $Controle1->Menu();
            print_r($Controle1);



        ?>
    </pre>
</body>
</html>
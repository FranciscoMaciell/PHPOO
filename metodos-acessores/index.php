<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Metodos acessores</title>
</head>
<body>
    <pre>
        <?php
            require_once 'metodos.php';
            $C1=new Caneta("Compactor", "Preta", 0.7, 1);
            $C2=new Caneta("BIC", "Verde", 0.5, 0);

            print_r($C1);
            echo "<br>";
            print_r($C2);
        ?>
    </pre>
</body>
</html>
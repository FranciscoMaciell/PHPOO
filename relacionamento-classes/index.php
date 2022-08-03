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

        require_once 'lutador.php';
        $L=array();

        $L[0]=new Lutador("Pretty Boy", "França", 31, 1.75, 68.9, 11, 3, 1);

        $L[1]=new Lutador("Putscript", "Brasil", 29, 1.68, 57.8, 14, 2, 3);

        $L[2]=new Lutador("Snapshadow", "EUA", 35, 1.65, 80.9, 12, 2, 1);

        $L[3]=new Lutador("Dead Code", "Austrália", 28, 1.93, 81.6, 13, 0, 2);

        $L[4]=new Lutador("Codedoido", "Eslovaquia", 27, 1.80, 51, 10, 1, 1);
    ?>
</body>
</html>
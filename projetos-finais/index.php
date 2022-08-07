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
            require_once 'video.php';
            require_once 'gafanhoto.php';
            require_once 'visualizacao.php';
            $V=array();
            $G=array();

            $G[0]=new Gafanhotos("Jubileu", 23, "M", "Jub@");
            $G[1]=new Gafanhotos("Creuza", 25, "F", "Cre");
            $G[2]=new Gafanhotos("Teca", 24, "F", "Teca");

            $V[0]=new Video("Aula 01 de POO");
            $V[1]=new Video("Aula 12 de PHP");
            $V[2]=new Video("Aula 15 de HTML5");

            $Vis=array();

            $Vis[0]=new Visual($G[0], $V[1]);
            $Vis[1]=new Visual($G[0], $V[0]);
            $Vis[1]->avaliar();
            
            
            print_r($Vis);
        ?>
    </pre>
</body>
</html>
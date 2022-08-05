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
            require_once 'Visitante.php';
            require_once 'aluno.php';
            //$P1=new Pessoa1;
            $V1=new Visitante;
            $A=new Aluno;

            $A->set_nome("Pedro");
            $A->set_matr(1111);
            $A->set_curso("Informatica");
            $A->set_id(16);
            $A->set_sexo("M");
            print_r($A);
            echo "<br>";
            

        ?>
    </pre>
</body>
</html>
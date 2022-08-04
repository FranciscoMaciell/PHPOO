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
            require_once 'aluno.php';
            require_once 'prof.php';
            require_once 'funcionario.php';
            $P=array();

            $P[0]=new Pessoas();
            $P[1]=new Aluno();
            $P[2]=new Prof();
            $P[3]=new Funcionario();

            $P[1]->set_nome("João Paulo de Sousa");
            $P[1]->set_id(15);
            $P[1]->set_sexo("Masculino");
            $P[1]->set_matr(true);
            $P[1]->set_curso("Ciências da Computação");
            $P[1]->cancelar_matr();

            $P[2]->set_sal(1000);
            $P[2]->aumento(10);
            $P[2]->set_nome("Pedro");
            $P[2]->set_id(35);
            $P[2]->set_sexo("Masculino");
            $P[2]->set_espec("Ciências da Computação");
            $P[2]->niver();

            echo "<br>";
            print_r($P[0]);
            echo "<br>";
            print_r($P[1]);
            echo "<br>";
            print_r($P[2]);
            echo "<br>";
            print_r($P[3]);
            echo "<br>";

        ?>
    </pre>       
</body>
</html>
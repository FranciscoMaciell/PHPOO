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
            require_once 'bolsista.php';
            //$P1=new Pessoa1;
            $V1=new Visitante;
            $A=new Aluno;
            $B=new Bolsista;

            $A->set_nome("Pedro");
            $A->set_matr(1111);
            $A->set_curso("Informatica");
            $A->set_id(16);
            $A->set_sexo("M");

            $A->pagarMensalidade();

            print_r($A);

            $B->set_matr(1112);
            $B->set_nome("Jubileu");
            $B->set_bolsa(12.5);
            $B->set_curso("Administração");
            $B->set_id(17);
            $B->set_sexo("Masculino");

            $B->pagarMensalidade();

            print_r($B);
            echo "<br>";
            

        ?>
    </pre>
</body>
</html>
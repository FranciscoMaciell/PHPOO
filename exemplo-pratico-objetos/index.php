<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHPOO</title>
</head>
<body>
    <pre>
        <?php
            require_once 'banco.php';

            $Cliente1=new ContaBanco;
            $Cliente1->abrir_conta('cc');

            $Cliente1->depositar(300);
            $Cliente1->set_Nome('Francisco');

            $Cliente1->setNum_conta(123);

            $Cliente1->pagarMensal();

            print_r($Cliente1);

            

        ?>
    </pre>
</body>
</html>
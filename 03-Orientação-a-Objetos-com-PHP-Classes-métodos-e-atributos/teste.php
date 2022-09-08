<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <pre>
        <?php
            require 'src/Conta.php';

            $primeiraConta = new Conta();
            $primeiraConta->cpfTitular = '123.456.789-10';
            $primeiraConta->nomeTitular = 'Gilberto Antonio';
            $primeiraConta->saldo = 1530;

            $segundaConta = new Conta();
            $segundaConta->cpfTitular = '987.654.321-00';
            $segundaConta->nomeTitular = 'Patricia Costa';
            $segundaConta->saldo = 5620.30;

            var_dump($primeiraConta);
            var_dump($segundaConta);

        ?>
    </pre>
</body>
</html>


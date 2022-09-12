<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Banco</title>
</head>
<body>
    <pre>
        <?php
        require_once 'src/Conta.php';
        require_once 'src/Titular.php';
        require_once 'src/CPF.php';

        $gilberto = new Titular(new CPF('123.456.789-10'), 'Gilberto Antonio');
        $primeiraConta = new Conta($gilberto);


        //$primeiraConta = new Conta(new Titular(new Cpf(('123.456.789-10'), 'Gilberto Antonio')));
        $primeiraConta->depositar(500);
        $primeiraConta->sacar(300);

        var_dump($primeiraConta);

        echo $primeiraConta->getNome() . "<br>"; 
        echo $primeiraConta->getCpf() . "<br>"; 
        echo $primeiraConta->getSaldo() . "<br>"; 

        $patricia = new Titular(new CPF('987.654.321-20'), 'Patricia Moura');
        $segundaConta = new Conta($patricia);
        var_dump($segundaConta);

        $anaMaria = new Titular(new CPF('035.157.851-50'), 'Ana Maria');
        $terceiraConta = new Conta($anaMaria);
        var_dump($terceiraConta);
        echo Conta::getNumeroDeContas();
        ?>
    </pre>
</body>
</html>
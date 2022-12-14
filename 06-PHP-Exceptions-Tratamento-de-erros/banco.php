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
            require_once 'autoload.php';

            use Alura\Banco\Modelo\Conta\Titular;
            use Alura\Banco\Modelo\Conta\{Conta, ContaCorrente, ContaPoupanca};
            use Alura\Banco\Modelo\Endereco;
            use Alura\Banco\Modelo\CPF;

            $endereco = new Endereco('London', 'Seven Sisters', 'Rolysn rd', '74b');
            $gilberto = new Titular(new CPF('123.456.789-10'), 'Gilberto Antonio', $endereco);
            $primeiraConta = new ContaCorrente($gilberto);


            //$primeiraConta = new Conta(new Titular(new Cpf(('123.456.789-10'), 'Gilberto Antonio')));
            $primeiraConta->depositar(500);
            $primeiraConta->sacar(300);

            var_dump($primeiraConta);

            echo $primeiraConta->getNome() . "<br>"; 
            echo $primeiraConta->getCpf() . "<br>"; 
            echo $primeiraConta->getSaldo() . "<br>"; 

            $patricia = new Titular(new CPF('987.654.321-20'), 'Patricia Moura', $endereco);
            $segundaConta = new ContaPoupanca($patricia);
            var_dump($segundaConta);

            $endereco1 = new Endereco('Goiania', 'Jardim Gramado', 'Dois Rios', '58');
            $anaMaria = new Titular(new CPF('035.157.851-50'), 'Ana Maria', $endereco1);
            $terceiraConta = new ContaCorrente($anaMaria);
            $terceiraConta->depositar(620);
            var_dump($terceiraConta);
            echo Conta::getNumeroDeContas();
        ?>
    </pre>
</body>
</html>
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
            use Alura\Banco\Modelo\Conta\{ContaCorrente, ContaPoupanca, Titular, SaldoInsuficienteException};
            use Alura\Banco\Modelo\{CPF, Endereco};
            
            require_once 'autoload.php';

            $conta = new ContaPoupanca(
                new Titular(
                    new CPF('035.758.658-52'), 
                    'Gilberto Antonio',
                    new Endereco('London', 'Stamford Hill', 'Rolysn Rd', '74')
                )
            );

            $conta->depositar(500);

            try {
                $conta->sacar(600);
            } catch (SaldoInsuficienteException $exception) {
                echo "Voce nao tem saldo para realizar este saque. <br>";
                echo $exception->getMessage() . "<br>";
            }
            
            echo $conta->getSaldo();
        ?>
    </pre>
</body>
</html>
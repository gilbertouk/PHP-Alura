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
            use Alura\Banco\Modelo\Conta\{ContaCorrente, ContaPoupanca, Titular};
            use Alura\Banco\Modelo\{CPF, Endereco};
            
            require_once 'autoload.php';

            $conta = new ContaCorrente(
                new Titular(
                    new CPF('035.758.658-52'), 
                    'Gilberto Antonio',
                    new Endereco('London', 'Stamford Hill', 'Rolysn Rd', '74')
                )
            );

            $conta->depositar(500);
            var_dump($conta);
            echo "<br>";
            $conta->sacar(100);
            var_dump($conta);
            
        ?>
    </pre>
</body>
</html>
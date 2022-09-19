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
            use Alura\Banco\Modelo\Conta\Conta;
            use Alura\Banco\Modelo\Conta\Titular;
            use Alura\Banco\Modelo\CPF;
            use Alura\Banco\Modelo\Endereco;

            require_once 'autoload.php';

            $conta = new Conta(
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
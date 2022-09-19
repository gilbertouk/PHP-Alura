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
            require_once 'autoload.php';
            use Alura\Banco\Service\ControladorDeBonificacoes;
            use Alura\Banco\Modelo\{CPF, Funcionario};

            $umFuncionario = new Funcionario(
                'Vinicius Dias', 
                new CPF('123.456.789-10'),
                'Desenvolvedor',
                1000
            );

            $umaFuncionaria = new Funcionario(
                'Patricia',
                new CPF('987.654.321-10'),
                'Gerente',
                3000
            );

            $controlador = new ControladorDeBonificacoes;
            $controlador->adicionaBonificacaoDe($umFuncionario);
            $controlador->adicionaBonificacaoDe($umaFuncionaria);

            echo $controlador->getTotal();
        ?>
    </pre>
</body>
</html>
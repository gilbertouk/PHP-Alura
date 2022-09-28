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
            use Alura\Banco\Modelo\{CPF};
            use Alura\Banco\Modelo\Funcionario\{Funcionario, Gerente, Diretor, Desenvolvedor, EditorVideo};

            $umFuncionario = new Desenvolvedor(
                'Vinicius Dias', 
                new CPF('123.456.789-10'),
                1000
            );

            $umFuncionario->sobeDeNivel();

            $umaFuncionaria = new Gerente(
                'Patricia',
                new CPF('987.654.321-10'),
                3000
            );

            $umDiretor = new Diretor(
                'Ana Paula',
                new CPF('158.359.587-65'),
                5000
            );

            $umEditor = new EditorVideo(
                'Paulo',
                new CPF('235.556.988-85'),
                1500
            );

            $controlador = new ControladorDeBonificacoes;
            $controlador->adicionaBonificacaoDe($umFuncionario);
            $controlador->adicionaBonificacaoDe($umaFuncionaria);
            $controlador->adicionaBonificacaoDe($umDiretor);
            $controlador->adicionaBonificacaoDe($umEditor);

            echo $controlador->getTotal();
        ?>
    </pre>
</body>
</html>
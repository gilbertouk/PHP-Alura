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

$primeiraConta = new Conta('123.456.789-10', 'Gilberto Antonio');
        $primeiraConta->depositar(500);
        $primeiraConta->sacar(300);

        var_dump($primeiraConta);
        $primeiraConta->depositar(300);

        var_dump($primeiraConta);

        echo $primeiraConta->getSaldo() . "<br>";
        $primeiraConta->setNomeTitular('Lethicia Alvares da Silva');

        var_dump($primeiraConta);
        ?>
    </pre>
</body>
</html>
<?php

    use Alura\Banco\Modelo\CPF;
    use Alura\Banco\Modelo\Funcionario\Diretor;
    use Alura\Banco\Service\Autenticador;

    require_once 'autoload.php';

    $autenticador = new Autenticador();
    $umDiretor = new Diretor(
        'Joao da Silva', 
        new CPF('052.154.854-56'),
        10000
    );

    $autenticador->tentaLogin($umDiretor, '1234');

?>
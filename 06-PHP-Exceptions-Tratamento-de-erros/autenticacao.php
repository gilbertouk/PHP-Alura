<?php

use Alura\Banco\Modelo\Conta\Titular;
    use Alura\Banco\Modelo\CPF;
use Alura\Banco\Modelo\Endereco;
use Alura\Banco\Modelo\Funcionario\Diretor;
    use Alura\Banco\Modelo\Funcionario\Gerente;
    use Alura\Banco\Service\Autenticador;

require_once 'autoload.php';

$autenticador = new Autenticador();
$autenticador2 = new Autenticador();
$umGerente = new Gerente(
    'Joao da Silva',
    new CPF('052.154.854-56'),
    10000
);
$umTitular = new Titular(
    new CPF('035.584.564-85'),
    'Jose da Silva',
    new Endereco('Goiania',
    'Gramado',
    'Ruas das Flores',
    '45')
);

$autenticador->tentaLogin($umGerente, '4321');
$autenticador2->tentaLogin($umTitular, 'abcd');
<?php

use Alura\Banco\Modelo\Conta\ContaPoupanca;
use Alura\Banco\Modelo\Conta\Titular;
use Alura\Banco\Modelo\CPF;
use Alura\Banco\Modelo\Endereco;

require_once 'autoload.php';

$contaCorrente = new ContaPoupanca(
    new Titular(new CPF('123.456.789-10'),
        'Gilberto Silva',
        new Endereco('London', 'Downtown', 'Roslyns road', '74')
    )
);

try {
    $contaCorrente->depositar(-100);
} catch (InvalidArgumentException $exception){
    echo "Valor a depositar precisa ser positivo. <br>";
}

echo $contaCorrente->getSaldo();
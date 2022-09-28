<?php

use Alura\Banco\Modelo\Conta\Titular;
use Alura\Banco\Modelo\CPF;
use Alura\Banco\Modelo\Endereco;
use Alura\Banco\Modelo\NomeMuitoCurtoException;

require_once 'autoload.php';

try {
    $umTitular = new Titular(
        new CPF('035.584.564-58'),
        'Jose Rocha',
        new Endereco('Goiania',
            'Gramado',
            'Ruas das Flores',
            '45')
    );
} catch (NomeMuitoCurtoException $exception){
    echo $exception->getMessage();
} catch (InvalidArgumentException $error){
    echo "Formato do CPF Invalido, voce precisa informar o CPF no padrao nascional. <br>";
}
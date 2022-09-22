<?php

    use Alura\Banco\Modelo\Endereco;

    require_once 'autoload.php';

    $umEndereco = new Endereco('Goiania', 'Centro', 'Rua 12', '35');
    $outroEndereco = new Endereco('Jaragua', 'Oeste', 'Rua velha', '44');

    echo $outroEndereco->cidade;
    exit();

    echo $umEndereco . "<br>";
    echo $outroEndereco;

?>
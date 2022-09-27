<?php

    namespace Alura;

    require_once 'autoload.php';

    $correntistas = [
        'Giovanni',
        'Joao',
        'Maria',
        'Luis',
        'Luisa',
        'Rafael',
    ];

    $saldos = [
        2500,
        3000,
        4400,
        1000,
        8700,
        9000
    ];

    $array_associativo = [
        "Giovanni" => 2500,
        "Joao" => 3000,
        "Maria" => 4400,
    ];

    $relacionados = array_combine($correntistas, $saldos);

    $relacionados["Matheus"] = 4500;

    if(array_key_exists("Joao", $relacionados)){
        echo "O saldo de Joao e: {$relacionados["Joao"]}";
    } else {
        echo "Nao foi encontrado";
    }

    $maiores = ArrayUtils::encontrarPessoaComSaldoMaior(3000, $relacionados);

    echo "<pre>";
    var_dump($maiores);
    echo "</pre>";
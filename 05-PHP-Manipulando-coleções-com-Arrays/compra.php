<?php declare(strict_types=1);

namespace Alura;

    require_once 'autoload.php';
    //Removendo do array


    $correntistas_e_compras = [
        "Giovanni",
        "Joao",
        12,
        "Maria",
        25,
        "Luiz",
        "Luisa",
        "12",
    ];

    echo "<pre>";
    var_dump($correntistas_e_compras);

    ArrayUtils::remover(12, $correntistas_e_compras);

    var_dump($correntistas_e_compras);
    echo "</pre>";
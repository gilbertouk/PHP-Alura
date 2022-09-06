<?php
    //PHP consedera apenas strings e numeros inteiros como chave para um array.
    $array = [
        1 => 'a',
        '1' => 'b',
        1.5 => 'c',
        true => 'd'
    ];

    foreach ($array as $value) {
        echo $value . "<br>";
    }

?>

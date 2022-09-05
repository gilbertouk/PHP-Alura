<?php
    //Calcular o IMC atraves da altura e do peso informado, e depois exibir se esta abaixo, acima ou no ideal.
    $peso = 120;
    $altura = 1.84;

    $imc = $peso / ($altura * $altura);

    echo "Seu IMC é de " . number_format($imc, 1) . "<br>";

    if ($imc < 18.5) {
        echo "Magreza";
    } elseif ($imc < 25){
        echo "Normal";
    } elseif ($imc < 30 ) {
        echo "Sobrepeso";
    } elseif ($imc < 35) {
        echo "Obesidade grau I";
    } elseif ($imc < 40) {
        echo "Obesidade grau II";
    } else {
        echo "Obesidade grau III";
    }
?>

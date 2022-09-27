<?php

    require_once 'Calculadora.php';

    $notas = array(8, 5, 9, 7);

    $calculadora = new Calculadora();
    $media = $calculadora->calculaMedia($notas);

    if($media){
        echo "<p>A media e: $media</p>";
    } else {
        echo "<p>Nao foi possivel calcular a media.</p>";
    }
?>
<?php
    //Explode e Implode
    $nomes = "Giovanni, Joao, Maria, Pedro";

    $array_nomes = explode(", ", $nomes);

    foreach ($array_nomes as $nome){
        echo "<p>Ola $nome</p>";
    }

    $nomesJuntos = implode(", ", $array_nomes);

    echo "<p>$nomesJuntos</p>";
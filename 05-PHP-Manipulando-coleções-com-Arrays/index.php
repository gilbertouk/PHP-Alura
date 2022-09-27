<?php

    $notas = array(9, 3, 10, 5, 10);

    echo "<p>A nota de portugues e: $notas[0]</p>";
    echo "<p>A nota de matematica e: $notas[1]</p>";
    echo "<p>A nota de geografia e: $notas[2]</p>";
    echo "<p>A nota de historia e: $notas[3]</p>";
    echo "<p>A nota de quimica e: $notas[4]</p>";

    $quantidadeNotas = sizeof($notas);

    $media = ($notas[0] + $notas[1] + $notas[2] + $notas[3] + $notas[4]) / $quantidadeNotas;

    echo "<p>A media e: $media</p>";
?>
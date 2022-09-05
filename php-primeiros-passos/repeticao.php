<?php
    $contador = 1;

    echo "usando while! <br>";
    while ($contador <= 15) {
        echo "# $contador <br>";
        $contador ++;
    }

    echo "<br>";

    echo "usado for! <br>";
    for ($c = 1; $c <= 15; $c++) {
        echo "# $c <br>";
    }

    echo "<br>";
    echo "Pulando um contador no for! <br>";
    for ($c = 1; $c <= 15 ; $c++) {
        if($c == 13){
          continue;
        }
        echo "# $c <br>";
    }
?>

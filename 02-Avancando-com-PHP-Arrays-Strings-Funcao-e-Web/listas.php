<?php
    $idadeList = [21, 23, 19, 25, 30, 41, 18];

    $idadeList[7] = 20;

    $idadeList[count($idadeList)] = 38;

    //Forma mais facil de adicionar um item no array sequencial, o PHP ja coloca o valor informado no ultimo array disponivel
    $idadeList[] = 47;

    foreach ($idadeList as $idade) {
        echo $idade . "<br>";
    }
?>

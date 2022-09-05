<?php
    $conta1 = [
        'titular' => 'Vinicius',
        'saldo' => 1000
    ];

    $conta2 = [
        'titular' => 'Maria',
        'saldo' => 10000
    ];

    $conta3 = [
        'titular' => 'Gilberto',
        'saldo' => 530
    ];

    $contasCorrentes = [$conta1, $conta2, $conta3];

    for ($i=0; $i < count($contasCorrentes); $i++) {
        echo $contasCorrentes[$i]['titular'] . " - R$ " . number_format($contasCorrentes[$i]['saldo'],2) . "<br>";
    }
?>

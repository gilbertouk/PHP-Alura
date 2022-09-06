<?php
    $contasCorrentes = [
         5118581554 => [
            'titular' => 'Vinicius',
            'saldo' => 1000
         ],
         5118581555 => [
            'titular' => 'Maria',
            'saldo' => 10000
         ],
         5118581557 => [
            'titular' => 'Gilberto',
            'saldo' => 530
         ]
    ];

    foreach ($contasCorrentes as $cpf => $conta) {
      echo $cpf . " - " . $conta['titular'] . " - " . $conta['saldo'] . "<br>";
    }
?>

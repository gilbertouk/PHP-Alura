<?php
    $contasCorrentes = [
         '511.858.155-34' => [
            'titular' => 'Vinicius',
            'saldo' => 1000
         ],
         '511.858.155-55' => [
            'titular' => 'Maria',
            'saldo' => 10000
         ],
         '511.858.155-37' => [
            'titular' => 'Gilberto',
            'saldo' => 530
         ]
    ];

    $contasCorrentes['511.858.155-55']['saldo'] -= 500;

    foreach ($contasCorrentes as $cpf => $conta) {
      echo $cpf . " - " . $conta['titular'] . " - " . $conta['saldo'] . "<br>";
    }
?>

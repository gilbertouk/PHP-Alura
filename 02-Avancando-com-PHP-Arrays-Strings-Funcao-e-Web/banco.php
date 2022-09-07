<?php

    function sacar($conta, $valorSaque){
        if($valorSaque > $conta['saldo']){
            exibeMensagem("Voce nao pode sacar");
        } else {
            $conta['saldo'] -= $valorSaque;
        }
        return $conta;
    }

    function exibeMensagem($mensagem) {
        echo $mensagem . "<br>";
    }

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
            'saldo' => 430
         ]
    ];

    $contasCorrentes ['511.858.155-55'] = sacar($contasCorrentes['511.858.155-55'], 500);
    $contasCorrentes ['511.858.155-37'] = sacar($contasCorrentes['511.858.155-37'], 500);

    /*
    if(500 > $contasCorrentes['511.858.155-55']['saldo']){
          exibeMensagem("Voce nao pode sacar");
    } else {
          $contasCorrentes['511.858.155-55']['saldo'] -= 500;
    }

    if(500 > $contasCorrentes['511.858.155-37']['saldo']){
          exibeMensagem("Voce nao pode sacar");
    } else {
          $contasCorrentes['511.858.155-55']['saldo'] -= 500;
    }
    */

    foreach ($contasCorrentes as $cpf => $conta) {
      exibeMensagem($cpf . " - " . $conta['titular'] . " - " . $conta['saldo']);
    }
?>

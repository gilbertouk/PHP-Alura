<?php
    require_once 'funcoes.php';

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

    $contasCorrentes['511.858.155-55'] = sacar($contasCorrentes['511.858.155-55'], 500);
    $contasCorrentes['511.858.155-37'] = sacar($contasCorrentes['511.858.155-37'], 200);


    $contasCorrentes['511.858.155-34'] = depositar($contasCorrentes['511.858.155-34'], 200);

    titularComLetrasMaisculas($contasCorrentes['511.858.155-37']);

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
    unset($contasCorrentes['511.858.155-34']);

    echo "<ul>";
    foreach ($contasCorrentes as $cpf => $conta) {
      //exibeConta($conta);
      //list('titular' => $titular, 'saldo' => $saldo) = $conta;
      //['titular' => $titular, 'saldo' => $saldo] = $conta;
      //exibeMensagem("$cpf - {$conta['titular']} - {$conta['saldo']}");
      //exibeMensagem("$cpf - $conta[titular]  - $conta[saldo]");
      //exibeMensagem("$cpf - " . $conta['titular'] . " - " . $conta['saldo']);
    }
    echo "</ul>";
?>
<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Document</title>
</head>
<body>
      <h1>Contas Correntes</h1>

      <dl>
            <?php foreach($contasCorrentes as $cpf => $conta){ ?>
            <dt>
                  <h3><?= $conta['titular']; ?> - <?= $cpf; ?></h3>
            </dt>
            <dd>
                  Saldo: <?= number_format($conta['saldo'], 2); ?>
            </dd>
            <?php } ?>
      </dl>
</body>
</html>

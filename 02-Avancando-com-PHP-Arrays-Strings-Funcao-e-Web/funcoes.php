<?php
    function sacar(array $conta, float $valorSaque) : array
    {
        if($valorSaque > $conta['saldo']){
            exibeMensagem("Voce nao pode sacar");
        } else {
            $conta['saldo'] -= $valorSaque;
        }
        return $conta;
    }
    function depositar(array $conta, float $valorDeposito) : array
    {
        if($valorDeposito > 0){
            $conta['saldo'] += $valorDeposito;
        } else {
            exibeMensagem("Voce nao pode depositar valores negativos!");
        }
        return $conta;
    }
    function exibeMensagem($mensagem)
    {
        echo $mensagem . "<br>";
    }
    function titularComLetrasMaisculas(array &$conta)
    {
        $conta['titular'] = mb_strtoupper($conta['titular']);
    }
    function exibeConta(array $conta)
    {
        ['titular' => $titular, 'saldo' => $saldo] = $conta;
        echo "<li>Titular: {$conta['titular']} Saldo: {$conta['saldo']}</li>";
        
    }
?>

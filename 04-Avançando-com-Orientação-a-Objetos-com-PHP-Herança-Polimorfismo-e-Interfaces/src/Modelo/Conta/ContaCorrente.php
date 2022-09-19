<?php
    namespace Alura\Banco\Modelo\Conta;

    class ContaCorrente extends Conta
    {
        protected function percentualTarifa(): float
        {
            return 0.05;
        }
        public function transferir(float $valorATarnsferir, Conta $contaDestino): void
        {
            if($valorATarnsferir > $this->saldo){
                echo "Saldo Indisponivel!<br>";
                return;
            }
            $this->sacar($valorATarnsferir);
            $contaDestino->depositar($valorATarnsferir);            
        }
    }
?>
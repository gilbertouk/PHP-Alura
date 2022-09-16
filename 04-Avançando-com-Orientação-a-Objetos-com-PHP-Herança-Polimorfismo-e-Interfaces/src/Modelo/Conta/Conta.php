<?php

    namespace Alura\Banco\Modelo\Conta;

    class Conta
    {
        // definir dados da conta
        private Titular $titular;
        private float $saldo;
        private static $numeroDeContas;

        public function __construct(Titular $titular)
        {
            $this->titular = $titular;
            $this->saldo = 0;
            self::$numeroDeContas++;
        }
        public function __destruct()
        {
            self::$numeroDeContas--;
        }
        public function getSaldo(): float
        {
            return $this->saldo;
        }
        public function getNome(): string
        {
            return $this->titular->getNome();
        }
        public function getCpf(): string
        {
            return $this->titular->getCpf();
        }
        public function sacar(float $valorASacar): void
        {
            if($valorASacar > $this->saldo){
                echo "Saldo Indisponivel!<br>";
                return;
            }
            $this->saldo -= $valorASacar;            
        }
        public function depositar(float $valorADepositar): void
        {
            if($valorADepositar < 0){
                echo "Valor precisa ser positivo!<br>";
                return;
            }
            $this->saldo += $valorADepositar;
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
        public static function getNumeroDeContas(): int
        {
            return self::$numeroDeContas;
        }   
    }
?>
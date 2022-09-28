<?php

    namespace Alura\Banco\Modelo\Conta;

    abstract class Conta
    {
        // definir dados da conta
        private Titular $titular;
        protected float $saldo;
        private static $numeroDeContas = 0;
        
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
            $tarifaSaque = $valorASacar * $this->percentualTarifa();
            $valorSaque = $valorASacar + $tarifaSaque;
            if($valorSaque > $this->saldo){
                throw new SaldoInsuficienteException($valorSaque, $this->saldo);
            }
            $this->saldo -= $valorSaque;            
        }
        public function depositar(float $valorADepositar): void
        {
            if($valorADepositar < 0){
                echo "Valor precisa ser positivo!<br>";
                return;
            }
            $this->saldo += $valorADepositar;
        }        
        public static function getNumeroDeContas(): int
        {
            return self::$numeroDeContas;
        }
        abstract protected function percentualTarifa(): float;        
    }
?>
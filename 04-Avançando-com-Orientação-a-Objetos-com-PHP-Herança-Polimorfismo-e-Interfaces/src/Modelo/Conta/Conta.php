<?php

    namespace Alura\Banco\Modelo\Conta;

    class Conta
    {
        // definir dados da conta
        private Titular $titular;
        private float $saldo;
        private static $numeroDeContas = 0;
        /** 
        * @var int $tipo = Conta Corrente; 2 = Poupanca
        */
        private int $tipo;

        public function __construct(Titular $titular, int $tipo)
        {
            $this->titular = $titular;
            $this->saldo = 0;
            $this->tipo = $tipo;
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
            if($this->tipo === 1){
                $tarifaSaque = $valorASacar * 0.05;
            } else {
                $tarifaSaque = $valorASacar * 0.03;
            }            
            $valorSaque = $valorASacar + $tarifaSaque;
            if($valorSaque > $this->saldo){
                echo "Saldo Indisponivel!<br>";
                return;
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
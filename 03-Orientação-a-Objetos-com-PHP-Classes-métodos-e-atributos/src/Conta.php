<?php
    class Conta
    {
        // definir dados da conta
        private  $cpfTitular;
        private  $nomeTitular;
        private  $saldo;

        public function __construct(string $cpfTitular, string $nomeTitular)
        {
            $this->cpfTitular = $cpfTitular;
            $this->nomeTitular = $nomeTitular;
            $this->saldo = 0;
        }
        public function getCpfTitular(): string
        {
            return $this->cpfTitular;
        }
        public function getNomeTitular(): string
        {
            return $this->nomeTitular;
        }
        public function getSaldo(): float
        {
            return $this->saldo;
        }
        public function setCpfTitular(string $cpfTitular): void
        {
            $this->cpfTitular = $cpfTitular;
        }
        public function setNomeTitular(string $nomeTitular): void
        {
            $this->nomeTitular = $nomeTitular;
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
    }
?>
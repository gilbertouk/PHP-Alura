<?php
    namespace Alura\Banco\Service;

    use Alura\Banco\Modelo\Funcionario\Funcionario;

    class ControladorDeBonificacoes
    {
        private float $totalBonificacoes = 0;

        public function adicionaBonificacaoDe(Funcionario $funcionario)
        {
            $this->totalBonificacoes += $funcionario->calcularBonificacao();
        }
        public function getTotal(): float
        {
            return $this->totalBonificacoes;
        }
    }
?>
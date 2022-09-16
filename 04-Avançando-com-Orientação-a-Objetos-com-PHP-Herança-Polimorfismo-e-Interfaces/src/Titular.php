<?php 
    //titular e uma Pessoa
    class Titular extends Pessoa
    {
        private Endereco $endereco;
        
        public function __construct(CPF $cpf, string $nome, Endereco $endereco)
        {
            $this->cpf = $cpf;
            $this->validaNomeTitular($nome);
            $this->nome = $nome;
            $this->endereco = $endereco;
        }
        public function getEndereco(): Endereco
        {
            return $this->endereco;
        }
    }
?>
<?php

namespace Alura\Banco\Modelo;

abstract class Pessoa
{
    use GetPropriedades;
        
    protected string $nome;
    private CPF $cpf;

    public function __construct(string $nome, CPF $cpf)
    {
        $this->validaNome($nome);
        $this->nome = $nome;
        $this->cpf= $cpf;
    }
    public function getNome():string
    {
        return $this->nome;
    }
    public function getCpf(): string
    {
        return $this->cpf->getCpf();
    }
    final protected function validaNome(string $nomeTitular): void
    {
        if(strlen($nomeTitular) < 5){
            throw new NomeMuitoCurtoException($nomeTitular);
        }
    }
}
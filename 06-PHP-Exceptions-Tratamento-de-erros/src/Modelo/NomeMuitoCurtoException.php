<?php

namespace Alura\Banco\Modelo;

class NomeMuitoCurtoException extends \DomainException
{
    public function __construct(string $nome)
    {
        $mensagem = "O nome que voce informou \"$nome\" precisa ter pelo menos 5 caracteres";
        parent::__construct($mensagem);
    }
}
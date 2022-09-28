<?php

    namespace Alura\Banco\Modelo;

    trait GetPropriedades
    {
        public function __get($nomeAtributo)
        {
            $metodo = 'get' . ucfirst($nomeAtributo);
            return $this->$metodo();
        }
    }
?>
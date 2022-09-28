<?php

    class MinhaExcecao extends Exception
    {
        public function exibeMensagem()
        {
            echo "Mensagem da Excecao!";
        }
    }

    try {
        throw new MinhaExcecao();
    } catch (MinhaExcecao $e){
        $e->exibeMensagem();
    }
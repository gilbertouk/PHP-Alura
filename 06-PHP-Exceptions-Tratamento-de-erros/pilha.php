<?php
    function funcao1()
    {
        echo "Entrei na funcao 1 <br>";
        try {

            $arrayFixo = new SplFixedArray(2);
            $arrayFixo[3] = 'Valor';
            /*$divisao = intdiv(5, 0);*/
        } catch (RuntimeException $problema){
            echo "Aconteceu um erro na funcao 1. <br>";
            echo $problema . "<br>";
        }
        funcao2();
        echo "Saindo da funcao 1 <br>";
    }

    function funcao2()
    {
        echo "Entrei na funcao 2 <br>";
        for($i = 1; $i <= 5; $i++){
            echo "$i <br>";
        }
        echo "Saindo da funcao 2 <br>";
    }

    echo "Iniciando o programa principal.<br>";
    funcao1();
    echo "Finalizando o programa principal.<br>";
<?php
    function funcao1()
    {
        echo "Entrei na funcao 1 <br>";
        try {
            funcao2();
        } catch (RuntimeException | DivisionByZeroError $problema){
            echo $problema->getMessage() . "<br>";
            echo $problema->getLine() . "<br>";
            echo $problema->getTraceAsString() . "<br>";
        }

        /* catch (DivisionByZeroError $erro){
            echo "Erro ao dividir um numero por 0. <br>";
        } */

        echo "Saindo da funcao 1 <br>";
    }

    function funcao2()
    {
        echo "Entrei na funcao 2 <br>";

        $arrayFixo = new SplFixedArray(2);
        $arrayFixo[2] = 'Valor';
        $divisao = intdiv(5, 0);

        for($i = 1; $i <= 5; $i++){
            echo "$i <br>";
        }
        echo "Saindo da funcao 2 <br>";
    }

    echo "Iniciando o programa principal.<br>";
    funcao1();
    echo "Finalizando o programa principal.<br>";
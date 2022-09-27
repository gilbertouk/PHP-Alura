<?php declare(strict_types=1);

namespace Alura;

//Removendo do array
class ArrayUtils
{
    public static function remover(int $elemento, array &$array)
    {
        $posicao = array_search($elemento, $array, true);
        if(is_int($posicao)) {
            unset($array[$posicao]);
        } else {
            echo "<p>Nao foi encontrado \"$elemento\" no array.</p>";
        }
    }
}
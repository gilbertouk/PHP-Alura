<?php

namespace Alura\Pdo\Infrastructure\Persistence;

use PDO;

class ConnectionCreator
{
    public static function createConnection(): PDO
    {
        /**
         * DADOS DE CONEXAO PARA O BANCO SQLITE
         *
         * $databasePath = __DIR__ . '/../../../banco.sqlite';
         * $connection = $pdo = new PDO('sqlite:' . $databasePath);
         *
        */

        $connection = new PDO('mysql:host=192.168.0.250:3306;dbname=bd_alura', 'gilberto', '123456');
        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $connection->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

        return $connection;
    }
}
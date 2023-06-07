<?php

namespace Alura\Pdo\Infrastructure\Persistence;

use PDO;

class ConnectionCreator
{
    //static creation method
    public static function createConnection(): PDO
    {
        $dataBasePath = __DIR__ . '/../../../banco.sqlite';
        $connection = new PDO(dsn: 'sqlite:' . $dataBasePath);

        /*$connection = new PDO(
            'mysql:host=172.17.0.2:dbname=banco',
            'root',
            'senhalura'
        );*/

        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $connection->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

        return $connection;
    }
}

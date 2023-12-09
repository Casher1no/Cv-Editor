<?php

namespace App\Database;

use Doctrine\DBAL\Connection;
use Doctrine\DBAL\DriverManager;
use Doctrine\DBAL\Exception;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\Tools\Setup;

class Database
{
    private static ?Connection $entityManager = null;

    public static function entityManager()
    {
        if (self::$entityManager === null) {
            $connectionParams = [
                'dbname' => $_ENV['DBNAME'],
                'user' => $_ENV['DBUSER'],
                'password' => $_ENV['PASSWORD'],
                'host' => $_ENV['HOST'],
                'driver' => $_ENV['DRIVER'],
            ];

            self::$entityManager = EntityManager::create(
                $connectionParams,
                Setup::createAttributeMetadataConfiguration([__DIR__ . '/Entity'])
            );
        }
        return self::$entityManager;
    }
}
<?php

namespace App\Database;

use Doctrine\DBAL\Connection;
use Doctrine\DBAL\DriverManager;
use Doctrine\DBAL\Exception;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\Tools\Setup;

class Database
{
    private static ?EntityManager $em = null;

    public static function em()
    {
        if (self::$em === null) {
            $connectionParams = [
                'dbname' => $_ENV['DBNAME'],
                'user' => $_ENV['DBUSER'],
                'password' => $_ENV['PASSWORD'],
                'host' => $_ENV['HOST'],
                'driver' => $_ENV['DRIVER'],
            ];

            self::$em = EntityManager::create(
                $connectionParams,
                Setup::createAttributeMetadataConfiguration([__DIR__ . '/Entity/Cv'])
            );
        }
        return self::$em;
    }
}
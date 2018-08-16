<?php
namespace Model\Repository;

class DatabaseConnection
{
    const DATABASE_USERNAME = 'georgiana';
    const DATABASE_PASSWORD = 'georgiana';
    const DSN = "mysql:host=localhost;dbname=cinemacity";

    public function getPDOConnection()
    {

        $pdo = null;
        try {
            $pdo = new \PDO(self::DSN, self::DATABASE_USERNAME, self::DATABASE_PASSWORD);
        } catch (\PDOException $e) {
            echo $e->getMessage();
        }
        return $pdo;
    }

}





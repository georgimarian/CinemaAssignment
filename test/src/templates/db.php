<?php

//namespace LogIn;

use Model\Repository\DatabaseConnection;
//require_once "/var/www/test/src/Model/Domain/DatabaseConnection.php";

$db  = new DatabaseConnection();
$pdo = $db->getPDOConnection();
$pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
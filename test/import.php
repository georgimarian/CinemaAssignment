<?php

use Model\Domain\ImportCSV;
use Model\Repository\Repository;
use View\ConsoleInput;

require_once './vendor/autoload.php';

$sapi = php_sapi_name();

if ($sapi !== 'cli') {
    return;
}

/**
 * Performs CSV import
 *
 * @param PDO $pdo
 */
function adminOperations(\PDO $pdo)
{
    $importTool = new Repository();
    $consoleIO  = new ConsoleInput();
    $fileReader = new ImportCSV();

    $consoleIO->displayOperations();
    $query = $consoleIO->getQuery();
    $query = trim(preg_replace('/\s+/', '', $query));

    switch ($query) {
        case 'none':
            break;
        case 'importMovies':
            $csv = $fileReader->importCSV('Movies.csv');
            $importTool->handleMovies($csv, $pdo);
            break;
        case 'importGenre':
            $csv = $fileReader->importCSV('Genres.csv');
            $importTool->insertGenres($csv, $pdo);
            break;
        case 'importHalls':
            $csv = $fileReader->importCSV('Halls.csv');
            $importTool->handleHalls($csv, $pdo);
            break;
        case 'schedulemovies':
            $importTool->scheduleMovies($pdo);
            break;
    }
}

$db  = new Model\Repository\DatabaseConnection();
$pdo = $db->getPDOConnection();
adminOperations($pdo);

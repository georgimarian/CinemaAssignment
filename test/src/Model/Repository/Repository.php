<?php

namespace Model\Repository;

use Model\Domain\Movie;
use Model\Domain\Schedule;

class Repository
{
    protected $conn;

    public function __construct()
    {
        $this->conn = new DatabaseConnection();
    }

    public function insertGenres(array $dataArray, \PDO $pdo): void
    {
        foreach ($dataArray as $key => $value) {
            $pdo->exec("INSERT INTO genre(`name`) VALUES ({$pdo->quote($value['genre'])})");
        }
    }

    public function insertBooking(array $dataArray, \PDO $pdo): void
    {
        foreach ($dataArray as $key => $value) {
            $pdo->exec("INSERT INTO booking(`date`,`film_fk`,`hall_fk`) VALUES ({$pdo->quote($value['date'])},{$pdo->quote($value['film'])},{$pdo->quote($value['hall'])})");
        }
    }

    public function handleHalls(array $dataArray, \PDO $pdo): void
    {
        foreach ($dataArray as $key => $value) {
            $pdo->exec("INSERT INTO hall(`name`,`numberofseats`) VALUES ({$pdo->quote($value['name'])} ,{$pdo->quote($value['numberofseats'])})");
        }
    }

    public function handleMovies(array $dataArray, \PDO $pdo): void
    {
        foreach ($dataArray as $key => $value) {
            $pdo->exec("INSERT INTO film(`name`,`year`,`picture`) VALUES ({$pdo->quote($value['name'])} ,{$pdo->quote($value['year'])},{$pdo->quote($value['picture'])})");
            $genreArray = explode("|", $value['genre']);
            $hallArray  = explode('|', $value['halls']);
            foreach ($genreArray as $genre) {
                $pdo->exec("INSERT INTO movietogenre(`film_fk`,`genre_fk`) VALUES ({$pdo->quote($value['name'])},{$pdo->quote($genre)})");
            }
            foreach ($hallArray as $hall) {
                $pdo->exec("INSERT INTO movietohall(`film_fk`,`hall_fk`) VALUES ({$pdo->quote($value['name'])},{$pdo->quote($hall)})");
            }

        }
    }

    public function handleUser(string $name, string $email, $password, \PDO $pdo): void
    {
        $pdo->exec("INSERT INTO user(`username`,`email`,`password`) VALUES ({$pdo->quote($name)} ,{$pdo->quote($email)},{$pdo->quote($password)})");
    }

    public function scheduleMovies(\PDO $pdo): void
    {
        $sql = "SELECT * FROM movietohall";
        foreach ($pdo->query($sql) as $key => $row) {
            print $row['film_fk'] . "\t";
            print $row['hall_fk'] . "\n";
            echo "date (dd/mm/yy hh:mm:ss) :";
            $date = fgets(STDIN);
            $pdo->exec("INSERT INTO schedule(`film_fk`,`hall_fk`,`date`) VALUES ({$pdo->quote($row['film_fk'])} ,{$pdo->quote($row['hall_fk'])},{$pdo->quote($date)})");
        }
    }

    public function selectMovies(\PDO $pdo): array
    {

        $movies = array();
        $sql    = "SELECT `name`, `year`, `picture` FROM `film`";
        foreach ($pdo->query($sql) as $key => $row) {
            $movie    = new Movie($row['name'], $row['year'], $row['picture']);
            $movies[] = $movie;
        }
        return $movies;

    }

    public function prepareSchedule(string $movie, \PDO $pdo): array
    {
        $scheduled = array();
        $sql       = "SELECT  * FROM `schedule`";
        foreach ($pdo->query($sql) as $key => $row) {
            if ($row['film_fk'] === $movie) {
                $schedule    = new Schedule($movie, $row['hall_fk'], $row['date']);
                $scheduled[] = $schedule;
            }
        }
        return $scheduled;
    }


    public function selectSchedule(\PDO $pdo): array
    {

        $scheduled = array();
        $sql       = "SELECT `film_fk`, `hall_fk`, `date` FROM `schedule`";

        foreach ($pdo->query($sql) as $key => $row) {
            $schedule    = new Schedule($row['film_fk'], $row['hall_fk'], $row['date']);
            $scheduled[] = $schedule;
        }
        return $scheduled;

    }

    public function selectAllSchedules(): array
    {
        $movies = array();
        $sql    = "SELECT `id`, `film_fk`, `hall_fk`, `date` FROM `schedule`";
        foreach ($this->conn->getPDOConnection()->query($sql) as $key => $row) {
            $movie    = new Schedule($row['id'], $row['film_fk'], $row['hall_fk'], $row['date']);
            $movies[] = $movie;
        }
        return $movies;

    }


}

<?php

namespace Model\Repository;

use Model\Domain\Movie;

class MoviesRepository extends Repository
{
    public function selectAllMovies(): array
    {
        $movies = array();
        $sql    = "SELECT `pk`, `name`, `year`, `picture` FROM `film`";
        foreach ($this->conn->getPDOConnection()->query($sql) as $key => $row) {
            $movie    = new Movie($row['name'], $row['year'], $row['picture'], $row['pk']);
            $movies[] = $movie;
        }
        return $movies;

    }

    public function selectMovie(int $id): array
    {
        $movies = array();
        $sql    = "SELECT `pk`,`name`, `year`, `picture` FROM `film` WHERE pk = $id";
        foreach ($this->conn->getPDOConnection()->query($sql) as $key => $row) {
            $movie    = new Movie($row['name'], $row['year'], $row['picture'], $row['pk']);
            $movies[] = $movie;
        }
        return $movies;

    }
}
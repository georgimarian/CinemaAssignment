<?php

namespace Controller;

use Model\Repository\MoviesRepository;
use View\View;

class MoviesController
{
    private function getRepository()
    {
        return new MoviesRepository();
    }

    public function showAll()
    {
        $repo   = $this->getRepository();
        $movies = $repo->selectAllMovies();
        $view   = new View('src/templates/homepage.php');
        $view->render(array('movies' => $movies));
    }

    public function showOne(int $id)
    {
        $repo  = $this->getRepository();
        $movie = $repo->selectMovie($id);
        $view  = new View('src/templates/movie.php');
        $view->render(array('movies' => $movie));
    }
}
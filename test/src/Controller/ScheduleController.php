<?php

namespace Controller;

use Model\Repository\Repository;
use View\View;

class ScheduleController
{
    private function getRepository()
    {
        return new Repository();
    }

    public function showAll()
    {
        $repo   = $this->getRepository();
        $movies = $repo->selectAllSchedules();
        $view   = new View('src/templates/schedule.php');
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
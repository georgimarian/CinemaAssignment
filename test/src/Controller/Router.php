<?php

namespace Controller;

class Router
{
    public function match($route)
    {
        $route = explode("/", ltrim($route, '/'));
        switch ($route[0]) {
            case 'movies':
                $controller = new MoviesController();
                if (!isset($route[1])) {
                    $controller->showAll();
                    break;
                }

                $controller->showOne((int)$route[1]);
                break;
            case 'login':
                $controller = new LoginController();
                if (!isset($route[1])) {
                    $controller->show($controller);
                    break;
                }
                $controller->loginSubmit();
                break;
            case 'register':
                $controller = new RegisterController();
                $controller->show($controller);
                break;
            case 'schedule':
                $controller = new ScheduleController();
                $controller->showAll($controller);
                break;
            default:
                $controller = new MoviesController();
                $controller->showAll();
                break;
        }
    }

}
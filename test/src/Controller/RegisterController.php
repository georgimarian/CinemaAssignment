<?php

namespace Controller;

use Model\Repository\Repository;
use View\View;

class RegisterController
{
    private function getRepository()
    {
        return new Repository();
    }

    public function show()
    {
        $view = new View('src/templates/register.php');
        $view->render(array());
    }

}
<?php

namespace Controller;

use Model\Repository\Repository;
use Model\Repository\UserRepository;
use View\View;

class LoginController
{
    private function getRepository()
    {
        return new Repository();
    }

    public function show()
    {
        $view = new View('src/templates/login.php');
        $view->render(array());
    }

    public function loginSubmit()
    {
        $username = $_POST['username'];
        $password = $_POST['password'];

        if (!$username || !$password) {
            return;
        }

        $repo = new UserRepository();
        $user = $repo->selectOne($username);
        if (!$user) {
            return;

        }
        $hashed_password = $user['password'];
        if (md5($password) !== $hashed_password) {
            return;

        }
        session_start();
        $_SESSION['username'] = $username;
        $view                 = new View('src/templates/welcome.php');
        $view->render(array());

    }

}
<?php
require_once './vendor/autoload.php';

$router = new Controller\Router();
$router->match($_SERVER['REQUEST_URI']);

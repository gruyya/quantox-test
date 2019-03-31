<?php

require 'vendor/autoload.php';
require 'core/bootstrap.php';

Connection::make($config['database']);

$router = new Router();

$router->load('routes.php');

$uri = trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/');
$method = $_SERVER['REQUEST_METHOD'];

$router->direct($uri, $method);

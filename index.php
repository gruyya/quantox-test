<?php

require 'vendor/autoload.php';
require 'core/bootstrap.php';

Connection::make($config['database']);

$router = new Router();

$router->load('routes.php');

$router->direct(Request::uri(), Request::method());

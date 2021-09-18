<?php

require 'vendor/autoload.php';
require 'core/bootstrap.php';

Session::sessionStart();

$router = new Router();

$router->load('routes.php');

$router->direct(Request::uri(), Request::method());

// delete this just testing
$router->load('gruyaBranch.php');
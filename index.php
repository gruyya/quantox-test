<?php

require 'vendor/autoload.php';
require 'core/bootstrap.php';

$router = new Router();

$router->load('routes.php');

$router->direct(Request::uri(), Request::method());
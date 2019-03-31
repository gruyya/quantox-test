<?php

class Router
{
	public $routes = [];

	public function direct($uri, $method)
	{
		$uriParser = explode('/', $uri);

		if (count($uriParser) > 1 ) {
			$uri = $uriParser[0] . '/{id}';
			$parameter = $uriParser[1];
		} else {
			$uri = $uriParser[0];
			$parameter = null;
		}

		if (array_key_exists($uri, $this->routes[$method])) {

			$controlerParser = explode('@', $this->routes[$method][$uri]);
			$controller = $controlerParser[0];
			$action = $controlerParser[1];

			return $this->callAction($controlerParser[0], $controlerParser[1], $parameter);
		}
		throw new Exception('No route defined for this URI');
	}

	public function callAction($controller, $action, $parameter)
	{
		$controller = new $controller;
		return $controller->$action($parameter);
	}

	public function load($file)
	{
		$this->routes = require $file;
	}
}
<?php

class HomeController
{
	public function index()
	{
		return require 'views/index.view.php';
	}

	public function show($id)
	{
		// die(var_dump($_SERVER));
		$student = $id;
		return require 'views/index.view.php';
	}

}
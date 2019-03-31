<?php

class HomeController
{
	public function index()
	{
		$users = AppContainer::getDatabase()->selectAll('users');

		return require 'views/index.view.php';
	}

	public function show($id)
	{
		$user = AppContainer::getDatabase()->selectOne('users', $id);
		return require 'views/studentShow.view.php';
	}

}
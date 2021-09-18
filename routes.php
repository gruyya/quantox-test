<?php

return [
	'GET' => [
		'' => 'HomeController@index',
		'students' => 'StudentsController@index',
		'student/{id}' => 'StudentsController@show',
		'loginShow' => 'LoginController@index',
		'logout' => 'LoginController@logoutUser',
		'registerShow' => 'RegisterController@index',
	],
	'POST' => [
		'login' => 'LoginController@loginUser',
		'register' => 'RegisterController@store',
	]
];


$router->load('jasa2.php');

$router->load('gruyaBranch2.php');


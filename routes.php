<?php

return [
	'GET' => [
		'' => 'HomeController@index',
		'students' => 'StudentsController@index',
		'student/{id}' => 'StudentsController@show',
		'loginShow' => 'LoginController@index',
		'logout' => 'LoginController@logoutUser',
	],
	'POST' => [
		'login' => 'LoginController@loginUser'
	]
];
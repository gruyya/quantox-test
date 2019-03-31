<?php

return [
	'GET' => [
		'' => 'HomeController@index',
		'student/{id}' => 'HomeController@show',
		'loginShow' => 'LoginController@index',
	],
	'POST' => [
		'login' => 'LoginController@loginUser'
	]
];
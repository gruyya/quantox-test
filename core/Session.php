<?php

class Session
{
	static public function sessionStart()
	{
		session_start();
	}

	static public function store($id, $email)
	{
		$_SESSION['id'] = $id;
		$_SESSION['email'] = $email;
	}

	static public function logout()
	{
		session_destroy();
	}
}
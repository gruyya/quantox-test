<?php

class LoginController
{
	protected $pdo;

	public function __construct()
	{
		$this->pdo = AppContainer::getConnection();
	}
	
	public function index()
	{
		return require 'views/login.view.php';
	}

	public function loginUser()
	{
		$this->login($_POST['email'], $_POST['password']);
	}

	public function login($email, $password)
	{	
		$statement = $this->pdo->prepare("SELECT * FROM users WHERE email = ? AND password = ?");
		$statement->bindValue(1, $email);
		$statement->bindValue(2, md5($password));
		$statement->execute();
		if ($statement->rowCount() > 0) {

			$row = $statement->fetch(PDO::FETCH_ASSOC);
			Session::store($row['id'],  $row['email']);
			return header("Location: /");

		} else {
			die('wrong username and password');
		}
	}

	public function logoutUser()
	{
		Session::logout();
		return header("Location: /");
	}
}
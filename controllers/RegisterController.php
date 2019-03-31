<?php

class RegisterController 
{
	protected $pdo;

	public function __construct()
	{
		$this->pdo = AppContainer::getConnection();
	}

	public function index()
	{
		return require 'views/register.view.php';
	}

	public function store()
	{
		$data = $this->validate($_POST);

		self::password_match($_POST['password'], $_POST['repeatpassword']);

		AppContainer::getDatabase()->insert('users', [
			'name' => $data['name'],
			'email' => filter_var($data['email'], FILTER_VALIDATE_EMAIL),
			'password' => md5($data['password']),
		]);

		return header("Location: /");
	}

	protected static function password_match($password, $passwordRepeat)
	{
		if ($password != $passwordRepeat) {
			die('passwords dont match');
		}
	}

	public function validate($array)
	{
		foreach ($array as $key => $value) {
			$sanitized[$key] = filter_var($value, FILTER_SANITIZE_SPECIAL_CHARS);
		}

		if (isset($sanitized['email'])) {
			if (!filter_var($sanitized['email'], FILTER_VALIDATE_EMAIL)) {
				die('wrong email');
			}
		}

		return $sanitized;
	}

	public function checkUserExists($email, $name)
	{
		$statement = $this->pdo->prepare("SELECT * FROM users WHERE email = ? OR name = ?");
		$statement->bindValue(1, $email);
		$statement->bindValue(2, $name);
		$statement->execute();
		if ($statement->rowCount() > 0) {
			die('There is a user with that email or username');
		}
	}
}
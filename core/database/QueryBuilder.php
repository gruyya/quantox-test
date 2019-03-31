<?php

class QueryBuilder
{
	protected $pdo;

	public function __construct($pdo)
	{
		$this->pdo = $pdo;
	}

	public function selectAll($table)
	{
		$statement = $this->pdo->prepare("select * from $table");
		$statement->execute();
		return $statement->fetchAll(PDO::FETCH_CLASS);
	}

	public function selectOne($table, $id)
	{
		$statement = $this->pdo->prepare("select * from $table where id = $id");
		$statement->execute();
		return $statement->fetch(PDO::FETCH_OBJ);
	}

	public function insert($table, $parameters)
	{
		if ($table = 'users') {
			$register = new RegisterController();
			$register->checkUserExists($parameters['email'], $parameters['name']);
		}

		$sql = sprintf(
			'insert into %s (%s) values (%s)',
			$table,
			implode(', ', array_keys($parameters)),
			':' . implode(', :', array_keys($parameters))
		);

		try {
			$statement = $this->pdo->prepare($sql);
			$statement->execute($parameters);
		} catch (Exception $e) {
			die('Whoops, something went wrong');			
		}
	}

}
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

}
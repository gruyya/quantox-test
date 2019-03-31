<?php

class AppContainer
{
	public static $database;
	public static $connection;

	public static function bind($database)
	{
		static::$database = $database;
	}

	public static function getDatabase()
	{
		return static::$database;
	}

	public static function bindConnection($connection)
	{
		static::$connection = $connection;
	}

	public static function getConnection()
	{
		return static::$connection;
	}
}
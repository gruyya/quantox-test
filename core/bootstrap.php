<?php

$config = require 'config.php';

AppContainer::bindConnection(Connection::make($config['database']));

AppContainer::bind(new QueryBuilder(
	AppContainer::getConnection())
);


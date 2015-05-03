<?php

// This is the database connection configuration.
return array(
	'connectionString' => 'mysql'.dirname(__FILE__).'/../data/schema.mysql.sql',
	// uncomment the following lines to use a MySQL database
	'connectionString' => 'mysql:host=10.24.248.90;dbname=dbwh',
	'emulatePrepare' => true,
	'username' => 'root',
	'password' => '',
	'charset' => 'utf8',
);

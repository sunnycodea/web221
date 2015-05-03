<?php

// This is the database connection configuration.
return array(
	'connectionString' => 'mysql'.dirname(__FILE__).'/../data/schema.mysql.sql',
	// uncomment the following lines to use a MySQL database
	'connectionString' => 'mysql:host=127.0.0.1;dbname=wh_svr',
	'emulatePrepare' => true,
	'username' => 'root',
	'password' => '123456',
	'charset' => 'utf8',
);

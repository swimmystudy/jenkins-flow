<?php
class DATABASE_CONFIG {

	public $default = array(
		'datasource' => 'Database/Mysql',
		'persistent' => false,
		'host' => 'localhost',
		'login' => 'jenkinsflow',
		'password' => 'jenkinsflow',
		'database' => 'jenkinsflow',
		'prefix' => 'blog_',
	);

	public $test = array(
		'datasource' => 'Database/Mysql',
		'persistent' => false,
		'host' => 'localhost',
		'login' => 'jenkinsflow',
		'password' => 'jenkinsflow',
		'database' => 'jenkinsflow_test',
		'prefix' => 'blog_',
	);	
}

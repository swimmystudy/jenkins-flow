<?php
class DATABASE_CONFIG {


	public $default = array(
		'datasource' => 'Database/Sqlite',
		'persistent' => false,
		'host' => 'localhost',
		'login' => '',
		'password' => '',
		'database' => 'db/application.db',
		'prefix' => 'blog_',
	);

	public $test = array(
		'datasource' => 'Database/Sqlite',
		'persistent' => false,
		'host' => 'localhost',
		'login' => '',
		'password' => '',
		'database' => 'db/application_test.db',
		'prefix' => 'blog_',
	);
/**
 * フルパスでないと駄目みたい。
 *
 */
	public function __construct(){
		$this->default['database'] = APP.$this->default['database'];
		$this->test['database'] = APP.$this->test['database'];
	}

}

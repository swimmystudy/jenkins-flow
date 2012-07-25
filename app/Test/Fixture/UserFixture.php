<?php
/**
 * UserFixture
 *
 */
class UserFixture extends CakeTestFixture {

/**
 * Import
 *
 * @var array
 */
	public $import = array('model' => 'User');

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'email' => 'test@test.com',
			'password' => 'test',
			'name' => '管理者',
			'is_active' => 1,
		),
		array(
			'id' => 2,
			'email' => 'test2@test.com',
			'password' => 'test',
			'name' => '非アクティブなユーザー',
			'is_active' => 0,
		),
	);

}

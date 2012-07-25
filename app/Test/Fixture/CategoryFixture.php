<?php
/**
 * CategoryFixture
 *
 */
class CategoryFixture extends CakeTestFixture {

/**
 * Import
 *
 * @var array
 */
	public $import = array('model' => 'Category');

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'parent_id' => NULL,
			'lft' =>  NULL,
			'rght' =>  NULL,
			'name' => 'PHP',
		),
		array(
			'id' => 2,
			'parent_id' => NULL,
			'lft' =>  NULL,
			'rght' =>  NULL,
			'name' => 'CAKEPHP',
		),
		array(
			'id' => 3,
			'parent_id' => NULL,
			'lft' =>  NULL,
			'rght' =>  NULL,
			'name' => 'PHPUnit',
		),
	);

}

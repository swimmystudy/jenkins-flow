<?php
/**
 * TagFixture
 *
 */
class TagFixture extends CakeTestFixture {

/**
 * Import
 *
 * @var array
 */
	public $import = array('model' => 'Tag');

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'name' => 'タグ1',
		),
		array(
			'id' => 2,
			'name' => 'タグ2',
		),
		array(
			'id' => 3,
			'name' => 'タグ3',
		),
	);

}

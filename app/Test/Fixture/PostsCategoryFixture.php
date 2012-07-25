<?php
/**
 * PostsCategoryFixture
 *
 */
class PostsCategoryFixture extends CakeTestFixture {

/**
 * Import
 *
 * @var array
 */
	public $import = array('model' => 'PostsCategory');

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'post_id' => 1,
			'category_id' => 1
		),
	);

}

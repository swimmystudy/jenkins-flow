<?php
/**
 * PostsTagFixture
 *
 */
class PostsTagFixture extends CakeTestFixture {

/**
 * Import
 *
 * @var array
 */
	public $import = array('model' => 'PostsTag');

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'post_id' => 1,
			'tag_id' => 1
		),
	);

}

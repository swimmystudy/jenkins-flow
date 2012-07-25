<?php
/**
 * PostFixture
 *
 */
class PostFixture extends CakeTestFixture {

/**
 * Import
 *
 * @var array
 */
	public $import = array('model' => 'Post');

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'user_id' => 1,
			'subject' => 'ブログ記事のタイトル１',
			'body' => 'ブログの内容',
			'is_publish' => 1,
		),
		array(
			'id' => 2,
			'user_id' => 1,
			'subject' => 'ブログ記事のタイトル(下書き)',
			'body' => 'ブログの内容',
			'is_publish' => 0,
		),
		array(
			'id' => 3,
			'user_id' => 1,
			'subject' => 'ブログ記事のタイトル２',
			'body' => 'ブログの内容',
			'is_publish' => 1,
		),
	);

}

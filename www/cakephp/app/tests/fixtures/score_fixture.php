<?php
/* Score Fixture generated on: 2011-10-09 18:42:24 : 1318185744 */
class ScoreFixture extends CakeTestFixture {
	var $name = 'Score';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'value' => array('type' => 'float', 'null' => true, 'default' => NULL),
		'trait_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'user_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'MyISAM')
	);

	var $records = array(
		array(
			'id' => 1,
			'value' => 1,
			'trait_id' => 1,
			'user_id' => 1
		),
	);
}

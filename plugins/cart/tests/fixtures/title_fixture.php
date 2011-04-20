<?php
/* Title Fixture generated on: 2011-04-14 13:17:24 : 1302787044 */
class TitleFixture extends CakeTestFixture {
	var $name = 'Title';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 5, 'key' => 'primary'),
		'name' => array('type' => 'string', 'null' => true, 'default' => NULL, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	);

	var $records = array(
		array(
			'id' => 1,
			'name' => 'Mr'
		),
        array(
			'id' => 2,
			'name' => 'Mrs'
		),
        array(
			'id' => 3,
			'name' => 'Miss'
		),
	);
}
?>
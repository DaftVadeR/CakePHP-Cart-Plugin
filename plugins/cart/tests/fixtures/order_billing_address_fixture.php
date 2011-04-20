<?php
/* BillingAddress Fixture generated on: 2011-04-14 13:15:48 : 1302786948 */
class BillingAddressFixture extends CakeTestFixture {
	var $name = 'BillingAddress';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'first_name' => array('type' => 'string', 'null' => true, 'default' => NULL, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'last_name' => array('type' => 'string', 'null' => true, 'default' => NULL, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'zip_code' => array('type' => 'string', 'null' => true, 'default' => NULL, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'title_id' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'length' => 5),
		'address' => array('type' => 'text', 'null' => true, 'default' => NULL, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'town_city' => array('type' => 'string', 'null' => true, 'default' => NULL, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'province' => array('type' => 'string', 'null' => true, 'default' => NULL, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'country_id' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'length' => 5),				
		'created' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	);

	var $records = array(
		array(
			'id' => 1,
			'first_name' => 'Lorem ipsum dolor sit amet',
			'last_name' => 'Lorem ipsum dolor sit amet',
			'zip_code' => 'Lorem ipsum dolor sit amet',
			'title_id' => 1,
			'address' => 'Street address 1, Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida.',
			'town_city' => 'Lorem ipsum dolor sit amet',
			'province' => 'Lorem ipsum dolor sit amet',
			'country_id' => 1,			
			'created' => '2011-04-14 13:15:48',
			'modified' => '2011-04-14 13:15:48'
		),
        array(
			'id' => 2,
			'first_name' => 'Lorem ipsum dolor sit amet',
			'last_name' => 'Lorem ipsum dolor sit amet',
			'zip_code' => 'Lorem ipsum dolor sit amet',
			'title_id' => 1,
			'address' => 'Street address 2, Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc.',
			'town_city' => 'Lorem ipsum dolor sit amet',
			'province' => 'Lorem ipsum dolor sit amet',
			'country_id' => 1,			
			'created' => '2011-04-13 10:23:54',
			'modified' => '2011-04-13 10:23:54'
		),
	);
}
?>